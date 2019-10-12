<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
   public function checkout(){
     	
   		return view('buyers/checkout');
   }
}
