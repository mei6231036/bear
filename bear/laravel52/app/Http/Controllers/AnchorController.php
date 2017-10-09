<?php 
namespace App\Http\Controllers;
use DB;

class AnchorController extends Controller
{
	
	public function index()
	{
		$cate=DB::table('type')->where('parent_id','=',0)->get();
		return view('anchor/index',['cate'=>$cate]);
	}
}
 ?>