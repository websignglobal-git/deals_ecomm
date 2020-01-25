<?php

namespace App\Http\Controllers\buyers;
session_start();
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;
use App\models\user_cart;
use DB;

class cartController extends Controller
{
   public function view_cart(){
      if(isset($_SESSION["user_id"])){
          $user_id = $_SESSION["user_id"];
           $usr_id = DB::table('users')->where('user_id', $user_id)->first();
           if($usr_id !== null and $user_id == $usr_id->user_id) {
            $prodData = DB::table('user_cart')->join('home_products', 'home_products.home_product_id', '=', 'user_cart.product_idk')->where('user_cart.user_idk', $user_id)->get();
         }
            return view('buyers/view-cart',compact('prodData'));
       }
       else{
         return view('buyers/view-cart');
       }
         
         
   	
   }

   public function cart_products(Request $request){
   	$cart_prod_id = json_decode($request->input('ad_cart_id'), true);
     	$datas = home_products::wherein('home_product_id', $cart_prod_id)->get();
   	return response()->json($datas);
   }

   public function remove_product(Request $request){
      $user_id = $_SESSION["user_id"];
      $product_idk = json_decode($request->input('product_idk'), true);
      // $data = DB::table('user_cart')->where('user_idk', '=',  $user_id and 'home_product_id', '=', $product_idk)->softDeletes();
      // $datas = user_cart::wherein('home_product_id', $product_idk)->softDeletes();
      return response()->json($cart_prod_id);
   }

   public function addtocart(Request $req){
      $user_id = $_SESSION["user_id"];
      $data = $req->all();
      $user_cart = new user_cart;
      $user_cart->user_idk =$user_id;
      $user_cart->fill($data)->save();
      return response()->json('inserted');
   }
}
