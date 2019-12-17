<?php

namespace App\Http\Controllers\security;
session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\models\users;
use App\models\user_details;

class registerController extends Controller
{
   public function buyerDetailRegister(Request $req){
		$req->validate([
		'user_name' => 'required',
		'user_phone' => 'required',
		'user_email'=>'required',
		'user_password'=>'required'
		]);

		$data=$req->all();
		$pwd=$data['user_password'];
		$password=password_hash($pwd , PASSWORD_DEFAULT);
		$data['user_password'] = $password;
		$getNum = users::where('user_phone', $data['user_phone'])->get();
		if(count($getNum) > 0){
			return Response('number exits');
		}else{
			$qry=users::create($data);
			$_SESSION["user_id"]=$qry->id;
			return Response('success'); 
		}
   }

   public function registerAddress(Request $req){

   		$qry= new user_details;
    	$data=$req->all();
    	$qry->fill($data)->save();

    	return response("success");
   }

    public function register(){
      	return view('buyers/register');
   }
}
