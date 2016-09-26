<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use app\models\Category;
use app\models\Product;
use Yii;
use app\controllers\CommonController;

class SupportController extends Controller
{
	public function actionIndex()
	{
		$this->layout = 'layout1';
		$cate = Category::find()->where(['parentid'=>'0'])->asArray()->all();
		$products = Category::find()->where(['parentid'=>'0'])->asArray()->all();
		for ($i=0; $i < count($products); $i++) { 
			$product = Product::find()->where(['cateid'=>$cate[$i]['cateid']])->asArray()->all();
			$products[$i]['product'] = $product;
		}
		return $this->render('pdf_download',['cate'=>$cate,'products'=>$products]);
	}

	public function actionFaq()
	{
		$this->layout = 'layout1';
		return $this->render('faq');
	}




}