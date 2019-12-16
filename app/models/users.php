<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class users extends Model

{
	const CREATED_AT = 'user_created_ts';
	const UPDATED_AT = 'user_updated_ts';
    protected $table = 'users';
    protected $fillable=[
    	'user_name','user_email','user_phone','user_password'

    ];
}
