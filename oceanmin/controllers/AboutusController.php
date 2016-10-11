<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Article;
use Yii;
use app\controllers\CommonController;

class AboutusController extends CommonController
{
	public function behaviors()
	{
		return [
		[
		'class'=>'yii\filters\HttpCache',
		'lastModified'=>function(){
			$count1 = (new \yii\db\Query())->from('ocean_article')->count();
			// 文章数量数量发生变化这不会用缓存
			$count = $count1 + 1;
			return $count;
		}
		]
		];
	}

	public function actionIndex()
	{
		$this->layout = 'layout1';
		return $this->render('index');
	}

	public function actionNews()
	{
		$this->layout = 'layout1';
		$model = Article::find();
		$count = $model->where(['isshow'=>'1'])->count();
		$pager = new Pagination(['totalCount' => $count, 'pageSize' => '10']);
		$articles = $model->orderby('createtime desc')->offset($pager->offset)->limit($pager->limit)->all();
		return $this->render('news',['articles'=>$articles, 'pager' => $pager]);
	}

	public function actionNewdetail()
	{
		$this->layout = 'layout1';
		$articleid = Yii::$app->request->get('articleid');
		$model = Article::find()->where(['articleid'=>$articleid])->asArray()->one();
		return $this->render('news_pages',['model'=>$model]);
	}

	public function actionBranch()
	{
		$this->layout = 'layout1';
		return $this->render('our_branch');
	}
	
	public function actionTechnology()
	{
		$this->layout = 'layout1';
		return $this->render('special_technology');
	}



}