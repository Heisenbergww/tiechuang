<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use Yii;
use app\controllers\CommonController;

class ProductController extends CommonController
{
	public function actionIndex()
	{
		$this->layout = 'layout1';
		$menu = Category::getMenu();
		$cateid = Yii::$app->request->get('cateid');
		if ($cateid) {
			$products = Product::find()->where(['cateid'=>$cateid])->asArray()->all();
		}else{
			$products = Product::find()->asArray()->all();
		}
		return $this->render('index',['menu'=>$menu,'products'=>$products]);
	}

	public function actionDetail()
	{
		$this->layout = "layout1";
		$productid = Yii::$app->request->get("productid");
		$product = Product::find()->where('productid = :id', [':id' => $productid])->asArray()->one();
		$product['pics'] = explode(",",$product['pics']);
		return $this->render("detail", ['product' => $product]);
	}


}