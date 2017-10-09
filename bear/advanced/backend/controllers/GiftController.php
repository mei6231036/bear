<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/*
 *礼物管理接口
 */
class GiftController extends Controller
{
	//添加礼物接口
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
	//礼物列表接口
	public function actionShow()
	{
		$arr = Yii::$app->request->get();
		$db = Yii::$app->db;
		$name = Yii::$app->request->get('name') ? Yii::$app->request->get('name') : '';//搜索的条件
		$page = Yii::$app->request->get('page') ? Yii::$app->request->get('page') : '1';//当前页
		$num  = 5;//每页显示条数
		$a    = $db->createCommand("select count(id) from gift where name like '%$name%' ")->queryAll();
		$sum  = $a[0]['count(id)'];//总条数
		$sum_page = ceil($sum/5);//最大页
		$limit =($page-1)*$num;//偏移量
		$msg['prev'] = $page-1<0 ? 1 :$page-1;//上一页
		$msg['next'] = $page+1 > $sum_page ? $sum_page : $page+1;//下一页
		$msg['page'] = $page;
		$msg['end'] = $sum_page;//总页数
		if (Yii::$app->request->get('id')) {
			$id=Yii::$app->request->get('id');
			$res = $db->createCommand("select * from gift where id=$id and name like '%$name%' limit $limit,$num ")->queryAll();
		}else
		{
			$res = $db->createCommand("select * from gift where name like '%$name%' limit $limit,$num ")->queryAll();
		}
		if ($res) {
			$msg['data']=$res;
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		return $arr['callback'].'('.json_encode($msg).')';
	}
	//礼物删除接口
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
	//礼物修改接口
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