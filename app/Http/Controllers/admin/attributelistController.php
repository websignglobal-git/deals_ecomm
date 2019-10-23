<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\attribute_list;

class attributelistController extends Controller
{
    public function attributelist() 
    {
        $attlst = attribute_list::get();
        return response()->json($attlst);
    }
}
