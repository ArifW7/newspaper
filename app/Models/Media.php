<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = [
        'src_id',
        'src_type',
        'use_Of_file',
        'file_name',
        'alt_text',
        'caption',
        'file_url',
        'file_size',
        'file_type',
        'addedby_id',
    ];
}
