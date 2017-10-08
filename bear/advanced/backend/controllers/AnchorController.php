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

		$page = Yii::$app->request->get('page') ? Yii::$app->request->get('page') : '1';//当前页
		$num  = 5;//每页显示条数
		$a    = $db->createCommand('select count(id) from anchor where status=0')->queryAll();
		$sum  = $a[0]['count(id)'];//总条数
		$sum_page = ceil($sum/$num);//最大页
		$limit =($page-1)*$num;//偏移量
		$data['arr'] = $db->createCommand("select * from anchor where status=0 limit $limit,$num ")->queryAll();
		$data['prev'] = $page-1<0 ? 1 :$page-1;//上一页
		$data['next'] = $page+1 > $sum_page ? $sum_page : $page+1;//下一页
		$data['page'] = $page;
		$data['end'] = $sum_page;//总页数
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