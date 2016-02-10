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
    public function AddProduct(Request $request)
    {

    	//echo "hiiii...";
         $result = DB::table('category')->get();
        $option = ($request['c_is_parent'] == "on") ? 1 : 0;
        print_r($option);
            $arrayName = array();
            foreach ($result as $kk) {
            //   $kk->$arrayName[] = array(c_id,
            // print_r($option);
            // $kk->c_name,
                $pp = $kk->c_is_parent;


                if($pp == $option)
                {
                
                }
                else
                {
                    $arrayName[] = array(
                        'c_id' => $kk->c_id,
                        'c_name' => $kk->c_name,
                     );
                }
              
             }
    	return view('Admin.Product.AddProduct')->with('results',$arrayName);;
    }
    /*public function DispCategory(Request $request)
    {
        //echo "mm";
        $result = DB::table('category')->get();
        $option = ($request['c_is_parent'] == "on") ? 1 : 0;
        print_r($option);
            $arrayName = array();
            foreach ($result as $kk) {
            //   $kk->$arrayName[] = array(c_id,
            // print_r($option);
            // $kk->c_name,
                $pp = $kk->c_is_parent;


                if($pp == $option)
                {
                
                }
                else
                {
                    $arrayName[] = array(
                        'c_id' => $kk->c_id,
                        'c_name' => $kk->c_name,
                     );
                }
              
             }
             
        return view('Admin.Category.AddCategory')->with('results',$arrayName);
    }

*/
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
