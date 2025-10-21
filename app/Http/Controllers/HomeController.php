<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThemeSetting;

class HomeController extends Controller
{
    public function home(Request $request){
        $homeDatas = getHomeSections();

        return view('frontend.home', compact('homeDatas'));
    }
}
