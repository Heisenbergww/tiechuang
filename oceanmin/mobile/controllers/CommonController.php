<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use app\models\Social;
use Yii;

class CommonController extends Controller
{
	public function init()
	{
		$footer = Social::find()->where('id = :id', [':id' => '1'])->one();
		$this->view->params['footer'] = $footer;
	}

}