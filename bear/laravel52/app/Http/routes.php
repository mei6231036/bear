<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/', function () {
   
});
Route::any('/home',"home\HomeController@index");
// 个人中心
<<<<<<< HEAD
Route::get('/myuser',"MyuserController@index");
Route::any('/myauth',"MyuserController@myauth");
Route::get('/myaccount',"MyuserController@myaccount");
Route::get('/mylevel',"MyuserController@mylevel");
Route::get('/mylist',"MyuserController@mylist");
Route::get('/mysubscribe',"MyuserController@mysubscribe");
Route::get('/',"IndexController@index");
Route::get('/add',"IndexController@add");
Route::get('/cate',"CateController@show");
Route::get('/l',"ZbController@show");
Route::get('/sign',"IndexController@sign");
Route::get('/login',"IndexController@login");
Route::get('/login_do',"login\LoginController@login");//zyk
Route::get('/login_out',"login\LoginController@login_out");//zyk
Route::get('/regin',"login\LoginController@regin");//zyk
Route::get('/register',"IndexController@register");
=======
Route::any('/myuser',"MyuserController@index");
Route::any('/myauth',"MyuserController@myauth");
Route::any('/myaccount',"MyuserController@myaccount");
Route::any('/mylevel',"MyuserController@mylevel");
Route::any('/mylist',"MyuserController@mylist");
Route::any('/mysubscribe',"MyuserController@mysubscribe");
<<<<<<< HEAD
Route::any('/myren',"MyuserController@myren");//资料修改
Route::any('/myren_do',"MyuserController@myren_do");//修改保存
Route::any('/',"IndexController@index");
Route::any('/add',"IndexController@add");
Route::any('/cate',"CateController@show");
=======
Route::any('/',"IndexController@index");
Route::any('/add',"IndexController@add");
Route::any('/cate',"CateController@show");
Route::any('/listcate',"CateController@listcate");
Route::any('/childcate',"CateController@childcate");
>>>>>>> d1e3fb7869b4e79001e9fe215592fc5d531157e5
Route::any('/l',"ZbController@show");
Route::any('/sign',"IndexController@sign");
Route::any('/login',"IndexController@login");
Route::any('/login_do',"login\LoginController@login");//zyk
Route::any('/login_out',"login\LoginController@login_out");//zyk
Route::any('/regin',"login\LoginController@regin");//zyk
Route::any('/register',"IndexController@register");
>>>>>>> 9b8a7411f8569d93e67fbf2ad13761b8bc4c18f6
Route::resource('home',"home\HomeController");
Route::resource('/yy',"YyController@index");

Route::any('/article',"ArticleController@index");