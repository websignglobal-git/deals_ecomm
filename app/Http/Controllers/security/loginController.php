<?php

namespace App\Http\Controllers\security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\security;

use DB;
use App\models\users;
class loginController extends Controller
{
    public function buyerLogin(Request $req)
    {
    	$req->validate([
		  'name' => ['alpha_dash'],
		  'phone' => ['required','numeric'],
		  'email'=> ['required','email'],
		  'password'=> ['required']
		]);
      $data = $req->all();

      if(isset($data['email']) && isset($data['password'])){
      	$qry = users::where ('user_email',$data['email'])->where ('user_password',$data['email']);
      	if($qry == true){
      		$res = 'success';
      	}
      	else{
      		$res = "error";
      	}
      }else{
      	$qry = users::where ('user_phone',$data['phone'])->where ('user_password',$data['password']);
      	if($qry == true){
      		$res = 'success';
      	}
      	else{
      		$res = "error";
      	}
      }
	  return response($res);
    }

    public function login(){
      return view('buyers/login');
   }
}