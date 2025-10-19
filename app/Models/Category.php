<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];

    public function parentCategory(){
        return $this->belongsTo(Category::class,'parent_id','id');
    }
}
