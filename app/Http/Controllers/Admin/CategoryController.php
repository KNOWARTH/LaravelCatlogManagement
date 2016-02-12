<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\category;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function AddCategory(Request $request)
    {
    	//echo "mm";
    	$result = DB::table('category')->get();
		$option = ($request['c_is_parent'] == "on") ? 1 : 0;
		//print_r($option);
			$arrayName = array();
			$arraycat_parent = array();
			foreach ($result as $kk) {
	   		//   $kk->$arrayName[] = array(c_id,
	   		// print_r($option);
			// $kk->c_name,
				//$c_idd = $kk->c_id;
				//print_r($c_idd);

                $cis_parent = $kk->c_is_parent;
               // print_r($cis_parent);

                //$cat_parent = $kk->c_parent;
                //print_r($cat_parent);
                if($cis_parent == $option)
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
    public function ajaxsubcat2()
    {
        $c_id = Input::get('c_id');
        
        //$c_id = DB::table('category')->get('c_id');
        //$cat_id = Input::get('cat_id');
        $subcategories = DB::table('category')->where('c_parent','=',$c_id)->lists('c_name');
        
        return Response::json($subcategories);
    }

    public function insert_category(Request $request)
    {

    		//echo "hello"; exit;
    		//print_r($request['c_is_parent']);
    		//exit;

			$option = ($request['c_is_parent'] == "on") ? 1 : 0;
			//insert product in database
			
      
	   			//print_r($arr);
	   

			 	$data= array( 
				'c_name' =>$request['c_name'],
				'c_image' =>$request['c_image'],
				'c_desc' =>$request['c_desc'],
				'c_is_parent' =>$option,
				'c_parent' =>$request['c_parent'],	
				);
				
			 //print_r($data);
			 //exit();

			$res=DB::table('category')->insert($data);
 			//return view('Admin.Category.AddCategory')->with('results',$arrayName);
			if($res > 0)
			{

				Session::flash('msg',"Insert Successfully");
				return redirect('AddCategory');
			}	

			 	

			 	



			 }

			
		
    	
    


}
