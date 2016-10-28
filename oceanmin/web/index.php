<?php
if ($_SERVER['HTTP_HOST']=='www.waagee.com'||$_SERVER['HTTP_HOST']=='waagee.com'||$_SERVER['HTTP_HOST']=='web.waagee.com'||$_SERVER['HTTP_HOST']=='waagee.com'||$_SERVER['HTTP_HOST']=='192.168.199.60'||$_SERVER['HTTP_HOST']=='waa.com') {

}else{
    echo "????????????????";
    exit();
}
// comment out the following two lines when deployed to production 线上模式:YII_DEBUG设置为false  注释YII_ENV
defined('YII_DEBUG') or define('YII_DEBUG',false);
//defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
