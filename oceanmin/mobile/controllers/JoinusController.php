<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use Yii;
use app\models\Join;
use app\mobile\controllers\CommonController;

class JoinusController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = 'layout1';
        $model = new Join();
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $post['Join']['createtime'] = time();
            if ($model->add($post)) {
                Yii::$app->session->setFlash('success', '添加成功');
                return $this->goBack(['/mobile/joinus/index']);
            } else {
                Yii::$app->session->setFlash('error', '添加失败');
            }
        }
        return $this->render('index', ['model' => $model]);
    }
}