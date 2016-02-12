<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Admin\AdminHome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
    Route::get('AddProduct','Admin\ProductController@AddProduct');
    Route::post('insertProduct','Admin\ProductController@insertProduct');
    Route::get('AddCategory','Admin\CategoryController@AddCategory');
  Route::post('insert_category','Admin\CategoryController@insert_category');
   Route::get('ajaxsubcat2','Admin\CategoryController@ajaxsubcat2');
    Route::get('ShowProduct','Admin\ProductController@ShowProduct');
    Route::get('EditProduct/{p_id}','Admin\ProductController@EditProduct');
    Route::any('testing','Admin\ProductController@testing');
       Route::get('ajaxsubcat1','Admin\ProductController@ajaxsubcat1');
});
