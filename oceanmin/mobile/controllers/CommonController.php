<?php

namespace app\mobile\controllers;

use yii\web\Controller;

use Yii;

class CommonController extends Controller
{
	public function init()
	{
		if (!empty($_COOKIE['lang'])) {
			$lang = $_COOKIE['lang'];
		}else{
			$lang = 'en';
		}
		
		if ($lang=='cn') {
			Yii::$app->language = 'cn';
		}else{
			Yii::$app->language = 'en';
		}
		
	}

}