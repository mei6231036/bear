<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class GiftController extends Controller
{
	//添加礼物
	public function actionAdd()
	{
		$money=$_GET['money'];
		$name=$_GET['name'];
		$callback=$_GET['callback'];
		$db=Yii::$app->db;
		$res=$db->createCommand()->insert('gift',['name'=>$name,'money'=>$money])->execute();
		if($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}
	//展示礼物
	public function actionShow()
	{
		$callback=$_GET['callback'];
		$db=Yii::$app->db;
		if (isset($_GET['id'])) {
			$id=$_GET['id'];
			$res=$db->createCommand("select * from gift where id=$id")->queryOne();
		}else
		{
			$res=$db->createCommand("select * from gift")->queryAll();
		}
		if($res){
			$msg['data']=$res;
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}

	public function actionDel()
	{
		$callback=$_GET['callback'];
		$id=$_GET['id'];
		$db=Yii::$app->db;
		$res=$db->createCommand("delete from gift where id=$id")->execute();
		if ($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";

	}

	public function actionUpdate()
	{
		$callback=$_GET['callback'];
		$id=$_GET['id'];
		$name=$_GET['name'];
		$money=$_GET['money'];
		$db=Yii::$app->db;
		$res=$db->createCommand("update gift set name='$name',money='$money' where id=$id")->execute();
		if ($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}

}







 ?>