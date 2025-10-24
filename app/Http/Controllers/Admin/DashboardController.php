<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\ThemeSetting;
use App\Models\News;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.dashboard');
    }

    public function setting()
    {
        return view('backend.settings.setting');
    }

    public function settingUpdate(Request $request){
    	 $validatedData = $request->validate([
        	'site_name' => 'required',
        	'site_title' => 'required',
        	'site_address' => 'required',
        	'site_phone' => 'required',
        	'site_email' => 'required|email',
            'site_map' => 'nullable',
            'site_another_phone' => 'nullable',
            'site_whatsapp' => 'nullable',
            'site_logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024',
    	]);

	    	Setting::update_option('site_name', $request->site_name);
	    	Setting::update_option('site_title', $request->site_title);
	    	Setting::update_option('site_address', $request->site_address);
	    	Setting::update_option('site_phone', $request->site_phone);
	    	Setting::update_option('site_email', $request->site_email);
            Setting::update_option('site_map', $request->site_map);
            Setting::update_option('site_another_phone', $request->site_another_phone);
            Setting::update_option('site_whatsapp', $request->site_whatsapp);

        if($request->hasFile('site_logo')){
            $file = $request->file('site_logo');
            $fileName = Str::random(15).'-'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/';
            $file->move($destinationPath,$fileName);
            Setting::update_option('site_logo', $fileName);
        }

        return Redirect::back()->with('success', __('Settings edited Successfully'));
    }   


    public function themeSetting(Request $r)
    {
        if ($r->type == 'add') {
            $postData = new ThemeSetting();
            $postData->status = 'active';
            $postData->save();

            Session::flash('success', 'New Added Successfully Done');
            return redirect()->route('themeSettingEdit', $postData->id);
        }

        $homeDatas = ThemeSetting::whereNull('parent_id')->orderBy('drag', 'asc')->get();
        return view('backend.settings.themeSetting', compact('homeDatas'));
    }

    public function themeSettingEdit(Request $r, $id)
    {
        $homedata = ThemeSetting::whereNull('parent_id')->find($id);

        if (!$homedata) {
            Session::flash('error', 'Home Data Not Found');
            return redirect()->route('themeSetting');
        }

        if ($r->type == "delete") {
            $homedata->homeDataIds()->delete();
            $homedata->delete();

            Session::flash('success', 'Data Delete Successfully Done!');
            return redirect()->route('themeSetting');
        }

        $searchProducts = null;

        if ($r->ajax()) {
            if ($r->type == 'search') {
                $searchProducts = News::latest()
                    ->where('status', 'active')
                    ->where(function ($q) use ($r) {
                        if ($r->key) {
                            $q->where('title', 'like', '%' . $r->key . '%')
                            ->orWhere('slug', 'like', '%' . $r->key . '%');
                        }
                    })
                    ->select(['id', 'title', 'slug', 'views', 'status'])
                    ->paginate(25);

                if ($searchProducts->count() > 0) {
                    $datas = view('backend.settings.includes.searchResult', compact('searchProducts'))->render();
                } else {
                    $datas = '<ul><li style="padding:10px;color:#ff4d4f;">No product found</li></ul>';
                }

                return response()->json([
                    'success' => true,
                    'view' => $datas,
                ]);
            }

            if ($r->type == 'addproduct' && $r->id) {
                $product = News::where('status', 'active')->find($r->id);

                if ($product) {
                    ThemeSetting::firstOrCreate([
                        'src_id' => $product->id,
                        'parent_id' => $homedata->id,
                    ]);
                }
            }

            $datas = view('backend.settings.includes.homeProducts', compact('homedata'))->render();

            return response()->json([
                'success' => true,
                'view' => $datas,
            ]);
        }


        return view('backend.settings.themeSettingEdit', compact('homedata', 'searchProducts'));
    }

    public function themeSettingUpdate(Request $r, $id)
    {
        $homedata = ThemeSetting::find($id);

        if (!$homedata) {
            Session::flash('error', 'Home Data Not Found');
            return redirect()->route('themeSetting');
        }

        $r->validate([
            'title' => 'required|max:191',
            'serial' => 'required|numeric',
            'limit' => 'required|numeric',
            'section_type' => 'nullable|numeric',
        ]);

        $homedata->name = $r->title;
        $homedata->serial = $r->serial ?? 0;
        $homedata->news_limit = $r->limit ?? 0;
        $homedata->section_type = $r->section_type ?? 0;
        $homedata->status = $r->status ? 'active' : 'inactive';
        $homedata->save();

        if (isset($r->delete) && is_array($r->delete)) {
            ThemeSetting::whereIn('id', $r->delete)->delete();
        }

        Session::flash('success', 'Data Updated Successfully Done');
        return redirect()->back();
    }
}
