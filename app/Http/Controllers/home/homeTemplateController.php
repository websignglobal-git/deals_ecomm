<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeTemplateController extends Controller
{
   // public function topBanner(tempArr){
   		
   // }
   public function homeFetchData(){
 //   	mysql_query("START TRANSACTION");

	// $a1 = mysql_query("INSERT INTO rarara (l_id) VALUES('1')");
	// $a2 = mysql_query("INSERT INTO rarara (l_id) VALUES('2')");

	// if ($a1 and $a2) {
	//     mysql_query("COMMIT");
	// } else {        
	//     mysql_query("ROLLBACK");
	// }
   		return view('buyers/home');
   }
}
