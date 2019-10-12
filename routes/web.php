<?php

Route::middleware('auth')->group(function () {
 //auth routes should be written here

});


//non auth routes goes here

Route::get('/', 'home\homeTemplateController@homeFetchData');


Route::post('/login','security\loginController@login');

//security route
Route::post('/register', 'security\registerController@register');
Route::post('/register-address', 'security\registerController@registerAddress');

Route::get('/admin', 'admin\adminController@admin');	
Route::get('/view-product', 'byers\viewproductController@view_product');	
Route::get('/list-all-category', 'byers\listallcategoryController@list_all_category');	
Route::get('/view-cart', 'byers\cartController@view_cart');	
Route::get('/checkout', 'byers\checkoutController@checkout');	

Route::get('/register','byers\checkoutController@register');
