<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    protected $table = 'theme_settings';

    protected $guarded = ['id'];

    public function news()
    {
        return $this->belongsTo(News::class, 'src_id');
    }

    public function homeDataIds(){
        return $this->hasMany(ThemeSetting::class,'parent_id');
    }
}
