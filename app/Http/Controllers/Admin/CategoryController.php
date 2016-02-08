<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\category;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function AddCategory()
    {
    	//echo "mm";
    	return view('Admin.Category.AddCategory');
    }

    public function insert_category(Request $request)
    {

    		//echo "hello"; exit;

				//insert product in database
		
		
			 $option = ($request['c_is_parent'] == "on") ? 1 : 0; 
			 $m=1;
			 if($m == 1)
			 {
			 	
			 	$data= array( 
				'c_name' =>$request['c_name'],
				'c_image' =>$request['c_image'],
				'c_desc' =>$request['c_desc'],
				'c_is_parent' =>$option,
				'c_parent' =>$request['c_parent'],	
				);
				$m++;
			 //print_r($data);
			 //exit();

			$res=category::insert($data);
				 if($res > 0)
			{

				Session::flash('msg',"Insert Successfully");
				return redirect('AddCategory');
			}	

			 }
			 else
			 {
			 	

			 	



			 }

			
		
    	
    }


}
