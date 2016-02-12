<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	protected $fillable=[
							'p_name','p_image','p_desc','p_price','p_category_id'

		];
    //
}
