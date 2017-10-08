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
Route::get('/',"IndexController@index");
Route::get('/add',"IndexController@add");
Route::get('/cate',"CateController@show");
Route::get('/l',"ZbController@show");
Route::get('/sign',"IndexController@sign");
Route::get('/login',"IndexController@login");
Route::get('/register',"IndexController@register");
Route::resource('home',"home\HomeController");