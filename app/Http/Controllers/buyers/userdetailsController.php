<?php

namespace App\Http\Controllers\buyers;
session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user_details as userdetail;
use DB;

class userdetailsController extends Controller
{
    public function addaddress(Request $req)
    {
        $adrsData = $req->all();
        $qry = userdetail::insert([
            'user_addressline1' =>$adrsData['addressline1'],
            'user_addressline2' =>$adrsData['addressline2'],
            'user_city' =>$adrsData['city'],
            'user_state' =>$adrsData['state'],
            'user_country' =>$adrsData['country'],
            'user_pincode' =>$adrsData['pincode'],
            ]);
        if($qry==true){
            $res="success";
        }else{
            $res="error";
        }
        return Response($res);
    }

    public function getuserdetails()
    {
        $req = DB::table('users')->where('user_id', $_SESSION["user_id"])->get();
        return Response()->json($req);
    }

    public function getuseraddress()
    {
        $req = userdetail::where('user_idk', $_SESSION["user_id"])->get();
        return Response()->json($req);
    }
}
