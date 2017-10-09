<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
class MyuserController extends Controller
{	
	// 个人中心
	function index()
	{
		return  view('myuser.index');
	}   
	 	function myauth()
	{

		return  view('myuser.myauth',['cate'=>$cate]);
	}   
	 	function myaccount()
	{
		return  view('myuser.myaccount');
	}   
	 	function mylevel()
	{
		return  view('myuser.mylevel');
	}   
	 	function mylist()
	{
		return  view('myuser.mylist');
	}   
	 	function mysubscribe()
	{
		return  view('myuser.mysubscribe');
	}   
	 
}
