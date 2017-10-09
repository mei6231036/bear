<?php 
namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class ArticleController extends Controller
{
	public function index()
	{
		return view('article/index');		
	}
}