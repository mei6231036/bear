<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;

class CityController extends Controller
{
	//查询某一天各个省注册人数
	public function actionSel()
	{
		$callback=Yii::$app->request->get('callback');
		$month=Yii::$app->request->get('month');
		$time=strtotime('2017-'.$month.'-24');
		$db = Yii::$app->db;
		//接值
		//$time=Yii::$app->request->get('time');
		//查询省份表
		$a = $db->createCommand("select * from city ")->queryAll();
		if($time)
		{
			$b = $db->createCommand("select count(*) as num,sheng from  user_info inner join user on user_info.user_id = user.user_id where `user`.addtime >= $time GROUP BY sheng")->queryAll();
		}else
		{
			$b = $db->createCommand("select count(*) as num,sheng from  user_info inner join user on user_info.user_id = user.user_id GROUP BY sheng")->queryAll();
		}
		foreach ($a as $key => &$value) {
			$value['num']=0;
			foreach ($b as $k => $v) {
			if($v['sheng']==$value['id'])
			{
				$value['num']=intval($v['num']);
				
			}
		}
		}
		
		
		foreach ($a as $key => $val) {
			$data['city'][]=$val['city'];
			$data['num'][]=$val['num'];
			if ($key==6) {
					break;
				}

		}
		echo $callback."(".json_encode($data).")";
	}
	public function actionLine()
	{
		$callback=Yii::$app->request->get('callback');
		$db = Yii::$app->db;

	}
}
