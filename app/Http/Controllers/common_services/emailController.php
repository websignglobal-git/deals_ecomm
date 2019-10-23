<?php

namespace App\Http\Controllers\common_services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\sendMail;
use Mail;

class emailController extends Controller
{
    public function mailDetail(){
    	return view('common/mailHome');
    }

    public function send(Request $req){
    	$this->validate($req,[
    		"email" =>"required",
    		"subject" =>"required",
    		"message" =>"required",
    	]);
    	$subject=$req->subject;
    	$email=$req->email;
    	$message=$req->message;

    	Mail::to($email)->send(new sendMail($subject, $message));

    	return "success";
    }
}
