<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listallcategoryController extends Controller
{
     public function list_all_category(){
     	
   		return view('buyers/list-all-category');
   }
}
