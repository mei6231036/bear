<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class GiftController extends Controller
{
	//添加礼物
	public function add()
	{
		$money=$_GET['money'];
		$name=$_GET['name'];
		$callback=$_GET['callback'];
		$db=Yii::$app->db;
		$res=$db->createCommand()->insert('gift',['name'=>$name,'money'=>$money])->execute();
		if ($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}
	//展示礼物
	public function show()
	{
		$callback=$_GET['callback'];
		$res=$db->createCommand("select * from gift")->queryAll();
		$msg['gift']=$res;
		echo $callback."(".json_encode($msg).")";
	}
}







 ?>