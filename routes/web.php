<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//
////前台路由
//Route::get('/', 'Index\IndexController@index');
//Route::get('/login', 'Index\LoginController@login');
//Route::get('/reg', 'Index\LoginController@reg');
//Route::post('/logindo', 'Index\LoginController@logindo');
//Route::any('/send', 'Index\LoginController@sendemail');
//
//Route::prefix('cus/')->middleware('CheckLogin')->group(function(){
//    // echo "oookk";exit;
//    Route::get('create','Cus\CusController@create'); //添加视图
//    Route::post('save','Cus\CusController@save');//添加
//    Route::get('index','Cus\CusController@index');//展示
//    Route::get('destroy','Cus\CusController@destroy');//删除
//    Route::get('edit/{id}','Cus\CusController@edit');//修改视图
//    Route::post('update/{id}','Cus\CusController@update');//执行修改
//    Route::post('nameonly','Cus\CusController@nameonly');//执行修改
//});
//
//
//Route::prefix('user/')->group(function(){
//    // echo "oookk";exit;
//    Route::get('create','User\UserController@create'); //添加视图
//    Route::post('save','User\UserController@save');//添加
//    Route::get('index','User\UserController@index');//展示
//    Route::get('destroy','User\UserController@destroy');//删除
//    Route::get('edit/{id}','User\UserController@edit');//修改视图
//    Route::post('update/{id}','User\UserController@update');//执行修改
//    Route::post('nameonly','User\UserController@nameonly');//执行修改
//});
//
//Route::prefix('hw/')->middleware('CheckLogin')->group(function(){
//    // echo "oookk";exit;
//    Route::get('create','User\HwController@create'); //添加视图
//    Route::post('save','User\HwController@save');//添加
//    Route::get('index','User\HwController@index');//展示
//    Route::get('delete/{id}','User\HwController@delete');//删除
//    Route::get('edit/{id}','User\HwController@edit');//修改视图
//    Route::post('update/{id}','User\HwController@update');//执行修改
//    Route::post('nameonly','User\HwController@nameonly');//执行修改
//});

Route::prefix('reg/')->group(function (){
   Route::get('login','reg\RegController@login');
    Route::post('add','reg\RegController@add');
    Route::get('create','reg\SignController@create');
    Route::post('save','reg\SignController@save');
    Route::get('index','reg\SignController@index');
});


Route::prefix('student/')->group(function (){
    Route::get('create','Student\StudentController@create');
    Route::post('add','Student\StudentController@add');
    Route::get('show','Student\StudentController@show');
    Route::post('save','Student\StudentController@save');
    Route::get('index','Student\StudentController@index');
});















