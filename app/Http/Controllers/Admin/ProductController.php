<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\product;
 use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
 use Illuminate\Pagination\LengthAwarePaginator;
class ProductController extends Controller
{
    public function testing()
    {
        
        $hiddenvalue=Input::get('hiddenrop');
        $textboxvalue=Input::get('p_cat_pro');
         $textvaluearray=explode(",",$textboxvalue);
      
        $temparraay=explode(",",$hiddenvalue);
         
        $temp=DB::table('category')->get();
         
        foreach ($temp as $catval1) {
          $pp1 = $catval1->c_name;
       

          if($textvaluearray[0] == $pp1 or $textvaluearray[1] == $pp1)
          {
            $result1=$catval1->c_id;
            echo $result1;
          }
        }
     }
    public function AddProduct(Request $request)
    {

    	//echo "hiiii...";
         $result = DB::table('category')->get();
        $option = ($request['c_is_parent'] == "on") ? 1 : 0;
      //  print_r($option);
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
    	return view('Admin.Product.AddProduct')->with('results',$arrayName);
    }
    public function ajaxsubcat1()
    {
       $c_id = Input::get('c_id');

     //$c_id = DB::table('category')->get('c_id');
     //$cat_id = Input::get('cat_id');

       $subcategories = DB::table('category')->where('c_parent','=',$c_id)->lists('c_name','c_id');

       return Response::json($subcategories);
   }
     
    public function insertProduct(Request $request)
    {
    	//echo "inserted...";	
    	
    	$addresult=$request->all();
    	unset($addresult['_token']);
    	DB::table('product')->insert($addresult);
    	return $this->ShowProduct();
    }
    public function DeleteProduct()
    {

    }
    public function ShowProduct()
    { 
        $rows=DB::table('product')->Paginate(5);
       /* echo "<pre>";
        print_r($rows);
        exit();*/
        return view('Admin.Product.ShowProduct')->with('data',$rows);
    }
    /*public function EditProduct($p_id)
         {

            $row=DB::table('product')->where('p_id',$p_id)->first();
             //print_r($row);
            //exit();
            return view('Admin.Product.EditProduct')->with('row',$row); 
         }*/
      public function EditProduct(Request $request,$p_id)
    {

         $result = DB::table('category')->get();
        $option = ($request['c_is_parent'] == "on") ? 1 : 0;
      //  print_r($option);
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

              $row=DB::table('product')->where('p_id',$p_id)->first();
              $catedata=DB::table('category')->get();
              /*print_r($catedata);
              exit();*/
        return view('Admin.Product.EditProduct')->with('results',$arrayName)->with('row',$row)->with('catedata',$catedata);
    }   
}
