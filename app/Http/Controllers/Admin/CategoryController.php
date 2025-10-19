<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryIndex(Request $r)
    {
        if($r->action){
            if($r->checkid){

            $datas=Category::latest()->whereIn('id',$r->checkid)->get();

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

        $items=Category::latest()->where('status','<>','temp')
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
      ->select(['id','name','slug','created_at','status'])
      ->paginate(25);
      
      //Total Count Results
      $totals = DB::table('categories')->where('status','<>','temp')
      ->selectRaw('count(*) as total')
      ->selectRaw("count(case when status = 'active' then 1 end) as active")
      ->selectRaw("count(case when status = 'inactive' then 1 end) as inactive")
      ->first();
      
      return view('backend.category.categoryIndex',compact('items','totals'));
    }
    

    public function categoryAction(Request $r,$action,$id=null){
      
      //Add Category  Start
      if($action=='create'){
        $item =Category::where('status','temp')->first();
        if(!$item){
          $item =new Category();
          $item->status ='temp';
        }
        $item->created_at=Carbon::now();
        $item->save();

        return redirect()->route('categoryAction',['edit',$item->id]);
      }
      //Add Category  End
      
      $item =Category::find($id);
      if(!$item){
        Session()->flash('error','This Category Are Not Found');
        return redirect()->route('categoryIndex');
      }

      //Update Category  Start
      if($action=='update'){

        $check = $r->validate([
            'name' => 'required|max:191',
            'is_featured' => 'nullable',
            'description' => 'nullable|max:1000',
            'parent_id' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($r->all());

        $item->name=$r->name;
        $item->description=$r->description;
        $item->parent_id=$r->parent_id;
        $item->is_featured=$r->is_featured ? 1 : 0 ;
        $item->seo_title=$r->seo_title;
        $item->seo_description=$r->seo_description;
        $item->seo_keyword=$r->seo_keyword;

        ///////Image Uploard Start////////////
        if ($r->hasFile('image')) {
            $file = $r->image;
            $media = uploadMedia($file,$item->id, 2, 1,auth()->id());
        }

            
        ///////Image Uploard End////////////

        ///////Banner Uploard Start////////////
        if ($r->hasFile('banner')) {
            $file = $r->file('banner');
            $bannerMedia = uploadMedia($file, $item->id, 2, 2, auth()->id()); // use_of_file = 2 for banner
        }
        ///////Banner Uploard End////////////

        $slug =Str::slug($r->name);
        if($slug==null){
          $item->slug=$item->id;
        }else{
          if(Category::where('slug',$slug)->whereNotIn('id',[$item->id])->count() >0){
          $item->slug=$slug.'-'.$item->id;
          }else{
          $item->slug=$slug;
          }
        }
        if($r->created_at){
          $item->created_at =$r->created_at;
        }
        $item->status =$r->status?'active':'inactive';
        $item->is_featured =$r->is_featured?1:0;
        $item->save();

          Session()->flash('success','Your Are Successfully Updated');
          return redirect()->back();

      }
      //Update Category  End

      //Delete Category  Start
      if($action=='delete'){
          $item->delete();
          Session()->flash('success','Your Are Successfully Deleted!');
          return redirect()->route('categoryIndex');
      }
      $categories =Category::where('status','<>','temp')->where('parent_id',null)->whereNot('id', $item->id)->get();
      
      return view('backend.category.categoryEdit',compact('item','categories'));
    }
}
