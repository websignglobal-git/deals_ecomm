<?php

session_start();
namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user_details as userdetail;
use DB;

class userdetailsController extends Controller
{
    public function addaddress(Request $req)
    {
        $id = $_SESSION["user_id"];
        $adrsData = $req->all();
        $qry = userdetail::where('user_idk', $id)->update([
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
        $id = $_SESSION["user_id"];
        $req = DB::table('users')->where('user_id', $id)->get();
        return Response()->json($req);
    }

    public function getuseraddress()
    {
        $id = $_SESSION["user_id"];
        $req = userdetail::where('user_idk', $id)->get();
        return Response()->json($req);
    }
}
