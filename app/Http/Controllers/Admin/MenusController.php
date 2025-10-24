<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MenusController extends Controller
{
    public function menus(){
        $menus = Menu::latest()
            ->whereNull('parent_id')
            ->where('status', '<>', 'temp')->paginate(100);

        return view('backend.menus.menusAll', compact('menus'));
    }


    public function menusCreate()
    {
        $menu = Menu::latest()
            ->whereNull('parent_id')
            ->where('addedby_id', Auth::id())
            ->where('status', 'temp')
            ->first();

        if (!$menu) {
            $menu = new Menu();
            $menu->status = 'temp';
            $menu->addedby_id = Auth::id();
            $menu->save();
        } else {
            $menu->created_at = Carbon::now();
            $menu->save();
        }

        return redirect()->route('menusEdit', $menu->id);
    }

 
 
    public function menusEdit($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            Session::flash('error', 'This Menu is not found.');
            return redirect()->route('menus');
        }

        $parent = Menu::find($menu->parent_id) ?? $menu;
        $pages = Post::where('type',0)->where('status','active')->get();
        $categories = DB::table('categories')->whereNull('parent_id')->where('status','active')->get();

        return view('backend.menus.menuEdit', compact('menu', 'parent', 'pages', 'categories'));
    }


    public function menusUpdate(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            Session::flash('error', 'This Menu is not found.');
            return redirect()->route('menus');
        }

        $parent = Menu::find($menu->parent_id) ?? $menu;

        $parent->name = $request->name;
        $parent->slug = $request->slug;
        $parent->location=$request->location;
        $parent->status = $request->status ? 'active' : 'inactive';
        $parent->save();

        if ($request->menuids) {
            foreach ($request->menuids as $i => $menuId) {
                if ($item = Menu::find($menuId)) {
                    $item->view = $i;
                    $item->save();
                }
            }
        }

        Session::flash('success', 'Menu updated successfully.');
        return redirect()->back();
    }


    public function menusDelete($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            Session::flash('error', 'This Menu is not found.');
            return redirect()->route('menus');
        }
        // Delete all child items
        foreach ($menu->subMenus as $item) {
            if ($item->image && File::exists(public_path($item->image))) {
                File::delete(public_path($item->image));
            }
            $item->delete();
        }

        if ($menu->image && File::exists(public_path($menu->image))) {
            File::delete(public_path($menu->image));
        }

        $menu->delete();

        Session::flash('success', 'Menu deleted successfully.');
        return redirect()->back();
    }



    public function menusItemsPost(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            Session::flash('error', 'This Menu is not found.');
            return redirect()->route('admin.menus');
        }
        if($request->menuname){
            $request->validate([
                'menuname' => 'required|max:191',
                'menulink' => 'required|max:300',
                'parent_id' => 'nullable|numeric',
            ]);
        }elseif($request->pages){
          $check = $request->validate([
              'pages.*' => 'required|numeric',
              'parent' => 'required|numeric',
            ]);
        }elseif($request->category){
          $check = $request->validate([
              'category.*' => 'required|numeric',
              'parent' => 'required|numeric',
            ]);
        }else{
            
        }
        
        if($request->menuname){
            $item = new Menu();
            $item->parent_id = $menu->id;
            $item->name = $request->menuname;
            $item->slug = $request->menulink;
            $item->menu_type = $request->menu_type ?? 0;
            $item->status = 'active';
            $item->addedby_id = Auth::id();
            $item->save();
            
        }
        
        if($request->pages){
            for ($i =0; $i < count($request->pages); $i++){
              $items =new  Menu();
              $items->parent_id=$menu->id;
              $items->menu_type=1;
              $items->src_id = $request->pages[$i];
              $items->status='active';
              $items->addedby_id=auth::id();
              $items->save();

          }
        }
        
        if($request->category){
            for ($i =0; $i < count($request->category); $i++){
              $items =new  Menu();
              $items->parent_id=$menu->id;
              $items->menu_type=2;
              $items->src_id = $request->category[$i];
              $items->status='active';
              $items->addedby_id=auth::id();
              $items->save();
            }
        }
        
        if($request->services){
            for ($i =0; $i < count($request->services); $i++){
              $items =new  Menu();
              $items->parent_id=$menu->id;
              $items->menu_type=3;
              $items->src_id = $request->services[$i];
              $items->status='active';
              $items->addedby_id=auth::id();
              $items->save();

          }
        }
        
        if($request->doctor){
            for ($i =0; $i < count($request->doctor); $i++){
              $items =new  Menu();
              $items->parent_id=$menu->id;
              $items->menu_type=4;
              $items->src_id = $request->doctor[$i];
              $items->status='active';
              $items->addedby_id=auth::id();
              $items->save();

          }
        }
        
        Session::flash('success', 'Menu item added successfully.');
        return redirect()->back();
    }



    public function menusItemsEdit($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            Session::flash('error', 'Menu item not found.');
            return redirect()->route('menus');
        }
        return view('backend.menus.menuItemEdit', compact('menu'));
    }



    public function menusItemsUpdate(Request $request, $id)
    {
        $item = Menu::find($id);
        if (!$item) {
            Session::flash('error', 'Menu item not found.');
            return redirect()->route('menus');
        }

        $request->validate([
            'name' => 'required|max:191',
            'slug' => 'nullable|max:300',
            'icon' => 'nullable|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->icon = $request->icon;

        if ($request->hasFile('image')) {
            if ($item->image && File::exists(public_path($item->image))) {
                File::delete(public_path($item->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/menus'), $imageName);
            $item->image = 'uploads/menus/' . $imageName;
        }

        $item->save();

        Session::flash('success', 'Menu item updated successfully.');
        return redirect()->back();
    }


    public function menusItemsDelete($id)
    {
        $item = Menu::find($id);
        if (!$item) {
            Session::flash('error', 'Menu item not found.');
            return redirect()->route('menus');
        }

        foreach ($item->subMenus as $sub) {
            $sub->parent_id = $item->parent_id;
            $sub->save();
        }

        if ($item->image && File::exists(public_path($item->image))) {
            File::delete(public_path($item->image));
        }

        $item->delete();

        Session::flash('success', 'Menu item deleted successfully.');
        return redirect()->back();
    }
    
    
    // Page Management Function Start
    
     public function pages(Request $r){

      $pages=Post::latest()->where('type',0)
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
      ->select(['id','name','slug','type','created_at','status'])
      ->paginate(25)->appends([
        'search'=>$r->search,
        'status'=>$r->status,
        'startDate'=>$r->startDate,
        'endDate'=>$r->endDate,
      ]);

      //Total Count Results
      $totals = DB::table('posts')
      ->where('type',0)
      ->selectRaw('count(*) as total')
      ->selectRaw("count(case when status = 'active' then 1 end) as active")
      ->selectRaw("count(case when status = 'inactive' then 1 end) as inactive")
      ->selectRaw("count(case when status = 'temp' then 1 end) as temp")
      ->first();

      return view('backend.pages.pagesAll',compact('pages','r','totals'));

    }

    public function pagesCreate(){
        
        $page = Post::latest()
            ->where('type',0)
            ->where('status', 'temp')
            ->first();

        if (!$page) {
            $page =new Post();
            $page->type =0;
            $page->status ='temp';
        } else {
            $page->created_at = Carbon::now();
            $page->save();
        }
        
      
      $page->save();
      
      return redirect()->route('pagesEdit',$page->id);

    }

    public function pagesEdit($id){
      $page =Post::find($id);
      return view('backend.pages.pageEdit',compact('page'));

    }


     public function pagesUpdate(Request $r,$id){

      $page =Post::find($id);
      if(!$page){
        Session()->flash('error','This Page Are Not Found');
        return redirect()->route('pages');
      }

       $check = $r->validate([
            'name' => 'required|max:191',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',

        ]);

        if(!$check){
            Session::flash('error','Need To validatation');
            return back();
        }
      
      $page->name=$r->name;
      $page->video_url=$r->video_url;
      $page->short_description=$r->short_description;
      $page->description=$r->description;
      $page->seo_title=$r->seo_title;
      $page->seo_description=$r->seo_description;
      $page->seo_keyword=$r->seo_keyword;
      $page->is_featured = $r->is_featured ? 1 : 0;

      ///////Image Uploard Start////////////
        if ($r->hasFile('image')) {
            $file = $r->image;
            $media = uploadMedia($file,$page->id, 4, 1,auth()->id());
        }
      
      ///////Image Uploard End////////////

      ///////Image Uploard End////////////
        if ($r->hasFile('banner')) {
            $file = $r->file('banner');
            $bannerMedia = uploadMedia($file, $page->id, 4, 2, auth()->id()); // use_of_file = 2 for banner
        }
      ///////Image Uploard End////////////

        if (!$page->slug) { 
            $slug = Str::slug($r->name);
        
            if ($slug == null) {
                $page->slug = $page->id;
            } else {
                // If same slug exists for another record, append ID
                if (Post::where('type', 0)
                        ->where('slug', $slug)
                        ->where('id', '!=', $page->id)
                        ->exists()) {
                    $page->slug = $slug . '-' . $page->id;
                } else {
                    $page->slug = $slug;
                }
            }
        }
        // If slug already exists → it stays unchanged
        
        if ($r->published_at) {
            $page->published_at = $r->published_at;
        }
      $page->status =$r->status?'active':'inactive';
      $page->save();
      Session()->flash('success','Your Are Successfully Done');
      return redirect()->back();
    }


    public function pagesDelete($id){
      
      $page =Post::find($id);
      if(!$page){
        Session()->flash('error','This Page Are Not Found');
        return redirect()->route('pages');
      }

      if($page->id==1 || $page->id==2 || $page->id==3 || $page->id==4 || $page->id==5 || $page->id==6 || $page->id==7 || $page->id==8 || $page->id==9){
        Session()->flash('error','This Page Can Not Deleted');
        return redirect()->route('pages');
      }
    $page->delete();
      Session()->flash('success','Your Are Successfully Done');
      return redirect()->back();
      
    }
    
}
