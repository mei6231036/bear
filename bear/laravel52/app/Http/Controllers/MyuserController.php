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
		$cate=DB::table('type')->where('parent_id','=',0)->get();
		$data=DB::table('type')->get();
		foreach ($cate as $key => $val) {
			foreach ($data as $k => $v) {
				if ($val->id==$v->parent_id) {
					$cate[$key]->child[]=$v;
				}
			}
		}
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
