<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use \kucha\ueditor\UEditor;
?>
<?php $this->beginPage() ?>
<?php $this->beginBody() ?>

<meta name="csrf-token" content="<?= Yii::$app->request->csrfToken ?>"/>
<style>.span8 div{ display:inline; } .help-block-error { color:red; display:inline; }</style>
<link rel="stylesheet" href="/assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
<!-- main container -->
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>前端图片</h3></div>
            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span12 with-sidebar">
                    <div class="container">
                        <?php if( Yii::$app->getSession()->hasFlash('success') ) {
                            echo Alert::widget([
                                'options' => [
                                    'class' => 'alert-success', //这里是提示框的class
                                ],
                                'body' => Yii::$app->getSession()->getFlash('success'), //消息体
                            ]);
                        }
                        if( Yii::$app->getSession()->hasFlash('error') ) {
                            echo Alert::widget([
                                'options' => [
                                    'class' => 'alert-error',
                                ],
                                'body' => Yii::$app->getSession()->getFlash('error'),
                            ]);
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

                        <div class="form-group field-front-logo required" style="margin-bottom: 20px">
                            <div class="span12 field-box">
                                <label class="control-label" for="front-logo">网站logo</label>
                                <input type="hidden" name="Front[logo]" value="">
                                <input type="file" id="front-logo" class="span9" name="Front[logo]" value=""></div>
                            <img width="150" src="/<?php echo $model['logo'];?>">
                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-front-faq required" style="margin-bottom: 20px">
                            <div class="span12 field-box">
                                <label class="control-label" for="font-faq">faq页图片</label>
                                <input type="hidden" name="front[faqimg]" value="">
                                <input type="file" id="font-faq" class="span9" name="Front[faqimg]" value=""></div>
                            <img width="150" src="/<?php echo $model['faqimg'];?>">
                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-front-productimg required" style="margin-bottom: 20px">
                            <div class="span12 field-box">
                                <label class="control-label" for="product-img">product页图片banner</label>
                                <input type="hidden" name="front[product_img]" value="">
                                <input type="file" id="product-img" class="span9" name="Front[product_img]" value=""></div>
                            <img width="150" src="/<?php echo $model['product_img'];?>">
                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-front-company required" style="margin-bottom: 20px">
                                <label class="control-label" for="front-company">company_info页图片banner</label>
                                <input type="hidden" name="front[company_img]" value="">
                                <input type="file" id="front-company" class="span9" name="Front[company_img]" value=""></div>
                            <img width="150" src="/<?php echo $model['company_img'];?>">
                            <p class="help-block help-block-error"></p>
                        </div>

                    <div class="form-group field-front-contact required" style="margin-bottom: 20px">
                        <div class="span12 field-box">
                            <label class="control-label" for="front-contact">contact_us页图片banner</label>
                            <input type="hidden" name="front[contact_img]" value="">
                            <input type="file" id="front-contact" class="span9" name="Front[contact_img]" value=""></div>
                        <img width="150" src="/<?php echo $model['contact_img'];?>">
                        <p class="help-block help-block-error"></p>
                    </div>

                        <div class="form-group field-front-join required" style="margin-bottom: 20px">
                            <div class="span12 field-box">
                                <label class="control-label" for="front-join">join_us页图片banner</label>
                                <input type="hidden" name="front[join_img]" value="">
                                <input type="file" id="front-join" class="span9" name="Front[join_img]" value=""></div>
                            <img width="150" src="/<?php echo $model['join_img'];?>">
                            <p class="help-block help-block-error"></p>
                        </div>

                       

                        <hr>
                        <div class="span11 field-box actions">
                            <?php echo Html::submitButton('提交', ['class' => 'btn-glow primary']); ?>
                            <span>OR</span>
                            <?php echo Html::resetButton('取消', ['class' => 'reset']); ?>
                        </div>
                        <?php ActiveForm::end();?>
                    </div>
                </div>
                <!-- side right column -->
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
<?php $this->endPage() ?>
<!-- end main container -->	
