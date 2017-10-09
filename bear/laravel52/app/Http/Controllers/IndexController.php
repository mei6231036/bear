<?php 
namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class IndexController extends Controller
{
	public function index()
	{
		return view('index/index');		
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