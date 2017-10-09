<?php
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
class MyuserController extends Controller
{
	//
	public function user(Request $request)
	{
		$myip =$this-> get_client_ip();//获取ip
		if($request->isMethod('get')){
	        $data['email'] 	  =	$request->input('email');
	        $first = DB::table('user')->select(['email'])->where('email',$data['email'])->first();//查询邮箱
	        var_dump($first);die;
	        if($first){
	        	echo 1;
	        }else{
	        	$data['password'] = md5($request->input('password'));
		        $data['money']	  = '0';
		        $data['addtime']  = time();
		        $data['ip'] = ip2long($myip);
		        $res=DB::table('user')->insert($data);
		        
	        }
        }
	}

	//退出
	public function user_out()
	{
		$session=new Session;
		$out = $session->remove('user');//删除
		return redirect('/');//重定向首页
	}
	public function get_client_ip($type = 0,$adv=false) {
	    $type       =  $type ? 1 : 0;
	    static $ip  =   NULL;
	    if ($ip !== NULL) return $ip[$type];
	    if($adv){
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
	    $long = sprintf("%u",ip2long($ip));
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}

    
}
