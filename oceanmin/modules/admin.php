<?php

namespace app\modules;

/**
 * modules module definition class
 */
class admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if ($_SERVER['HTTP_HOST']=='www.ercolego.com'||$_SERVER['HTTP_HOST']=='ercolego.com') {
            
        }else{
            return $this->redirect('http://www.ercolego.com/');
        }
        // custom initialization code goes here
    }
}
