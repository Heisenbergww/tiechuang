<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use Yii;
use app\controllers\CommonController;

class ProductController extends Controller
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
		return $this->render('index',['cate'=>$cate,'products'=>$products]);
	}

	public function actionDetail()
	{
		$this->layout = "layout1";
		$productid = Yii::$app->request->get("productid");
		$product = Product::find()->where('productid = :id', [':id' => $productid])->asArray()->one();
		$product['pics'] = explode(",",$product['pics']);
		return $this->render("item", ['product' => $product]);
	}


}