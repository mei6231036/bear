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

Route::get('/', function () {
   
});
Route::get('/home',"home\HomeController@index");
// 个人中心
Route::get('/myuser',"MyuserController@index");
Route::get('/myauth',"MyuserController@myauth");
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
Route::get('/anchor',"AnchorController@index");
Route::resource('home',"home\HomeController");
Route::resource('/yy',"YyController@index");

Route::get('/article',"ArticleController@index");