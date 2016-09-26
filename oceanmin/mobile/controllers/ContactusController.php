<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use app\models\Message;
use app\models\Company;
use app\controllers\CommonController;

class ContactusController extends Controller
{
	public function actionIndex()
	{
		$this->layout = 'layout1';
		$model = new Message();
		$company = Company::find()->asArray()->one() ;
		if (Yii::$app->request->isPost) {
			$post = Yii::$app->request->post();
			$post['Message']['createtime'] = time();
			if ($model->add($post)) {
				Yii::$app->session->setFlash('success','添加成功');
				return $this->goback(['/mobile/contactus/index']);
			}else{
				Yii::$app->session->setFlash('error','添加失败');
			}
		}
		return $this->render('index',['company'=>$company,'model'=>$model]);
	}


}