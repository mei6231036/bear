<?php 
namespace App\Http\Controllers;
use DB;
class CateController extends Controller
{
	public function show()
	{
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
		$cate=DB::table('type')->where('parent_id','=',0)->get();
		$data=DB::table('type')->get();
		foreach ($cate as $key => $val) {
			foreach ($data as $k => $v) {
				if ($val->id==$v->parent_id) {
					$cate[$key]->child[]=$v;
				}
			}
		}
		return view('cate/cate_list',['res'=>$res,'cate'=>$cate]);
	}
}


 ?>