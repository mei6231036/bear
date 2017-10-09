<?php
namespace App\Http\Controllers\Login;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
	//注册
	



	public function regin(Request $request)
	{
		$myip =$this-> get_client_ip();//获取ip
		if($request->isMethod('get')){
	        $data['email'] 	  =	$request->input('email');
	        $first = DB::table('user')->select(['email'])->where('email',$data['email'])->first();//查询邮箱
	        //判断邮箱是否注册过
	        if($first){
	        	echo 1;
	        }else{
	        	//入用户登录表
	        	$data['password'] = md5($request->input('password'));
		        $data['addtime']  = time();
		        $data['ip'] = ip2long($myip);
		        $res=DB::table('user')->insert($data);
		        $arr=DB::table('user')->orderBy('user_id', 'desc')->first();
		        //入用户基本信息表
		        $info['user_id'] = $arr->user_id;//用户主键id
		        $info['nickname'] = $arr->email;
		        $ree=DB::table('user_info')->insert($info);
		        if($ree)
		        {
		        	echo 2;
		        }
	        }
        }
	}
	//登录
	public function login(Request $request)
	{
		if($request->isMethod('get')){
			echo 0;die;
	        $where['email']=$request->input('email');
	        $data = DB::table('user')->where($where)->first();
	        // $info = DB::table('user_info')->select('*')->where('user_id',$data->user_id)->first();
	        if($data->password!=$request->input('password'))
	        {
	        	echo 1;
	        }else{
	        	//登陆成功
	        	// $request->session()->put('user'.$data->email,$data);
	        	$session=new Session;
				$session->set('user',$data);
	        }
        }
	}
	//退出
	public function login_out()
	{
		$session=new Session;
		$out = $session->remove('user');//删除
		return redirect('/');//重定向首页
	}
	public function get_client_ip($type = 0,$adv=false) {
	    $type       =  $type ? 1 : 0;
	    static $ip  =   NULL;
	    if ($ip !== NULL) return $ip[$type];
	    if($adv){//高级模式获取(防止伪装)
	        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
	            $pos    =   array_search('unknown',$arr);
	            if(false !== $pos) unset($arr[$pos]);
	            $ip     =   trim($arr[0]);
	        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
	        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	            $ip     =   $_SERVER['REMOTE_ADDR'];
	        }
	    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	        $ip     =   $_SERVER['REMOTE_ADDR'];
	    }
	    // IP地址合法验证
	    $long = sprintf("%u",ip2long($ip));
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}


	
    
}
