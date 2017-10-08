<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * 类型 的接口
 */
class TypeController extends Controller
{

	//查询全部类型
	public function actionSel()
	{
		$arr = Yii::$app->request->get();
		// var_dump($arr['callback']);die;
		$db = Yii::$app->db;
		// $sql = "select * from type where parent_id = 0";
		// $data =  $db->createCommand($sql)->queryAll();
		// foreach ($data as $key => $value) {
		// 	$sqll = "select * from type where parent_id = ".$value['id'];		
		// 	$data[$key]['child'] = $arr;
		// }
		$data=$db->createCommand('select * from type')->queryAll();
		return $arr['callback'].'('.json_encode($data).')';
		/*var_dump($data);die;
		echo json_encode($data);*/
	}
	//添加类型
	public function actionAdd()
	{
		$arr = Yii::$app->request->get();
		$db  = Yii::$app->db;
		//判断是子集还是父级
		$res=$db->createCommand()->insert('type',['typename'=>$arr['typename'],'parent_id'=>$arr['id']])->execute();
		/*$path_id = Yii::$app->db->getLastInsertId();
		$path = $arr['id'].'-'.$path_id;
		Yii::$app->db->createCommand()->update('type', ['path' => $path], 'id ='.$path_id)->execute();*/
		if($res)
		{
			$data['code'] = '200';
			$data['message'] = 'ok';
		}
		
		return $arr['callback'].'('.json_encode($data).')';
	}
	/*删除类型	
	 id  类型主键id
	*/
	public function actionDel()
	{
		$arr = Yii::$app->request->get();
		$db  = Yii::$app->db;
		//直接删除id
		$res=$db->createCommand("delete from type where id=".$arr['id'])->execute();
		if($res)
		{
			$data['code'] = '200';
			$data['message'] = 'type del is ok';
		}
		return $arr['callback'].'('.json_encode($data).')';
	}
	/*修改类型

	 id  	   类型主键id
	 typename  类型名称
	 parent_id 父级id*/
	public function actionUp()
	{
		$arr = Yii::$app->request->get();
		$db  = Yii::$app->db;
		$res=$db->createCommand()->update('type', ['typename'=>$arr['typename'],'parent_id'=>$arr['parent_id']], 'id ='.$arr['id'])->execute();
		if($res)
		{
			$data['code'] = '200';
			$data['message'] = 'type update is ok';
		}
		return $arr['callback'].'('.json_encode($data).')';
	}
}