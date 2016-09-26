<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Alert;
    use yii\filters\PageCache;
?>

<?php if($this->beginCache('cache_contactus')){?>
<link rel="stylesheet" href="/css/contact_us.css">

<section class="section1 contact_us_pic">
    <img src="/img/contact_us.png" alt="">
</section>
<?php $this->endCache();}?>
<section class="section2 container_contact_us_map clearfix">
    <div class="row clearfix contact_us_map">
        <div class="col-lg-6">
            <p><span>Company Name：</span><?php echo $company['companyname']?></p>
            <p><span>Email：</span><a href="mailto:<?php echo $company['companyemail']?>"><?php echo $company['companyemail']?></a></p>
            <p><span>TEL：</span><?php echo $company['companytel']?></p>
            <p><span>Fax：</span><?php echo $company['companyfax']?></p>
            <p><span>Mobile：</span><?php echo $company['companymobile']?></p>
            <p><span>Website：</span><a href="<?php echo $company['website']?>"><?php echo $company['website']?></a></p>
            <p><span>Address:  </span><?php echo $company['companyaddress']?></p>
            <p><span>Manufacture Address：</span><?php echo $company['manufactureaddress']?></p>
        </div>
        <div class="col-lg-6">
            <div class="map_pic">
                <img src="<?php echo $company['cover']?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="container-fluid clearfix section3 ">
     
    <div class="row contact_us_form">
        <div class="col-lg-12">
            <h1>Leaving  Message</h1>
            <div>
                 <?php 
                    if( Yii::$app->getSession()->hasFlash('success') ) {
                        echo Html::script('alert("Submitted successfully!");', ['defer' => true]);
                    }
                    if( Yii::$app->getSession()->hasFlash('error') ) {
                    echo Html::script('alert("Submit fails, check the mailbox format and whether Missing!");', ['defer' => true]);
                     }
                    ?>
            </div>
            
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
                 <?php
                    if (Yii::$app->session->hasFlash('info')) {
                        echo Yii::$app->session->getFlash('info');
                    }
                ?>
                <input  class="contact_us_submit" type="submit" value="Submit">
            <?php ActiveForm::end();?>
        </div>
    </div>
</section>

<!-- Google Code for &#32852;&#31995;&#25105;&#20204;&#39029;&#38754;&#36716;&#21270; Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 874087272;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "4oVlCN7XlWoQ6IbmoAM";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/874087272/?label=4oVlCN7XlWoQ6IbmoAM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>





