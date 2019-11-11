<?php

namespace App\Http\Controllers\common_services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    public function fileUpload(Request $req){
    	if ($req->hasFile('file')) {
                $dir = "assets/images/";
                $ext=$_FILES["file"]["name"];
                $extension=strchr($ext,".");
                $res="error";
                if($extension==".jpeg" || $extension==".jpg" ||$extension==".png"){
                    $file = $dir .basename($_FILES["file"]["name"]);
                    move_uploaded_file($_FILES["file"]["tmp_name"], $file);
                    $res=$file;
            	}
        	return response($res);
        }   
    }
}
