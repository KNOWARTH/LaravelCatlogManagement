<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\product;
 
 
class ProductController extends Controller
{
    public function AddProduct()
    {
    	//echo "hiiii...";
    	return view('Admin.Product.AddProduct');
    }

    public function insertProduct(Request $request)
    {
    	//echo "inserted...";	
    	
    	$addresult=$request->all();
    	unset($addresult['_token']);
    	//product::insert

    		DB::table('product')->insert($addresult);
    	//return view('Admin.Product.AddProduct');
    }
}
