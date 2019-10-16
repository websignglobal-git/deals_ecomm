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
Route::post('/make-payment', 'payment\paymentController@makePayment');
Route::post('/send-mail', 'common_services\emailController@send');
Route::post('/file-upload', 'common_services\fileUploadController@fileUpload');
// Route::get('/', 'buyers\homeProductController@findHomeProduct');

Route::get('/admin', 'admin\adminController@admin');	
Route::get('/view-product', 'buyers\viewproductController@view_product');	
Route::get('/list-all-category', 'buyers\listallcategoryController@list_all_category');	
Route::get('/view-cart', 'buyers\cartController@view_cart');	
Route::get('/checkout', 'buyers\checkoutController@checkout');	

Route::get('/payment', 'payment\paymentController@paymentPage');
Route::get('/mail-home', 'common_services\emailController@mailDetail');
Route::view('/reg','buyers\register');

