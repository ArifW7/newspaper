<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThemeSetting;
use App\Models\News;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function home(Request $request){
        $homeDatas = getHomeSections();
        return view('frontend.home', compact('homeDatas'));
    }

    public function newsDetails(Request $request, $slug){
        $news = News::with('category', 'tags')
        ->where('status', 'active')
        ->where(function ($q) use ($slug) {
            $q->where('slug', $slug)
              ->orWhere('title', 'LIKE', '%' . $slug . '%');
        })
        ->first();

        $relatedNews = News::where('status', 'active')
            ->where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        if ($relatedNews->isEmpty()) {
            $relatedNews = News::where('status', 'active')
                ->where('id', '!=', $news->id)
                ->inRandomOrder()
                ->take(3)
                ->get();
        }

        $mostViews = News::where('status', 'active')->where('views','desc')->take(3)->get();
        $latestNews = News::latest()->where('status', 'active')->orderByRaw('CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority ASC, created_at DESC')->take(3)->get();
        return view('frontend.pages.news_details', compact('news', 'mostViews', 'latestNews', 'relatedNews'));
    }

    public function category($category_slug){
        $category = Category::with('news')->where('status', 'active')->where('slug', $category_slug)->first();
        $latests = News::latest()->where('status', 'active')->take(5)->get();
        return view('frontend.pages.category', compact('category', 'latests'));
    }

    
    public function subCategory($category_slug, $subcategory_slug){
        $category = Category::where('slug', $category_slug)->firstOrFail();
        
        $subcategory = Category::with('news')
            ->where('parent_id', $category->id)
            ->where('slug', $subcategory_slug)
            ->where('status', 'active')
            ->firstOrFail();

        $latests = News::where('status', 'active')
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.pages.subcategory', compact('category', 'subcategory', 'latests'));
    }


    public function pageView($slug){
        $page =Post::latest()->where('type',0)->where('slug',$slug)->first();
        if(!$page){
            return abort('404');
        }
        if($page->slug == 'contact-us'){
            return view('frontend.pages.contactUs',compact('page'));
        }
        return view('frontend.pages.pageView',compact('page'));
    }
}
