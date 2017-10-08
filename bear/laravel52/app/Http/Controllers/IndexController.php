<?php 
namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class IndexController extends Controller
{
	public function index()
	{
		//用户session
		$session=new Session;
		$user=$session->get('user');

		$data=DB::table('type')->where('parent_id','!=',0)->get();
		$arr=[];
		foreach ($data as $key => $val) {
			foreach ($val as $k => $v) {
				$arr[$key][$k]=$v;
			}
		}
		$res=[];
		$num=0;
   		while (1) { 
			$a=array_rand($arr);
			if (!in_array($arr[$a],$res)) {
				$res[]=$arr[$a];
				$num++;
			}
			if ($num>8) {
				break;
			}
		}
		return view('index/index',['res'=>$res]);
	}
	public function add()
	{
		return view('index/live_add');
	}
	public function sign()
	{
		return view('index/live_sign');
	}
	public function register()
	{
		return view('index/register');
	}
	public function login()
	{
		return view('index/login');
	}
}


 ?>