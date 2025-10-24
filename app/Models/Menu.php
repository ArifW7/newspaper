<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Menu extends Model
{
    protected $table = 'menus';

    protected $guarded = ['id'];

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'parent_id')
            ->where('status', '<>', 'temp')
            ->orderBy('view', 'asc');
    }
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id')
            ->where('status', '<>', 'temp');
    }
    
    public function categoryLink(){
       return $this->belongsTo(Category::class,'src_id')->where('status','<>','temp');
    }

    public function pagelink(){
       return $this->belongsTo(Post::class,'src_id')->where('type',0)->where('status','<>','temp');
    }

    public function menuLink()
    {
        // menu_type == 0 = Custom Link
        // menu_type == 1 = Page Link
        // menu_type == 2 category link
        
        
        if($this->menu_type==1){
            if($this->pagelink){
                return '/page/'.$this->pagelink->slug;
            }else{
                return '/page/'.$this->pagelink->name??'No-Menu';
            }
        }elseif($this->menu_type==2){
            if($this->categoryLink){
                return '/category/'.$this->categoryLink->slug;
            }else{
                return '/category/'.$this->categoryLink->name??'No-Menu';
            }
        }else {
            return $this->slug ? url($this->slug) : $this->name;
        }
    }

    public function menuName(){
        
        if($this->menu_type==1){
            if($this->pagelink){
                return $this->pagelink->name;
            }

        }elseif($this->menu_type==2){
            if($this->categoryLink){
                return $this->categoryLink->name;
            }
        }else{
            return $this->name;
        }
    }

    public function menuImage()
    {
        return $this->image ? asset($this->image) : null;
    }
    public function menuIcon()
    {
        if (!$this->icon) {
            return '';
        }
        if (preg_match('/^(fa[srb]?\s)?fa-/', $this->icon)) {
            return '<i class="' . e($this->icon) . '"></i>';
        }
    
        if (File::exists(public_path($this->icon))) {
            return '<img src="' . asset($this->icon) . '" alt="' . e($this->name) . '" style="height:16px;">';
        }
        return e($this->icon);
    }
    
    public function menuItems()
    {
        return $this->hasMany(Menu::class, 'parent_id')
            ->where('status', '<>', 'temp')
            ->orderBy('view', 'asc');
    }

}
