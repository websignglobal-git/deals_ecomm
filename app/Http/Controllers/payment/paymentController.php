<?php

namespace App\Http\Controllers\payment;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user_payments;

class paymentController extends Controller
{
    public function makePayment(Request $req){
    	$razorpay_id=$_POST['razorpay_payment_id'];
    	if(isset($razorpay_id)){
    		$qry=DB::table('user_payments')->insert(["payment_rof_id"=>$razorpay_id,"payment_status_idk"=>1]);
    		return Response("success");
    	}else{
    		return Response("fail");
    	}
    }

    public function paymentPage(Request $req){
    	return view("payment/payment");
    }
}
