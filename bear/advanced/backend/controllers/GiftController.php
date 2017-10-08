   <?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class GiftController extends Controller
{
	//添加礼物
	public function actionAdd()
	{
		$money=Yii::$app->request->get('money');
		$name=Yii::$app->request->get('name');
		$callback=Yii::$app->request->get('callback');
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
	public function actionShow()
	{
		$callback=Yii::$app->request->get('callback');
		$db=Yii::$app->db;
		if (isset(Yii::$app->request->get('id'))) {
			$id=Yii::$app->request->get('id');
			$res=$db->createCommand("select * from gift where id=$id")->queryOne();
		}else
		{
			$res=$db->createCommand("select * from gift")->queryAll();
		}
		if ($res) {
			$msg['data']=$res;
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}

	public function actionDel()
	{
		$callback=Yii::$app->request->get('callback');
		$id=Yii::$app->request->get('id');
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
		$callback=Yii::$app->request->get('callback');
		$id=Yii::$app->request->get('id');
		$name=Yii::$app->request->get('name');
		$money=Yii::$app->request->get('money');
		$db=Yii::$app->db;
		$res=$db->createCommand()->update("update gift set name='$name',money='$money' where id=$id")->execute();
		if ($res) {
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}

}







 ?>