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
	public	function myren()
	{
		return  view('myuser.myren');
	}    
	public	function myfile()
	{
		return  view('myuser.myfile');
	}  
	public	function myfile_do(Request $request)
	{
		$dir=$_POST['filename'];

		$dir="uploads/".md5($dir);
		file_exists($dir) or mkdir($dir,0777,true);//创建目录


		$path=$dir."/".$_POST['blobname'];

		//print_r($_FILES["file"]);
		move_uploaded_file($_FILES["file"]["tmp_name"],$path);//第二个参数就是包含有路径的新的文件名。如："upload/1.jpg";

		if(isset($_POST['lastone'])){
			echo $_POST['lastone'];
			$count=$_POST['lastone'];
			
			$fp   = fopen('uploads/'.$_POST['filename'],"abw");
			for($i=0;$i<=$count;$i++){
				$handle = fopen($dir."/".$i,"rb");  
				fwrite($fp,fread($handle,filesize($dir."/".$i)));  
				fclose($handle);  	
		}
		fclose($fp);
		}
				
	}  
	//修改资料
	public	function myren_do(Request $request)
	{
		if ($request->isMethod('post')) {
			$id = $request->input('user_id');//id
			$arr = $request->all();
			$arr['age'] = 2017-$arr['sr_year']; 
			unset($arr['_token']);
			
			//文件
			$file = $request->file('heading'); 
			if($file)
			{
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
		            if($bool){
		            	$arr['heading']='uploads/'.$filename;
		            }
        		}
			}
			// 接过来的城市名换为id
			$city=DB::table('city')->where("city",'=',$arr['sheng'])->first();
			$arr['sheng'] = $city->id;
			//修改
			$re = DB::table('user_info')
			      ->where('user_id','=',$id)
			      ->update($arr);
			if($re)
			{
				return  view('myuser.index');
			}
		}

		

		
	}    
	 
}
