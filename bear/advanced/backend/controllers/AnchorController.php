<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class AnchorController extends Controller
{
	//展示所有的主播
	public function actionShow()
	{
		$arr = Yii::$app->request->get();
		$db = Yii::$app->db;
		$name = Yii::$app->request->get('name') ? Yii::$app->request->get('name') : '';//搜索的条件
		$page = Yii::$app->request->get('page') ? Yii::$app->request->get('page') : '1';//当前页
		$num  = 5;//每页显示条数
		$a    = $db->createCommand("select count(anchor_id) from anchor where status=0 and name like '%$name%'")->queryAll();
		$sum  = $a[0]['count(anchor_id)'];//总条数
		$sum_page = ceil($sum/$num);//最大页
		$limit =($page-1)*$num;//偏移量
		$data['arr'] = $db->createCommand("select * from anchor where status=0 and name like '%$name%' limit $limit,$num ")->queryAll();
		$data['prev'] = $page-1<0 ? 1 :$page-1;//上一页
		$data['next'] = $page+1 > $sum_page ? $sum_page : $page+1;//下一页
		$data['page'] = $page;
		$data['end'] = $sum_page;//总页数
		return $arr['callback'].'('.json_encode($data).')';

	}
	//修改 首先查询单条
	public function actionUpone()
	{
		$arr = Yii::$app->request->get();
		$db  = Yii::$app->db;
		$data['arr']= $db->createCommand("select * from anchor where id = {$arr['id']}")->queryOne();
		return $arr['callback'].'('.json_encode($data).')';
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
			$anchor=$db->createCommand("select * from anchor where anchor_id=$id")->queryOne();
			$user_id=$anchor['user_id'];
			if ($status==1) {
				$content="您的主播资料审核已通过";
			}else{
				$content="您的主播资料因为资料不足审核未通过";
			}
			$s=$db->createCommand("insert into system value('','$content','$user_id','$time')")->execute();
			$a=$db->createCommand()->insert("insert into room value('','','$id','$time')")->execute();
			if ($a && $s) {
				$msg['error']=1;
			}
		}else{
				$msg['error']=0;
		}
		echo $callback."(".json_encode($msg).")";
	}
}







 ?>