<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class OfficialController extends Controller
{
	public function actionIndex()
	{
		$content=Yii::$app->request()->get('content');
		$callback=Yii::$app->request()->get('callback');
		$db=Yii::$app->db;
		$res=$db->createCommand("insert into official value ('','$content')")->execute();
		if ($res) {
			$msg['error']=1;
			$msg['content']="添加成功";
		}else{
			$msg['error']=0;
			$msg['content']="添加失败";
		}
		echo $callback."(".json_encode($msg).")";
	}
	
	public function actionShow()
	{
		$callback=Yii::$app->request()->get('callback');
		$db=Yii::$app->db;
		$data=$db->createCommand("select * from official")->queryAll();
		$msg['data']=$data;
		$msg['error']=1;
		echo $callback."(".json_encode($msg).")";
	}

}









 ?>