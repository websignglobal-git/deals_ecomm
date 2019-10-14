<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewproductController extends Controller
{
     public function view_product(){
     	
   		return view('buyers/view-product');
   }
}
