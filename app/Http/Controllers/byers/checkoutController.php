<?php

namespace App\Http\Controllers\byers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
   public function checkout(){
     	
   		return view('buyers/checkout');
   } 
   public function register(){
     	
   		return view('buyers/register');
   }
}
