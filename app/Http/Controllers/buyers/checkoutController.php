<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
   public function checkout(){
     	
   		return view('buyers/checkout');
   } 
   public function email_verification(){
     	
   		return view('buyers/email-verification');
   }
   public function checkout_address(){
     	
   		return view('buyers/checkout-address');
   }
}
