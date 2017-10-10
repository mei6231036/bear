<?php 
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
/**
* 
*/
class YyController extends Controller
{
	public function index(Request $request)
	{
		if ($request->isMethod('post')) {
			$arr['realname']=$request->input('name');
			$arr['number']=$request->number;
			$b_img = $request->file('b_img');  
			$l_img = $request->file('l_img'); 
		if($b_img -> isValid() && $l_img -> isValid()){    
    		    //检验一下上传的文件是否有效.  
    		    // 获取文件相关信息
            $b_originalName = $b_img->getClientOriginalName(); // 文件原名
            $b_ext = $b_img->getClientOriginalExtension();     // 扩展名
            $b_realPath = $b_img->getRealPath();   //临时文件的绝对路径
            $b_type = $b_img->getClientMimeType();     // image/jpeg
            // 上传文件
            $b_filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.b_img' . $ext;    
            // 使用我们新建的uploads本地存储空间（目录）
            $b_bool = Storage::disk('uploads')->put($b_filename, file_get_contents($b_realPath));

            $l_originalName = $l_img->getClientOriginalName(); // 文件原名
            $l_ext = $l_img->getClientOriginalExtension();     // 扩展名
            $l_realPath = $l_img->getRealPath();   //临时文件的绝对路径
            $l_type = $l_img->getClientMimeType();     // image/jpeg
            // 上传文件
            $l_filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.l_img' . $ext;    
            // 使用我们新建的uploads本地存储空间（目录）
            $l_bool = Storage::disk('uploads')->put($l_filename, file_get_contents($l_realPath));
          	if ($b_bool && $l_bool) {
        		$arr['b_img']="uploads"."/".$b_filename;
            $arr['l_img']="uploads"."/".$l_filename;

        		$res=DB::table('anchor')->update($arr);
        		if ($res) {
        			return redirect('/myuser');
        		}

      	}
		
		}

	 }
            return view('yy/index');
  }
}

 ?>