<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Alert;
    use yii\filters\PageCache;
?>
<link rel="stylesheet" href="/mobile/css/contact_us.css">

<!--主体部分-------------------------------------------------------------->
<section class="section"></section>
<section class="section1 clearfix container">
    <div class="company_contact_info">
        <p><span>Company Name:</span><?php echo $company['companyname']?></p>
        <p><span>Address:</span><?php echo $company['companyaddress']?></p>
        <p><span>TEL:</span><?php echo $company['companytel']?></p>
        <p><span>Email:</span><a href="mailto:<?php echo $company['companyemail']?>"><?php echo $company['companyemail']?></a></p>
    </div>
</section>
<section class="section2 clearfix ">
    <img src="/<?php echo $company['cover']?>" alt="">
</section>
<section class="section3 clearfix container">
 <?php 
if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Html::script('alert("Submitted successfully!");', ['defer' => true]);
}
if( Yii::$app->getSession()->hasFlash('error') ) {
echo Html::script('alert("Submit fails, check the mailbox format and whether Missing!");', ['defer' => true]);
 }
?>
    <div class="leave_message">
        <h1>Leaving  Message</h1>
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
            <p>Name</p><input name="Message[name]" type="text" value="<?= Html::encode($model->name) ?>">
            <p>Email</p><input name="Message[email]"  type="text" value="<?= Html::encode($model->email) ?>">
            <p>TEL</p><input name="Message[phone]"  type="text" value="<?= Html::encode($model->phone) ?>">
            <p>Message</p><textarea name="Message[detail]" type="text" ><?= Html::encode($model->detail) ?></textarea>
            <input  class="contact_us_submit" type="submit" value="Submit">
        <?php ActiveForm::end();?>
    </div>
</section>

<!--转化代码-->
<!-- Google Code for Ercole &#32852;&#31995;&#25105;&#20204;&#36716;&#21270; Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 871546367;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "X8VVCOGj3GoQ__vKnwM";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/871546367/?label=X8VVCOGj3GoQ__vKnwM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

