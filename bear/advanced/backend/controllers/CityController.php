<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;

class CityController extends Controller
{
	//查询某一天各个省注册人数
	public function actionSel()
	{
		$time = '1507521395';
		// $data = date('Y-m-d',$time);
		
		$db = Yii::$app->db;
		//接值
		// $time=Yii::$app->request->get('time');

		//查询省份表
		$a = $db->createCommand("select * from city ")->queryAll();
		foreach ($a as $key => $value) {
			 $arr[$value['city']] = $db->createCommand("select count(*) from user inner join user_info on user.user_id = user_info.user_id inner join city on user_info.sheng = city.id where addtime = $time and user_info.sheng = ".$value['id'])->queryOne();;
		}
		var_dump($arr);die;
		var_dump($data);
	}
}