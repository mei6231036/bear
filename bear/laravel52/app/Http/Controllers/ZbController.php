<?php 
namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
class ZbController extends Controller
{	
	//全部主播页面
	public function show()
	{
		//类型
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
		//查询所有的房间和主播
		$room=DB::table('room')->get();
		$room=json_decode(json_encode($room),true);
		$arr = DB::table('room')
					->join('anchor','room.anchor_id','=','anchor.anchor_id')
					->join('type','room.atype_id','=','type.id')
					->select("*")
					->get();	
		$arr=json_decode(json_encode($arr),true);
		return view('l/live',['cate'=>$cate,'data'=>$data,'arr'=>$arr]);
	}
	//主播详情页
	public function li(Request $request)
	{
		//用户登录信息
        //用户session
        $session=new Session;
        $user=$session->get('user');
        if($user)
        {
            $user = DB::table('user_info')->select('*')->where('user_id',$user->user_id)->first();
        }
        // var_dump($user);die;
		//类型
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
		$anchor_id=$request->input('anchor_id');//主播id
		//查询信息
		$arr = DB::table('room') 
		         ->where('anchor.anchor_id','=',$anchor_id)
		         ->join('anchor','room.anchor_id','=','anchor.anchor_id')
		         ->join('type','room.atype_id','=','type.id')
		         ->first();
		$arr=json_decode(json_encode($arr),true);
		$data = DB::table('anchor')->where('anchor.anchor_id','=',$anchor_id)->join('type','anchor.type_id','=','type.id')->first();
		$data=json_decode(json_encode($data),true);
		return view('l/live_list',['cate'=>$cate,'arr'=>$arr,'data'=>$data,'user'=>$user]);
	}
	//筛选
	public function liit(Request $request)
	{
		$id=$request->input('id');
		$data=DB::table('type')->get();
		$data=json_decode(json_encode($data),true);
		$room=DB::table('room')->get();
		$room=json_decode(json_encode($room),true);
		$arr = DB::table('room')
			->where('type.parent_id','=',$id)
			->join('anchor','room.anchor_id','=','anchor.anchor_id')
			->join('type','room.atype_id','=','type.id')
			->select("*")
			->get();	
		$arr=json_decode(json_encode($arr),true);
		
		foreach ($data as $k => $v) {
			if ($v['parent_id']==0) {
				$cate[$v['id']]['val']=$v;
			}else
			{
				$cate[$v['parent_id']]['child'][]=$v;
			}
		}
		return view('l/live',['cate'=>$cate,'arr'=>$arr]);
	}
	//侧边栏删选
	public function chliit(Request $request)
	{
		$id=$request->input('id');
		$data=DB::table('type')->get();
		$data=json_decode(json_encode($data),true);
		$room=DB::table('room')->get();
		$room=json_decode(json_encode($room),true);
		$arr = DB::table('room')
			->where('type.id','=',$id)
			->join('anchor','room.anchor_id','=','anchor.anchor_id')
			->join('type','room.atype_id','=','type.id')
			->select("*")
			->get();	
		$arr=json_decode(json_encode($arr),true);
		
		foreach ($data as $k => $v) {
			if ($v['parent_id']==0) {
				$cate[$v['id']]['val']=$v;
			}else
			{
				$cate[$v['parent_id']]['child'][]=$v;
			}
		}
		return view('l/live',['cate'=>$cate,'arr'=>$arr]);

	}
}






 ?>