<?php

namespace App\Http\Controllers\security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\models\users;
use App\models\user_details;
class registerController extends Controller
{
   public function register(Request $req){

   	$req->validate([
    'name' => 'required',
    'phone' => 'required',
    'email'=>'required',
    'password'=>'required'
	]);

   	$data=$req->all();
   	$pwd=$data['password'];
   	$password=password_hash($pwd , PASSWORD_DEFAULT);
   	$qry=users::insert(["user_name"=>$data['name'],'user_email'=>$data['email'],'user_phone'=>$data['phone'],'user_password'=>$password]);
	   	if($qry==true){
	   		$res="Success";
	   	}else{
	   		$res="Error";
	   	}
   	return Response($res);
   }

   public function registerAddress(Request $req){

   		$qry= new user_details;
    	$data=$req->all();
    	$qry->fill($data)->save();
   	// $data=$req->all();

    	return response("success");
   }
}
