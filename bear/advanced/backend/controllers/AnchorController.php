<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class AnchorController extends Controller
{
	//展示所有的主播
	public function actionShow()
	{
		$callback=Yii::$app->request->get('callback');
		$db=Yii::$app->db;
		$res=$db->createCommand("select * from anchor where status=0")->queryAll();	
		$msg['error']=1;
		$msg['data']=$res;	
		echo $callback."(".json_encode($msg).")";
	}
	//修改主播状态
	public function actionUpdate()
	{
		$callback=Yii::$app->request->get('callback');
		$db=Yii::$app->db;
		$status=Yii::$app->request->get('status');
		$id=Yii::$app->request->get('anchor_id');
		$db=Yii::$app->db;
		$res=$db->createCommand()->update("update anchor set status='$status' where id=$id")->execute();
		if ($res) {
			$time=time();
			$a=$db->createCommand()->insert("insert into room value('','','$id','$time')")->execute();
			if ($a) {
				$msg['error']=1;
			}
		}else{
				$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}
}







 ?>