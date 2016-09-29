<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use app\models\Company;
use Yii;
use app\controllers\CommonController;

class ProductController extends CommonController
{
	public function behaviors()
	{
		return [
		[
		'class'=>'yii\filters\HttpCache',
		'only' => ['index'],
		'lastModified'=>function(){
			$count1 = (new \yii\db\Query())->from('ocean_product')->count();
			// 产品数量和轮播图数量发生变化这不会用缓存
			$count = $count1 + 1;
			return $count;
		}
		]
		];
	}
	
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
		$company = Company::find()->asArray()->one();
		//var_dump($company);
		return $this->render('index',['menu'=>$menu,'products'=>$products,'company'=>$company]);
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