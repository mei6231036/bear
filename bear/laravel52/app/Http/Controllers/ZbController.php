<?php 
namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class ZbController extends Controller
{	
	public function show()
	{
		return view('l/live_list');	
	}
}






 ?>