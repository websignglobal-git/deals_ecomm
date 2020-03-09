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
            $prodData = DB::table('user_cart')->join('home_products', 'home_products.home_product_id', '=', 'user_cart.product_idk')->where('user_cart.user_idk', $user_id)->where('user_cart.delete','!=','1')->where('user_cart.save_later','!=','1')->get();
             $saveproduct = DB::table('user_cart')->LeftJoin('home_products', 'home_products.home_product_id', '=', 'user_cart.product_idk')->where('user_cart.user_idk', $user_id)->where('user_cart.delete','!=','1')->where('user_cart.save_later','!=','0')->get();
         }
   
            return view('buyers/view-cart',compact('prodData','saveproduct'));
       }
       else{
         return view('buyers/view-cart');
       }
         
         
   	
   }

   public function cart_products(Request $request){
   	  $cart_prod_id = json_decode($request->input('ad_cart_id'), true);
     	$datas = home_products::wherein('home_product_id', $cart_prod_id)->get();
    // SELECT MAX(salary) FROM employees WHERE salary NOT IN ( SELECT Max(salary) FROM employees);
    // $datas = DB::table('home_products')->select(max('home_product_id'))->whereNotIn('home_product_id')->select(max('home_product_id'))->get();

    // $datas = DB::table('home_products')->select(DB::raw('MAX(home_product_id) as home_product_id'))->get();

   	return response()->json($datas);
   }

   public function remove_product(Request $request){
      if(isset($_SESSION["user_id"])){
         $user_id = $_SESSION["user_id"];
         $product_idk = json_decode($request->input('product_idk'), true);
         $dltproduct = user_cart::where('user_idk', $user_id)->where('product_idk', $product_idk )->update(['delete' => 1]);
      }
      return response()->json($dltproduct);
   }

   public function save_later(Request $request){
      if(isset($_SESSION["user_id"])){
         $user_id = $_SESSION["user_id"];
         $product_idk = json_decode($request->input('product_idk'), true);
         $savelaterproduct = user_cart::where('user_idk', $user_id)->where('product_idk', $product_idk )->update(['save_later' => 1]);
         
      }
      return response()->json($savelaterproduct);
   }

   public function move_to_cart(Request $request){
      if(isset($_SESSION["user_id"])){
         $user_id = $_SESSION["user_id"];
         $product_idk = json_decode($request->input('product_idk'), true);
         $movetocart = user_cart::where('user_idk', $user_id)->where('product_idk', $product_idk )->update(['save_later' => 0]);
         
      }
      return response()->json($movetocart);
   }

   public function addtocart(Request $req){
       if(isset($_SESSION["user_id"])){
            $user_id = $_SESSION["user_id"];
            $data = $req->all();
            $user_cart = new user_cart;
            $user_cart->user_idk =$user_id;
            $user_cart->fill($data)->save();
         }
      return response()->json('inserted');
   }
}
