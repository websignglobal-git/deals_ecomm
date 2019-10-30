<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;
use DB;
class viewproductController extends Controller
{
     public function view_product(Request $request){

     	$url_id=$request->route('id');
     	$datas = DB::table('home_products')->where('home_product_id', $url_id)->get();
     	$imgs = json_decode($datas[0]->home_product_images, true);
   		return view('buyers/view-product', compact('datas','imgs' ));
   }
}

