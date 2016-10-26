<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use Yii;
use app\mobile\controllers\CommonController;

class JoinusController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = 'layout1';
        return $this->render('index');
    }
}