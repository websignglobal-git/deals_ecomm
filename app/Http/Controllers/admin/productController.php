<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\productCategory as category;
use App\models\home_products as homeproduct;

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

    public function getproductdata()
    {
        $data = homeproduct::get();
        return response()->json($data);
    }

    public function addproducts(Request $req)
    {
        $data = $req->all();
        $qry=homeproduct::insert([
            'home_product_name'=>$data['Product_Name'],
            'home_product_amount'=>json_encode($data['Product_Price']),
            'home_product_specification'=>json_encode($data['Product_Specification_List']),
            'home_product_description'=>json_encode($data['Product_Description']),
            'home_products_highlights'=>json_encode($data['Product_HighLight_List']),
            'home_product_category'=>json_encode($data['Product_Category']),
            'home_product_available_stock'=>$data['Product_Quantity'],
            'home_product_payment_method'=>json_encode($data['Product_Payment_Method'])
        ]);
        if($qry==true){
            $res="success";
        }else{
            $res="error";
        }
    return Response($res);
    }
}
