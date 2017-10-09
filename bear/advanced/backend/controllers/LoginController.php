<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/*
 *后台登录接口
 */
class LoginController extends Controller
{
	public $session;
	public function init()
	{
		// $this->session=Yii::$app->session;
	}
	
	//登录接口
	public function actionIndex()
	{
		$a_name=Yii::$app->request->get('a_name');
		$a_pwd=Yii::$app->request->get('a_pwd');
		$callback=Yii::$app->request->get('callback')
		$pwd=md5($a_pwd);
		$db=Yii::$app->db;
		$res=$db->createCommand("select * from admin where a_name='$a_name' and a_pwd='$pwd'")->queryOne();
		if ($res) {
			$this->session['user']=$res;
			$msg['error']=1;
			$msg['msg']="登录成功";
		}else{
			$msg['error']=0;
			$msg['msg']="用户名或密码错误";
		}
		echo $callback."(".json_encode($msg).")";
	}
}








 ?>