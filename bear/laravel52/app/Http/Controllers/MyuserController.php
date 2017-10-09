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
		$session=new Session;
		$user=$session->get('user');
		if ($user) {
		$user_id=$user->user_id;
		$res=DB::table('anchor')->where("user_id","=",$user_id)->get();
		if ($res) {
			$status=1;
		}else{
			$status=0;
		}
		}else{
			$status=0;
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
