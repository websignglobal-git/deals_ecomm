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
    public function paymentmethode(){
        return view("payment/payment-methode");
    }
    public function order_summary(){
        return view("payment/order-summary");
    }
    public function order_successful(){
        return view("payment/order-successful");
    }
    public function online_order_summary(){
        return view("payment/online-order-summary");
    }
}
