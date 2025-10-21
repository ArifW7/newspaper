<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function postDatas(){
        return $this->hasMany(News::class,'src_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function themeSettings()
    {
        return $this->hasMany(ThemeSetting::class, 'src_id');
    }

}
