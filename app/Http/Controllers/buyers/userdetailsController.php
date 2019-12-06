<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user_details as userdetail;
use DB;

class userdetailsController extends Controller
{
    public function addaddress(Request $req)
    {
        $adrsData = $req->all();
        $qry = userdetail::where('user_idk', 1)->update([
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
}
