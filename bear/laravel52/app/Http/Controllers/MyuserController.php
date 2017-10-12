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
	public function upup()
	{
		return  view('myuser.upup');
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
			$arr['sheng'] = $city['id'];
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
	public function uped()
	{
		


		// Support CORS
		// header("Access-Control-Allow-Origin: *");
		// other CORS headers if any...
		if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
		    exit; // finish preflight CORS requests here
		}


		if ( !empty($_REQUEST[ 'debug' ]) ) {
		    $random = rand(0, intval($_REQUEST[ 'debug' ]) );
		    if ( $random === 0 ) {
		        header("HTTP/1.0 500 Internal Server Error");
		        exit;
		    }
		}

		// header("HTTP/1.0 500 Internal Server Error");
		// exit;


		// 5 minutes execution time
		@set_time_limit(5 * 60);

		// Uncomment this one to fake upload time
		// usleep(5000);

		// Settings
		// $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
		$targetDir = 'upload_tmp';
		$uploadDir = 'upload';

		$cleanupTargetDir = true; // Remove old files
		$maxFileAge = 5 * 3600; // Temp file age in seconds


		// Create target dir
		if (!file_exists($targetDir)) {
		    @mkdir($targetDir);
		}

		// Create target dir
		if (!file_exists($uploadDir)) {
		    @mkdir($uploadDir);
		}

		// Get a file name
		if (isset($_REQUEST["name"])) {
		    $fileName = $_REQUEST["name"];
		} elseif (!empty($_FILES)) {
		    $fileName = $_FILES["file"]["name"];
		} else {
		    $fileName = uniqid("file_");
		}

		$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
		$uploadPath = $uploadDir . DIRECTORY_SEPARATOR . $fileName;

		// Chunking might be enabled
		$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
		$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;


		// Remove old temp files
		if ($cleanupTargetDir) {
		    if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
		    }

		    while (($file = readdir($dir)) !== false) {
		        $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

		        // If temp file is current file proceed to the next
		        if ($tmpfilePath == "{$filePath}_{$chunk}.part" || $tmpfilePath == "{$filePath}_{$chunk}.parttmp") {
		            continue;
		        }

		        // Remove temp file if it is older than the max age and is not the current file
		        if (preg_match('/\.(part|parttmp)$/', $file) && (@filemtime($tmpfilePath) < time() - $maxFileAge)) {
		            @unlink($tmpfilePath);
		        }
		    }
		    closedir($dir);
		}


		// Open temp file
		if (!$out = @fopen("{$filePath}_{$chunk}.parttmp", "wb")) {
		    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		}

		if (!empty($_FILES)) {
		    if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
		    }

		    // Read binary input stream and append it to temp file
		    if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
		    }
		} else {
		    if (!$in = @fopen("php://input", "rb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
		    }
		}

		while ($buff = fread($in, 4096)) {
		    fwrite($out, $buff);
		}

		@fclose($out);
		@fclose($in);

		rename("{$filePath}_{$chunk}.parttmp", "{$filePath}_{$chunk}.part");

		$index = 0;
		$done = true;
		for( $index = 0; $index < $chunks; $index++ ) {
		    if ( !file_exists("{$filePath}_{$index}.part") ) {
		        $done = false;
		        break;
		    }
		}
		if ( $done ) {
		    if (!$out = @fopen($uploadPath, "wb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		    }

		    if ( flock($out, LOCK_EX) ) {
		        for( $index = 0; $index < $chunks; $index++ ) {
		            if (!$in = @fopen("{$filePath}_{$index}.part", "rb")) {
		                break;
		            }

		            while ($buff = fread($in, 4096)) {
		                fwrite($out, $buff);
		            }

		            @fclose($in);
		            @unlink("{$filePath}_{$index}.part");
		        }

		        flock($out, LOCK_UN);
		    }
		    @fclose($out);
		}
		// Return Success JSON-RPC response
		die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
}    
	 
}
