<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_products;
use DB;


class homeProductController extends Controller
{
    //

	public function findHomeProduct(){

		$qry=DB::table('home_products')->get();

		return Response()->json($qry);
	}



}
