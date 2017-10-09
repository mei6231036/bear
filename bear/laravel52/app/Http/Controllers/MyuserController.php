<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
class MyuserController extends Controller
{	
	// 个人中心
	public function index()
	{
		return  view('myuser.index');
	}   
	public	function myauth()
	{

		$cate=DB::table('type')->where('parent_id','=',0)->get();
		$session=new Session;
		$user=$session->get('user');
		if ($user) {
		$user_id=$user->user_id;
		$res=DB::table('anchor')->where("user_id","=",$user_id)->first();
		if (!empty($res->name)) {
			$status=1;
		}else{
			$status=0;
		}
		}else{
			$status=0;
		}
		if (!empty($res->number)) {
		if ($res->status!=1) {
			$rz=0;
		}else{
			$rz=1;
		}
	}else{
			$rz=0;
	}
		return  view('myuser.myauth',['cate'=>$cate,'status'=>$status,'rz'=>$rz]);
	}   
	 public	function myaccount()
	{
		return  view('myuser.myaccount');
	}   
	 public	function mylevel()
	{
		return  view('myuser.mylevel');
	}   
	 public	function mylist()
	{
		return  view('myuser.mylist');
	}   
	 public	function mysubscribe()
	{
		return  view('myuser.mysubscribe');
	}   
	 
}
