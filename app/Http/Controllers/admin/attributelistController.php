<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\attribute_list;
use DB;

class attributelistController extends Controller
{
    public function attributelist(Request $req) 
    {
        $attData = $req->input('attribute_parent_id');
        $AttrData = attribute_list::get();
        $outputData = array();
	    for($i = 0; $i<count($AttrData); $i++)
	    {
	       	$splitParentId = explode(',', $AttrData[$i]->attribute_parent_id);
	       	if(in_array($attData, $splitParentId))
	       	{
	       		array_push($outputData, $AttrData[$i]);
	       	}
	    }
    	return response()->json($outputData);
	}
	
    public function specslist() 
    {
        $AttrData = attribute_list::get();
    	return response($AttrData);
    }
}
