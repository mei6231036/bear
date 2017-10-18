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


Route::any('/home',"home\HomeController@index");
// 个人中心
Route::any('/myuser',"MyuserController@index");
Route::any('/upup',"MyuserController@upup");
Route::any('/uped',"MyuserController@uped");
Route::any('/myauth',"MyuserController@myauth");
Route::any('/myaccount',"MyuserController@myaccount");
Route::any('/mylevel',"MyuserController@mylevel");
Route::any('/myfile',"MyuserController@myfile");
Route::any('/myfile_do',"MyuserController@myfile_do");
Route::any('/mylist',"MyuserController@mylist");
Route::any('/mysubscribe',"MyuserController@mysubscribe");
Route::any('/myren',"MyuserController@myren");//资料修改
Route::any('/myren_do',"MyuserController@myren_do");//修改保存
Route::any('/',"IndexController@index");
Route::any('/add',"IndexController@add");
Route::any('/cate',"CateController@show");
Route::any('/listcate',"CateController@listcate");
Route::any('/childcate',"CateController@childcate");
Route::any('/l',"ZbController@show");
Route::any('/li',"ZbController@li");//直播详情页
Route::any('/liit',"ZbController@liit");//筛选直播
Route::any('/chliit',"ZbController@chliit");//侧边栏筛选
Route::any('/sign',"IndexController@sign");
Route::any('/login',"IndexController@login");
Route::any('/login_do',"login\LoginController@login");//zyk
Route::any('/login_out',"login\LoginController@login_out");//zyk
Route::any('/regin',"login\LoginController@regin");//zyk
Route::any('/register',"IndexController@register");
Route::resource('home',"home\HomeController");
Route::any('/yy',"YyController@index");
Route::any('/yy/ins',"YyController@ins");
Route::any('/article',"ArticleController@index");
Route::any('/myauth/check',"MyuserController@check");
Route::any('/uploadify',"MyuserController@uploaddify");
Route::any('/pubu',function ()
{
	return view('pubu/index');
});
Route::any('/data',function ()
{
	$res=DB::table('city')->get();
	return view('data/index',['res'=>$res]);
});

Route::any('/masonry',function ()
{
	return view('data/masonry');
});

Route::any('/lives',"ZbController@lives");//直播详情页

// 引导用户到新浪微博的登录授权页面
Route::get('login/weibo', 'Login\LoginController@weibo');
// 用户授权后新浪微博回调的页面
Route::get('login/callback', 'Login\LoginController@callback');