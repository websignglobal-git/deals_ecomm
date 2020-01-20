<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;
use DB;

class homeTemplateController extends Controller
{
   // public function topBanner(tempArr){
   		
   // }
   public function homeFetchData(){
 		$categories = array('Top Picks for you', 'Electronics', 'Bags', 'Books', 'Appliances'); //categories array
   		$allCatData = array();
   		for($i = 0; $i<count($categories); $i++){
   			if($categories[$i] == 'Top Picks for you'){
   				$getCat= DB::table('home_products')->where('home_product_deal_of_the_day', 1)->get(); // top picks
   				 array_push($allCatData, $getCat);
   			}else{
	   			$getCat = DB::table('home_products')->where('home_product_category', 'like', '%' .$categories[$i]. '%')->get();
	   			 array_push($allCatData, $getCat);
   			}
   		}
		return view('buyers/home', compact( 'allCatData', 'categories'));
   }

   public function contactpage(){

      return view('buyers/contact');
   } 
   public function aboutpage(){

      return view('buyers/about');
   }
    public function careerpage(){

      return view('buyers/career');
   }
    public function categorypage(){

      return view('buyers/category');
   }
}
