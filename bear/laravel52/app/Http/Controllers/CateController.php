<?php 
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class CateController extends Controller
{
	public function show()
	{
		$data=DB::table('type')->get();
		$data=json_decode(json_encode($data),true);
			foreach ($data as $k => $v) {
				if ($v['parent_id']==0) {
					$cate[$v['id']]['val']=$v;
				}else
				{
					$cate[$v['parent_id']]['child'][]=$v;
				}
			}

		return view('cate/cate_list',['cate'=>$cate,'data'=>$data]);
	}

	public function listcate(Request $request)
	{
		$id=$request->input('id');
		$data=DB::table('type')->get();
		$data=json_decode(json_encode($data),true);
		$da=DB::table('type')->where(['parent_id'=>$id])->get();
		$da=json_decode(json_encode($da),true);
			foreach ($data as $k => $v) {
				if ($v['parent_id']==0) {
					$cate[$v['id']]['val']=$v;
				}else
				{
					$cate[$v['parent_id']]['child'][]=$v;
				}
			}
		return view('cate/cate_list',['cate'=>$cate,'data'=>$da]);
	}
	public function childcate(Request $request)
	{
		$id=$request->input('id');
		$data=DB::table('type')->get();
		$data=json_decode(json_encode($data),true);
		$da=DB::table('type')->where(['id'=>$id])->get();
		$da=json_decode(json_encode($da),true);
			foreach ($data as $k => $v) {
				if ($v['parent_id']==0) {
					$cate[$v['id']]['val']=$v;
				}else
				{
					$cate[$v['parent_id']]['child'][]=$v;
				}
			}
		return view('cate/cate_list',['cate'=>$cate,'data'=>$da]);

		}

}


 ?>