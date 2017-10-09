<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/*
 *官方通告管理
 */
class OfficialController extends Controller
{
	//发布通告接口
	public function actionIndex()
	{

		$content=Yii::$app->request->get('content');
		$callback=Yii::$app->request->get('callback');
		$time=time();
		$db=Yii::$app->db;
		$res=$db->createCommand("insert into official values ('','$content',$time)")->execute();
		if ($res) {
			$msg['error']=1;
			$msg['content']="添加成功";
		}else{
			$msg['error']=0;
			$msg['content']="添加失败";
		}
		echo $callback."(".json_encode($msg).")";
	}
	//通告列表接口
	public function actionShow()
	{
		$arr = Yii::$app->request->get();
		$db = Yii::$app->db;
		$name = Yii::$app->request->get('name') ? Yii::$app->request->get('name') : '';//搜索的条件
		$page = Yii::$app->request->get('page') ? Yii::$app->request->get('page') : '1';//当前页
		$num  = 5;//每页显示条数
		$a    = $db->createCommand("select count(id) from official where content like '%$name%'")->queryAll();
		$sum  = $a[0]['count(id)'];//总条数
		$sum_page = ceil($sum/$num);//最大页
		$limit =($page-1)*$num;//偏移量
		$msg['prev'] = $page-1<0 ? 1 :$page-1;//上一页
		$msg['next'] = $page+1 > $sum_page ? $sum_page : $page+1;//下一页
		$msg['page'] = $page;
		$msg['end'] = $sum_page;//总页数
		if (Yii::$app->request->get('id')) {
			$id=Yii::$app->request->get('id');
			$res = $db->createCommand("select * from official where id=$id and content like '%$name%' limit $limit,$num ")->queryAll();
		}else
		{
			$res = $db->createCommand("select * from official where content like '%$name%' limit $limit,$num ")->queryAll();
		}
		if ($res) {
			$msg['data']=$res;
			$msg['error']=1;
		}else{
			$msg['error']=0;
		}
		return $arr['callback'].'('.json_encode($msg).')';
	}

}









 ?>