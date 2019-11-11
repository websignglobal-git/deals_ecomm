<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class attribute_list extends Model
{
	protected $table = 'attribute_list';
    const CREATED_AT = 'attribute_created_ts';
	const UPDATED_AT = 'attribute_updated_ts';
    protected $fillable=['attribute_id','attribute_name','attribute_parent_id','attribute_code','attribute_created_by','attribute_updated_by'];
}
