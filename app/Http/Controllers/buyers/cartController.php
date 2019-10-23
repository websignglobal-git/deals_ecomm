<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
   public function view_cart(){
     	
   		return view('buyers/view-cart');
   }
}
