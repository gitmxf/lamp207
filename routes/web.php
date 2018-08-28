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

//miao
Route::get('/login', function(){
	return 'login page';
});


Route::group([], function(){

	// 网站的路由
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/lala', function(){
		return '这是啥';
	})->name('admin');

	//更新的路由
	Route::get('/update', function(){
		echo '更新的路由';
	})->middleware('login');

	//删除的路由
	Route::get('/delete', function(){
		echo '删除的路由';
	})->middleware('login');

	Route::get('/home', function(){
		return '<a href="'.route('admin').'">点就行了</a>';
	});


	//传参数  where是限制限制参数类型(正则匹配就OK)
	Route::get('/user/{id}', function($id){
		echo '用户的ID'.$id;
	})->where('id','\d+');

	Route::get('/404', function(){
		if(empty($_GET['id'])){
			abort(404);
		}

	});


});


//后台的路由(配合控制器的)
//第一个参数是路径第二个是控制器加上方法名
Route::get('/user/add','Usercontroller@add');
Route::post('/user/insert','Usercontroller@insert');

// API接口路由
// Route::get('/user/{id}','Usercontroller@show')->name('user.show');

Route::get('/users','Usercontroller@index')->middleware('login');

// Route::get('/test', function(){
// 	echo route('user.show',['id'=>100]);
// });

//资源控制器
Route::resource('tiezi','TieziController');

Route::get('/request','TieziController@request');

//上传
Route::get('/form','TieziController@form');

Route::post('/upload','TieziController@upload');


//cookie
Route::get('/cookie','HomeController@set');


//闪存
Route::get('/flash','HomeController@flash');
Route::get('/get-flash','HomeController@getFlash');

//表单验证
Route::get('/user-2','HomeController@user');
Route::post('/user-2','HomeController@insert');

//响应
Route::get('response','HomeController@response');


//视图
Route::get('views','HomeController@views');

//模板继承
//页面1
Route::get('/page-1','HomeController@page1');
//页面2
Route::get('/page-2','HomeController@page2');

//循环控制

Route::get('/control','HomeController@control');


//数据库

Route::get('/select','DBController@select');
// Route::get('/insert','DBController@insert');

Route::get('/trans','DBController@trans');