<?php
namespace App\Http\Controllers;
use DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Requests;
class MyuserController extends Controller
{	
	// 个人中心
	public function index()
	{
		return  view('myuser.index');
	}   
	public	function myauth(Request $request)
	{
		if ($request->isMethod('post')) {
			$arr['name']=$request->input('name');
			$arr['type_id']=$request->type_id;
			$file = $request->file('img');  
  
		if($file -> isValid()){  
		  
		    //检验一下上传的文件是否有效.  
		    // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;    
            // 使用我们新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
          	if ($bool) {
          		$arr['img']="uploads"."/".$filename;
          		$session=new Session;
				$user=$session->get('user');
          		$arr['user_id']=$user->user_id;
          		$res=DB::table('anchor')->insert($arr);
          		if ($res) {
          			return redirect('/myuser');
          		}
          	}

  
}  

		}else{
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
