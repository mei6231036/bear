<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class AnchorController extends Controller
{
	//展示所有的主播
	public function show()
	{
		$callback=$_GET['callback'];
		$db=Yii::$app->db;
		$res=$db->createCommand("select * from anchor where status=0")->queryAll();		
		echo $callback."(".json_encode($res).")";
	}
	//修改主播状态
	public function update()
	{
		$callback=$_GET['callback'];
		$db=Yii::$app->db;
		$status=$_GET['status'];
		$id=$_GET['id'];
		$db=Yii::$app->db;
		$res=$db->createCommand()->update("update anchor set status='$status' where id=$id")->execute();
		if ($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}
}







 ?>