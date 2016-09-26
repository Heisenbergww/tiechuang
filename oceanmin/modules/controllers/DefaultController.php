<?php

namespace app\modules\controllers;

use yii\web\Controller;
use app\modules\controllers\CommonController;

class DefaultController extends CommonController
{
    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => 'yii\filters\PageCache',
    //             'duration' => 3600
    //         ]
    //     ];
    // }

    public function actionIndex()
    {
        $this->layout = "layout1";
        return $this->render('index');
    }


}
