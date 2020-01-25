<?php

namespace App\Http\Controllers\security;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\security;
use Hash;
use DB;
use App\models\users;
use App\models\user_cart;
class loginController extends Controller
{
    public function buyerLogin(Request $req)
    {
		session_start();

		$data=$req->all();
		$pid = $data['prodct_id'];
		$json = json_decode($pid);
		$getUser = DB::table('users')->where('user_phone', $data['num'])->get(['user_id', 'user_password', 'user_name']);
		if (count($getUser) > 0) {
			$val = Hash::check($data['pass'], $getUser[0]->user_password);
		
			if (count($getUser) > 0 && $val == 1) {
				$_SESSION["user_id"]=$getUser[0]->user_id;
				$_SESSION["user_name"]=$getUser[0]->user_name;
				 $user_id = $_SESSION["user_id"];
				$cartCount = DB::table('users')->join('user_cart', 'user_cart.user_idk', '=', 'users.user_id')->where('users.user_id', $user_id)->select('product_idk')->get();

			      for ($i = 0; $i < count($json); $i++) {

			      	$qry = user_cart::insert(['user_idk'=>$user_id,'product_idk'=>$json[$i]]);
					}

				return Response()->json(['status'=>"success",'cartCount'=>$cartCount]);
			}  else {
				return Response()->json('error');
			}
		} else {
			return Response()->json('error');
		}
    }

    public function login(){
      return view('buyers/login');
   }
}