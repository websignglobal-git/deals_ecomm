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
        $a = $data['file1'];
        $b = $data['file2'];
        $c = $data['file3'];
        $d = $data['file4'];
        $e = $data['file5'];
        $f = json_decode($data['data']);
        $arr = array();

        for($i=1; $i<count($data); $i++){
            if (count($data)-1 == 5) {
                if ($req->hasFile('file'.$i)) {
                    $name = $_FILES['file'.$i]['name'];
                    $nameonly = explode(".",$name);
                    $extension=strchr($name,".");
                    $dir = "images/productimg/";
                    if($extension==".jpg" || $extension==".png" || $extension==".jpeg") {
                        $file_name = $nameonly['0']."-".date("Y-m-d")."-".date("H:i:s")."-".rand();
                        $file = $dir.$file_name.basename($nameonly['0'].".".$nameonly['1']);
                        move_uploaded_file($name, $file);
                        array_push($arr, $dir.$file_name.".".$nameonly['1']);
                    }
                    $res = "error";
                }
            } else {
                $res = "error";
            }
        }
        
        if (count($arr) != 5) {
            $res = "error";
        } else {
            $qry = homeproduct::insert([
                'home_product_name'=>$f->Product_Name,
                'home_product_amount'=>json_encode($f->Product_Price),
                'home_product_images'=>json_encode($arr),
                'home_product_gst'=>json_encode($f->Product_Gst),
                'home_product_specification'=>json_encode($f->Product_Specification_List),
                'home_product_manufacturer'=>$f->Product_Manufacturer,
                'home_product_description'=>json_encode($f->Product_Description),
                'home_products_highlights'=>json_encode($f->Product_HighLight_List),
                'home_product_category'=>json_encode($f->Product_Category),
                'home_product_available_stock'=>$f->Product_Quantity,
                'home_product_payment_method'=>json_encode($f->Product_Payment_Method)
            ]);
            if($qry==true){
                $res="success";
            }else{
                $res="error";
            }
        }
        return Response($res);
    }

    public function approved(Request $req)
    {
        $data = $req->all();
        $qry = homeproduct::where('home_product_id', $data['id'])->update(['home_product_approval_status' =>$data['val']]);
        if($qry==true){
            // notify()->success('The product has been Approved.');
            $res="success";
        }else{
            $res="error";
        }
        return Response($res);
    }

    public function notapproved(request $req)
    {
        $data = $req->all();
        $qry = homeproduct::where('home_product_id', $data['id'])->update(['home_product_approval_status' =>$data['val']]);
        if($qry==true){
            // notify()->success('The product has not been approved');
            $res="success";
        }else{
            $res="error";
        }
        return Response($res);
    }

    public function dealoftheday(Request $req)
    {
        $data = $req->all();
        $qry = homeproduct::where('home_product_id', $data['id'])->update(['home_product_deal_of_the_day' =>$data['val']]);
        if($qry==true){
            // notify()->success('Product has been added to Deal of the Day List');
            $res="success";
        }else{
            $res="error";
        }
        return Response($res);
    }

    public function notdealoftheday(request $req)
    {
        $data = $req->all();
        $qry = homeproduct::where('home_product_id', $data['id'])->update(['home_product_deal_of_the_day' =>$data['val']]);
        if($qry==true){
            // notify()->success('Product has been removed from deal of the day List');
            $res="success";
        }else{
            $res="error";
        }
        return Response($res);
    }

    public function deleteproduct(request $req) {
        $data = $req->all();
        $qry = homeproduct::where('home_product_id', $data['id'])->delete();
        if ($qry==true) {
            $res="success";
        } else{
            $res="error";
        }
        return Response($res);
    }

}
