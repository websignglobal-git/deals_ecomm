<?php

namespace App\Http\Controllers\byers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewproductController extends Controller
{
     public function view_product(){
     	
   		return view('buyers/view-product');
   }
}
