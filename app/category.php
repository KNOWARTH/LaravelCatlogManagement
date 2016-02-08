<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable = [
        'c_name', 'c_image', 'c_desc','c_is_parent','c_parent',
    ];
}
