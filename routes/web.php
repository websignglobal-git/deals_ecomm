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

Route::view('/reg','buyers\register');
