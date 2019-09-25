<?php

Route::middleware('auth')->group(function () {
 //auth routes should be written here

});

//non auth routes goes here

Route::get('/', function () {
    return view('welcome');
});
