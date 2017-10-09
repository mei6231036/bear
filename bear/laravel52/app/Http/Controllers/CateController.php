<?php 
namespace App\Http\Controllers;
use DB;
class CateController extends Controller
{
	public function show()
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

		// var_dump($cate);die;
		return view('cate/cate_list',['cate'=>$cate]);
	}
}


 ?>