<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;
use DB;

class cartController extends Controller
{
   public function view_cart(){
     	
   		return view('buyers/view-cart');
   }
   public function cart_products(Request $request){
   	$cart_prod_id = json_decode($request->input('ad_cart_id'), true);
     	$datas = home_products::wherein('home_product_id', $cart_prod_id)->get();
   	return response()->json($datas);
   }
}
