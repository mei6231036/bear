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
		        $data['money']	  = '0';
		        $data['addtime']  = time();
		        $data['ip'] = ip2long($myip);
		        $res=DB::table('user')->insert($data);
		        $user_id = DB::table('user')->insertGetId()
		       /* //入用户基本信息表
		        $info['user_id'] = $user_id;//用户主键id
		        $info['heading'] = */
	        }
        }
	}

	public function login(Request $request)
	{
		if($request->isMethod('get')){
	        $where['email']=$request->input('email');
	        $data = DB::table('user')->where($where)->first();
	        if($data->password!=md5($request->input('password')))
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