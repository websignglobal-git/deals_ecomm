<?php

Route::middleware('auth')->group(function () {
 //auth routes should be written here

});


//non auth routes goes here

Route::get('/', 'home\homeTemplateController@homeFetchData');


Route::post('/login','security\loginController@login');

//security route
Route::post('/buyer-register', 'security\registerController@buyerDetailRegister');
Route::post('/buyer-login', 'security\loginController@buyerLogin');
Route::get('/register', 'security\registerController@register');
Route::get('/login', 'security\loginController@login');
Route::post('/register-address', 'security\registerController@registerAddress');
Route::post('/make-payment', 'payment\paymentController@makePayment');
Route::post('/send-mail', 'common_services\emailController@send');
Route::post('/file-upload', 'common_services\fileUploadController@fileUpload');
Route::post('/find-home-product', 'buyers\findHomeProduct@findHomeProduct');

Route::get('/admin', 'admin\adminController@admin');	
Route::get('/view-product', 'buyers\viewproductController@view_product');	
Route::get('/list-all-category', 'buyers\listallcategoryController@list_all_category');	
Route::get('/view-cart', 'buyers\cartController@view_cart');	
Route::get('/checkout', 'buyers\checkoutController@checkout');	
Route::get('/email-verification','buyers\checkoutController@email_verification');
Route::get('/checkout-address','buyers\checkoutController@checkout_address');

Route::get('/payment', 'payment\paymentController@paymentPage');
Route::get('/payment-methode', 'payment\paymentController@paymentmethode');
Route::get('/order-summary', 'payment\paymentController@order_summary');
Route::get('/online-order-summary', 'payment\paymentController@online_order_summary');
Route::get('/order-successful', 'payment\paymentController@order_successful');
Route::get('/mail-home', 'common_services\emailController@mailDetail');

