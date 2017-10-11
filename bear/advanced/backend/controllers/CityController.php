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

		$aa=Yii::$app->request->get('a');
		$bb=Yii::$app->request->get('b');
		$time=strtotime($aa);
		$etime=strtotime($bb);


		$db = Yii::$app->db;
		//接值
		//$time=Yii::$app->request->get('time');
		//查询省份表
		$a = $db->createCommand("select * from city ")->queryAll();
		if($etime&&$time)
		{
			$b = $db->createCommand("select count(*) as num,sheng from  user_info inner join user on user_info.user_id = user.user_id where `user`.addtime >= $time and `user`.addtime <= $etime GROUP BY sheng")->queryAll();
		}else if($time)
		{
			$b = $db->createCommand("select count(*) as num,sheng from  user_info inner join user on user_info.user_id = user.user_id where `user`.addtime >= $time GROUP BY sheng")->queryAll();
		}else if($etime)
		{
			$b = $db->createCommand("select count(*) as num,sheng from  user_info inner join user on user_info.user_id = user.user_id where `user`.addtime <= $etime GROUP BY sheng")->queryAll();
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

		}
		echo $callback."(".json_encode($data).")";
	}
	public function actionShow()
	{
		$callback=Yii::$app->request->get('callback');
		$city=Yii::$app->request->get('city',1);
		$one=strtotime('2017-1-01');
		$two=strtotime('2017-2-01');
		$three=strtotime('2017-3-01');
		$four=strtotime('2017-4-01');
		$five=strtotime('2017-5-01');
		$six=strtotime('2017-6-01');
		$seven=strtotime('2017-7-01');
		$eight=strtotime('2017-8-01');
		$nine=strtotime('2017-9-01');
		$ten=strtotime('2017-10-01');
		$eleven=strtotime('2017-11-01');
		$twelve=strtotime('2017-12-01');

		$db = Yii::$app->db;
		

		//查询省份表
		$a = $db->createCommand("select * from city ")->queryAll();
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $one and `user`.addtime <=$two")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $two and `user`.addtime <=$three")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $three and `user`.addtime <=$four")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $four and `user`.addtime <=$five")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $five and `user`.addtime <=$six")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $six and `user`.addtime <=$seven")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $seven and `user`.addtime <=$eight")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $eight and `user`.addtime <=$nine")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $nine and `user`.addtime <=$ten")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $ten and `user`.addtime <=$eleven")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $eleven and `user`.addtime <=$twelve")->queryAll());
		$data['num'][] = count($db->createCommand("select * from  user_info inner join user on user_info.user_id = user.user_id where user_info.sheng=$city and `user`.addtime >= $twelve")->queryAll());
		
		
		
		$data['city']=$a;

		echo $callback."(".json_encode($data).")";
		

	}
}
