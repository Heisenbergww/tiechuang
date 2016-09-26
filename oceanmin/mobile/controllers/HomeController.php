<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Home;
use app\controllers\CommonController;
use app\models\Product;

class HomeController extends Controller
{
	
    public function actionIndex()
    {
        $this->layout = 'layout1';
        $model = Home::find()->orderby('orderid asc')->all();
        $product = Product::find()->where(['is_tui'=>'1'])->asArray()->limit(4)->all();
        return $this->render('index',['model'=>$model,'product'=>$product]);
    }

    
}