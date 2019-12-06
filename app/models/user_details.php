<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user_details extends Model
{
    protected $table = 'user_details';
    const CREATED_AT = 'user_details_created_ts';
	const UPDATED_AT = 'user_details_updated_ts';
	//protected $fillable =
    protected $fillable=['user_idk','user_addressline1','user_addressline2','user_city','user_state','user_country','user_pincode'];
}
