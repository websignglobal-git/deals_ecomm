<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class home_products extends Model
{
	const CREATED_AT = 'attribute_created_ts';
	const UPDATED_AT = 'attribute_updated_ts';
    protected $fillable = [
        'home_product_id',
    	'user_idk',
    	'user_role_idk',
    	'price_range_idk',
    	'template_config_idk',
    	'home_product_name',
    	'home_product_slug',
    	'home_product_amount',
    	'home_product_gst',
    	'home_product_keywords',
    	'home_product_images',
    	'home_product_specification',
    	'home_product_description',
    	'home_product_attributes',
    	'home_products_highlights',
    	'home_product_category',
    	'home_product_number',
    	'home_product_available_stock',
    	'home_product_payment_method',
    	'home_product_approval_status',
    	'home_product_deal_of_the_day'
    ];
}
