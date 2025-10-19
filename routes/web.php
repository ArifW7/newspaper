<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\MenusController;

Route::group(['middleware'=> ['guest:web']],function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user','middleware' => ['auth:web']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Routes
    Route::get('category/index', [CategoryController::class, 'categoryIndex'])->name('categoryIndex');
    Route::any('category/{action}/{id?}', [CategoryController::class, 'categoryAction'])->name('categoryAction');

    // Category Routes
    Route::get('news/index', [NewsController::class, 'newsIndex'])->name('newsIndex');
    Route::any('news/{action}/{id?}', [NewsController::class, 'newsAction'])->name('newsAction');

    // Route Settings
    Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
    Route::post('/setting/update', [DashboardController::class, 'settingUpdate'])->name('settingUpdate');
    // Route Settings End

    // Theme Route
    Route::get('/theme-setting',[DashboardController::class,'themeSetting'])->name('themeSetting');
    Route::get('/theme-setting/edit/{id}',[DashboardController::class,'themeSettingEdit'])->name('themeSettingEdit');
    Route::any('/theme-setting/update/{id}',[DashboardController::class,'themeSettingUpdate'])->name('themeSettingUpdate');
    // Theme Route End


    Route::get('/menus',[MenusController::class,'menus'])->name('menus');
    Route::get('/menus/create',[MenusController::class,'menusCreate'])->name('menusCreate');
    Route::get('/menus/config/{id}',[MenusController::class,'menusEdit'])->name('menusEdit');
    Route::post('/menus/update/{id}',[MenusController::class,'menusUpdate'])->name('menusUpdate');
    Route::get('/menus/delete/{id}',[MenusController::class,'menusDelete'])->name('menusDelete');
    
    Route::post('/menus/items/post/{id}',[MenusController::class,'menusItemsPost'])->name('menusItemsPost');
    Route::get('/menus/items/edit/{id}',[MenusController::class,'menusItemsEdit'])->name('menusItemsEdit');
    Route::post('/menus/items/update/{id}',[MenusController::class,'menusItemsUpdate'])->name('menusItemsUpdate');
    Route::get('/menus/items/delete/{id}',[MenusController::class,'menusItemsDelete'])->name('menusItemsDelete');
    // Menus Route End

    //Page Management
    Route::get('/pages/all',[MenusController::class,'pageView'])->name('pageView');
    Route::get('/pages',[MenusController::class,'pages'])->name('pages');
    Route::get('/pages/create',[MenusController::class,'pagesCreate'])->name('pagesCreate');
    Route::get('/pages/edit/{id}',[MenusController::class,'pagesEdit'])->name('pagesEdit');
    Route::post('/pages/update/{id}',[MenusController::class,'pagesUpdate'])->name('pagesUpdate');
    Route::get('/pages/delete/{id}',[MenusController::class,'pagesDelete'])->name('pagesDelete');
    //Page Management End

    // profile
    Route::get('/media/delete/{id}/{type}/{use}', [UserProfileController::class, 'deleteMedia'])->name('deleteMedia');
    Route::get('profile/edit', [UserProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('profile/update', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile/password/update', [UserProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});