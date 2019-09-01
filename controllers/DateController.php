<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Add;

/**
* 
*/
class DateController extends Controller
{
	
	public function actionIndex()
	{
		return $this->render("index");
	}
	public function actionAdd()
	{
		
        $data=Yii::$app->request->post(); 
		$connection = \Yii::$app->db;
        $res=$connection->createCommand()->insert('add', [
		    'name' =>$data['name'],
		    'pwd' => $data['pwd'],
		    'user' => $data['user'],
		    'radio' => $data['xb'],
		    'city' => $data['city'],
		    'tel' => $data['tel'],
		    'excel' => $data['excel'],
		])->execute();
		if($res){
 			echo "注册成功";
		}else{
			echo "注册失败";
		}
	}
}
?>