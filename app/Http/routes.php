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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', 'HomeController@index');
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

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// //get
// Route::get('base',function(){
// 	return 'Hello World';
// });
// //post
// Route::post('base2',function(){
// 	return 'Hello World';
// });

// //多请求路由
// Route::match(['get','post'],'multy1',function(){
// 	return 'multy1';
// });

// Route::any('multy2',function(){
// 	return 'multy2';
// });
// //路由参数
// // Route::get('user/{id}',function($id){

// // return 'user->id'.$id;
// // });

// // Route::get('user/{name?}',function($name){

// // return 'user->name:'.$name;
// // })->where('name','[A-Za-z]+');
// // Route::get('user/{id}/{name?}',function($id,$name){

// // 	return 'user->id'.$id.'->name:'.$name;
// // })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// //路由别名
// Route::get('user/center',['as'=>'center',function(){
// 	return route('center');
// }]);
// //路由群组
// Route::group(['prefix'=>'member'],function(){
// 	Route::get('user/center',['as'=>'center',function(){
// 		return route('center');
// 	}]);
// 	Route::any('multy2',function(){
// 		return 'multy3';
// 	});
// });

// //路由输出视图
// Route::get('view',function(){
// 	return view('welcome');
// });

// Route::get('/testUrl','HomeController@testUrl');
// Route::group(['middleware'=>['web']],function (){
//     Route::any('sesion',['uses'=>'HomeController@sesion']);
//     Route::any('sesiona',[
//         'as'=>'xm',
//         'uses'=>'HomeController@sesiona']);
//     Route::any('response',['uses'=>'HomeController@response']);
// });
// Route::get('/active0','HomeController@active0');
// Route::group(['middleware'=>['active']],function(){
//     Route::get('/active1','HomeController@active1');
//     Route::get('/active2','HomeController@active2');
// });


 Route::group(['middleware' => 'web'], function () {
     Route::auth();
     Route::get('/', 'HomeController@index');
 });

// //Route::get('/student/','StudentController@index');
// Route::get('/student/',['uses'=>'StudentController@index']);

//Route::get('/','HomeController@index');
