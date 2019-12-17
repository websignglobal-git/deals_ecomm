<?php

namespace App\Http\Controllers\security;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\security;
use Hash;
use DB;
use App\models\users;
class loginController extends Controller
{
    public function buyerLogin(Request $req)
    {
		session_start();

    	// $req->validate([
		//   'name' => ['alpha_dash'],
		//   'phone' => ['required','numeric'],
		//   'email'=> ['required','email'],
		//   'password'=> ['required']
		// ]);
      	// $data = $req->all();

		// if(isset($data['email']) && isset($data['password'])){
		// 	$qry = users::where ('user_email',$data['email'])->where ('user_password',$data['email']);
		// 	if($qry == true){
		// 		$res = 'success';
		// 	}
		// 	else{
		// 		$res = "error";
		// 	}
		// }else{
		// 	$qry = users::where ('user_phone',$data['phone'])->where ('user_password',$data['password']);
		// 	if($qry == true){
		// 		$res = 'success';
		// 	}
		// 	else{
		// 		$res = "error";
		// 	}
		// }
		// return response($res);

		$data=$req->all();
		$getUser = DB::table('users')->where('user_phone', $data['num'])->get(['user_id', 'user_password']);
		if (count($getUser) > 0) {
			$val = Hash::check($data['pass'], $getUser[0]->user_password);
		
			if (count($getUser) > 0 && $val == 1) {
				$_SESSION["user_id"]=$getUser[0]->user_id;
				return Response()->json('success');
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