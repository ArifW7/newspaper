<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
    public function newsIndex(Request $r)
    {
        if($r->action){
            if($r->checkid){

            $datas=News::latest()->whereIn('id',$r->checkid)->get();

            foreach($datas as $data){
                if($r->action==1){
                    $data->status='active';
                    $data->save();
                }elseif($r->action==2){
                    $data->status='inactive';
                    $data->save();
                }elseif($r->action==3){
                    $data->fetured=true;
                    $data->save();
                }elseif($r->action==4){
                    deleteMedia($data->id, 1, 1);
                    deleteMedia($data->id, 1, 2);
                    $data->delete();
                }

            }

            Session()->flash('success','Action Successfully Completed!');
            }else{
                Session()->flash('info','Please Need To Select Minimum One Post');
            }

            return redirect()->back();
        }

        $items=News::with('category')->latest()->where('status','<>','temp')
        ->where(function($q) use ($r) {
          if($r->search){
              $q->where('name','LIKE','%'.$r->search.'%');
          }
          
          if($r->startDate || $r->endDate){
              if($r->startDate){
                  $from =$r->startDate;
              }else{
                  $from=Carbon::now()->format('Y-m-d');
              }

              if($r->endDate){
                  $to =$r->endDate;
              }else{
                  $to=Carbon::now()->format('Y-m-d');
              }

              $q->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to);

          }
        
        if($r->status){
             $q->where('status',$r->status); 
        }
      })
      ->select(['id','title','category_id','slug','created_at','status'])
      ->paginate(25);
      
      //Total Count Results
      $totals = DB::table('news')->where('status','<>','temp')
      ->selectRaw('count(*) as total')
      ->selectRaw("count(case when status = 'active' then 1 end) as active")
      ->selectRaw("count(case when status = 'inactive' then 1 end) as inactive")
      ->first();
      
      return view('backend.news.newsIndex',compact('items','totals'));
    }

    public function newsAction(Request $r, $action, $id = null){
        // Create News
        if ($action == 'create') {
            $item = News::where('status','temp')->first();
            if (!$item) {
                $item = new News();
                $item->status = 'temp';
            }
            $item->created_at = Carbon::now();
            $item->save();
            return redirect()->route('newsAction', ['edit', $item->id]);
        }

        $item = News::find($id);
        if (!$item) {
            toastr()->error('News not found!');
            return redirect()->route('newsIndex');
        }

        if ($action == 'update') {
            $check = $r->validate([
                'title' => 'required|max:255',
                'category_id' => 'nullable|numeric',
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
                'seo_title' => 'nullable|max:200',
                'video_url' => 'nullable|url|max:255',
                'seo_description' => 'nullable|max:250',
                'seo_keyword' => 'nullable|string|max:250',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'nullable',
                'is_featured' => 'nullable',
                'published_at' => 'nullable|date',
            ]);
            

            $item->title = $r->title;
            $item->category_id = $r->category_id;
            $item->short_description = $r->short_description;
            $item->description = $r->description;
            $item->video_url = $r->video_url;
            $item->seo_title = $r->seo_title;
            $item->seo_description = $r->seo_description;
            $item->seo_keyword = $r->seo_keyword;
            $item->status = $r->status ? 'active' : 'inactive';
            $item->is_featured = $r->is_featured ? 1 : 0;

            if ($r->hasFile('image')) {
                $file = $r->image;
                $media = uploadMedia($file,$item->id, 1, 1,auth()->id());
            }

            if ($r->hasFile('banner')) {
                $file = $r->file('banner');
                $bannerMedia = uploadMedia($file, $item->id, 1, 2, auth()->id()); // use_of_file = 2 for banner
            }



            $slug = Str::slug($r->title);
            if ($slug == null) {
                $item->slug = $item->id;
            } else {
                if (News::where('slug',$slug)->whereNotIn('id', [$item->id])->exists()) {
                    $item->slug = $slug.'-'.$item->id;
                } else {
                    $item->slug = $slug;
                }
            }

            if ($r->published_at) {
                $item->published_at = $r->published_at;
            }
            $item->save();
        }

        if ($action == 'delete') {
            deleteMedia($item->id, 1, 1);
            deleteMedia($item->id, 1, 2);
            $item->delete();
            Session()->flash('success', 'You have successfully deleted the news!');
            return redirect()->route('newsIndex');
        }   
        $categories = DB::table('categories')->where('status','active')->get();
        return view('backend.news.newsEdit', compact('item','categories')); 
    }

}
