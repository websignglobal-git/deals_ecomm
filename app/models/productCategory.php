<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class productCategory extends Model
{
    const CREATED_AT = 'product_cat_created_ts';
	const UPDATED_AT = 'product_cat_updated_ts';
	//protected $fillable =
    protected $fillable=['product_cat_parent_id','product_cat_name','product_cat_slug','product_cat_created_by','product_cat_updated_by'];
}
