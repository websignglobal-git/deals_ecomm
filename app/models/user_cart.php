<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user_cart extends Model
{
	protected $table = 'user_cart';
	const CREATED_AT = 'user_cart_created_ts';
	const UPDATED_AT = 'user_cart_updated_ts';
    protected $fillable = ['user_cart_id','user_idk','product_idk','user_cart_created_by','	user_cart_updated_by','	user_cart_created_ts','user_cart_updated_ts'];
}
