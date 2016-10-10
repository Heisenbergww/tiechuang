<?php

namespace app\modules\controllers;

use yii\web\Controller;
use Yii;

class CommonController extends Controller
{
    public function init()
    {
        if (Yii::$app->session['admin']['isLogin'] != 1) {
            return $this->redirect(['/admin/public/login']);
        }
        if ($_SERVER['HTTP_HOST']=='www.ercolego.com'||$_SERVER['HTTP_HOST']=='ercolego.com') {

        }else{
        	return $this->redirect('http://www.ercolego.com/');
        }
    }
}
