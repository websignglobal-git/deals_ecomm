<?php

Route::middleware('auth')->group(function () {
 //auth routes should be written here

});


//non auth routes goes here

Route::get('/', 'home\homeTemplateController@homeFetchData');
//security route
Route::post('/buyer-register', 'security\registerController@buyerDetailRegister');
Route::post('/buyer-login', 'security\loginController@buyerLogin');
Route::get('/register', 'security\registerController@register');
Route::get('/login', 'security\loginController@login');
Route::post('/register-address', 'security\registerController@registerAddress');
Route::post('/make-payment', 'payment\paymentController@makePayment');
Route::post('/send-mail', 'common_services\emailController@send');
Route::post('/file-upload', 'common_services\fileUploadController@fileUpload');
Route::post('/cart-products', 'buyers\cartController@cart_products');
// Route::get('/', 'buyers\homeProductController@findHomeProduct');

Route::get('/view-product/{id}', 'buyers\viewproductController@view_product');

Route::get('/list-all-category', 'buyers\listallcategoryController@list_all_category');
Route::get('/view-cart', 'buyers\cartController@view_cart');
Route::get('/checkout', 'buyers\checkoutController@checkout');
Route::get('/email-verification','buyers\checkoutController@email_verification');
Route::get('/checkout-address','buyers\checkoutController@checkout_address');
Route::get('/contact','home\homeTemplateController@contactpage');
Route::get('/about','home\homeTemplateController@aboutpage');
Route::get('/career','home\homeTemplateController@careerpage');
Route::get('/category','home\homeTemplateController@categorypage');
Route::get('/cart-empty','home\homeTemplateController@cart_empty');

Route::get('/payment', 'payment\paymentController@paymentPage');
Route::get('/payment-methode', 'payment\paymentController@paymentmethode');
Route::get('/order-summary', 'payment\paymentController@order_summary');
Route::get('/online-order-summary', 'payment\paymentController@online_order_summary');
Route::get('/order-successful', 'payment\paymentController@order_successful');
Route::get('/mail-home', 'common_services\emailController@mailDetail');

Route::get('/admin', 'admin\adminController@admin');
Route::get('/admin/product', 'admin\productController@product');
Route::post('admin/get_product_data', 'admin\productController@getproductdata');
Route::post('admin/approved', 'admin\productController@approved');
Route::post('admin/not_approved', 'admin\productController@notapproved');
Route::post('admin/dealoftheday', 'admin\productController@dealoftheday');
Route::post('admin/not_dealoftheday', 'admin\productController@notdealoftheday');
Route::post('admin/get_initial_category', 'admin\productController@getinititalcategories');
Route::post('admin/attribute_list', 'admin\attributelistController@attributelist');
Route::post('admin/specs_list', 'admin\attributelistController@specslist');
Route::post('admin/add_products', 'admin\productController@addproducts');
Route::post('admin/edit_products', 'admin\productController@editproducts');
Route::post('admin/delete_product', 'admin\productController@deleteproduct');

Route::post('buyers/add_address', 'buyers\userdetailsController@addaddress');
Route::post('buyers/get_payment_method', 'admin\productController@getpaymentmthd');
Route::post('buyers/get_user_details', 'buyers\userdetailsController@getuserdetails');
Route::post('buyers/get_user_address', 'buyers\userdetailsController@getuseraddress');
Route::post('buyers/get_product_details', 'admin\productController@getproductdetails');

Route::post('logout', 'security\logoutController@logout');
Route::post('view-product/add-to-cart', 'buyers\cartController@addtocart');
