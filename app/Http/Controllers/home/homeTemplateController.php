<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;


class homeTemplateController extends Controller
{
   // public function topBanner(tempArr){
   		
   // }
   public function homeFetchData(){
 
   		$data=home_products::get();
		return view('buyers/home', compact('data'));
   }
}
