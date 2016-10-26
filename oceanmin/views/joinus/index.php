<link rel="stylesheet" href="/css/join_us.css">
<script src="/js/jquery-3.1.0.min.js"></script>
<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\filters\PageCache;
?>
<section class="section1 contact_us_pic">
    <img src="/img/join_us.jpg" alt="">
    <h1>J O I N  U S</h1>
    <h2>Welcome to become one of us!</h2>
</section> 
<?php
if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Html::script('alert("Submitted successfully!");', ['defer' => true]);
}
if( Yii::$app->getSession()->hasFlash('error') ) {
    echo Html::script('alert("Submit fails, check the mailbox format and whether Missing!");', ['defer' => true]);
}
?>
<?php
$form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => '<div class="span12 field-box">{label}{input}</div>{error}',
    ],
    'options' => [
        'class' => 'new_user_form inline-input',
        'enctype' => 'multipart/form-data'
    ],
]);?>
<section class="clearfix section2 " >
    <h1>We Are Looking For Distributors Around The World</h1>
    <div class="join_us">
        <div class=" container-fluid clearfix">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="join_us_content_child">
                        <h2>Requirement:</h2>
                        <p>1. There is no limit to the area</p>
                        <p>2. The minimum order quantity is one container</p>
                        <p>3. At least 1 lawful and registered local shop or sale place managed by yourself，or  you have your own sales channel.</p>
                        <p>4. Have some knowledge and strong interest in sanitary ware</p>
                    </div>                      
                </div>
                <div class="col-lg-6">
                    <div class="join_us_form_child">
                        <h2>Leaving  Message</h2>
                        <p>Name</p>
                        <input name="Join[name]" type="text" value="<?= Html::encode($model->name) ?>" placeholder="" class="input_left">
                        <p>Tel</p>
                        <input name="Join[tel]"  type="text" value="<?= Html::encode($model->tel) ?>" placeholder="">
                        <p>Email</p>
                        <input name="Join[email]"  type="email" value="<?= Html::encode($model->email) ?>" placeholder="">
                        <p>Country</p>
                        <input name="Join[country]"  type="text" value="<?= Html::encode($model->country) ?>" placeholder="">
                        <p>Products of interest</p>
                        <select name="Join[interest]">
                            <option value="<?= Html::encode($model->interest='Basin') ?>">Basin</option>
                            <option value="<?= Html::encode($model->interest='Toilet') ?>">Toilet</option>
                            <option value="<?= Html::encode($model->interest='Shower door') ?>">Shower door</option>
                        </select>
                        <p>Message</p>
                        <textarea name="Join[comment]" type="text" placeholder="" class="message_s"></textarea>
                        <input  class="contact_us_submit" type="submit" value="Submit">
                    </div>                                
                </div>
            </div>
        </div>
    </div>

</section>
 <?php ActiveForm::end();?>








