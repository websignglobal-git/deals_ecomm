<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\productCategory as category;

class productController extends Controller
{
    public function product()
    {
        return view('admin/products/products');
    }

    public function getinititalcategories() 
    {
        $cat = category::get();
        return response()->json($cat);
    }

}
