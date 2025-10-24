<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThemeSetting;
use App\Models\News;
use App\Models\Category;

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
            ->where('id', '!=', $news->id) // বর্তমান নিউজ বাদ
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

    public function category(Request $request){
        $category = Category::with('news')->where('status', 1)->where('slug', $request->slug)->first();
        return view('frontend.pages.category', compact('category'));
    }
}
