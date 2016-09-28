<?php 
use yii\filters\PageCache;
?>
<?php if($this->beginCache('cache_layout_header_qiantai')){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?= Yii::$app->request->csrfToken ?>"/>
    <meta name="Keywords" Content="ercolego"/>
    <meta name="description" Content="ercolego"/>
    <title>Ercolego</title>
    <link type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/normal.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/jquery-3.1.0.min.js"></script>
    <!--<script src="/js/jquery.lazyload.min.js"></script>-->
</head>
<body style="overflow-x:hidden">
    <header class="navbar_fa">
        <nav class="navbar container-fluid clearfix">
            <a href="" name="top_top">
            </a>
            <div class="logo fl">
                <a href="/" name="logo"><img src="/img/logo.png" alt="" ></a>
            </div>
            <div class="logo-right fr">
                <div class="language fr">
                    <p><?php 
                    if(!empty($_COOKIE['lang'])){
                        if($_COOKIE['lang']==='cn')
                        {echo 'CHINESE';}else{
                            echo 'ENGLISH';
                        }
                    }else{
                       echo 'ENGLISH'; 
                    }
                    ?> <span class="map"><img src="/img/language.png" alt=""></span><span class="Path"><img src="/img/Path%203.png" alt=""></span></p>
                </div>

                <div class="language_child">
                    <ul>
                        <li id="en">

                            <p>English <span class="map"><img src="img/language.png" alt=""></span>

                            </p>
                        </li>
                         <!--<li id="cn">-->
                            <!--<p>chinese<span class="map"><img src="img/language.png" alt=""></span>-->
                            <!--</p>-->
                        <!--</li>-->
                    </ul>
                </div>

                <div class="menu fr">
                    <ul class=" ">
                        <li class=""><a href="/" class=""><?php echo Yii::t('app', 'Home');?></a></li>
                        <!--<li class=""><a href="<?php echo yii\helpers\Url::to(['fashion/index'])?>" class=""><?php echo Yii::t('app', 'FASHION NOW');?></a></li>-->
                        <li><a href="<?php echo yii\helpers\Url::to(['product/index'])?>"><?php echo Yii::t('app', 'Product');?></a></li>
                        <li class="menu_support " id="menu_support"><a href="#"><?php echo Yii::t('app', 'Support');?><span class="home_trangle"></span></a></li>
                        <li class="menu_about_us" id="menu_about_us"><a href="#"><?php echo Yii::t('app', 'About Us');?><span class="home_trangle"></span></a></li>
                        <li><a href="<?php echo yii\helpers\Url::to(['contactus/index'])?>"><?php echo Yii::t('app', 'Contact Us');?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="second_menu to_support  menu_support">
            <ul>
                <a href="<?php echo yii\helpers\Url::to(['support/index'])?>"><li>Download Manual</li></a>
                <a href="<?php echo yii\helpers\Url::to(['support/faq'])?>"><li>FAQ</li></a>
            </ul>
        </div>
        <div class="second_menu to_about_us menu_about_us ">
            <ul>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>"><li>Company Information</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?>"><li>Special Technology</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>"><li>News</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>"><li>Our Branch</li></a>
            </ul>
        </div>
        
    </header>
<?php $this->endCache();}?>

<?php echo $content;?>
<?php if($this->beginCache('cache_layout_footer_qiantai')){?>
    <footer class="clearfix">
        <div class="container-fluid info-bottom clearfix footer">
            <div class="row">
                <div class="col-lg-12 ">
                    <h3><?php echo Yii::t('app', 'FOLLOW US');?></h3>
                    <div class="social">
                        <ul>
                            <li class="facebook"><a target="_blank" href="<?php echo $this->params['footer']['facebook'];?>"></a></li>
                            <li class="twitter"><a target="_blank" href="<?php echo $this->params['footer']['twitter'];?>"></a></li>
                            <li class="youtube"><a target="_blank" href="<?php echo $this->params['footer']['youtube'];?>"></a></li>
                            <li class="in"><a target="_blank" href="<?php echo $this->params['footer']['linkedin'];?>"></a></li>
                            <li class="instagram"><a target="_blank" href="<?php echo $this->params['footer']['instagram'];?>"></a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="footer_menu">
                        <ul>
                            <li class=""><a href="/" class=""><?php echo Yii::t('app', 'Home');?></a></li>
                            <!--<li class=""><a href="<?php echo yii\helpers\Url::to(['fashion/index'])?>" class=""><?php echo Yii::t('app', 'FASHION NOW');?></a></li>-->
                            <li><a href="<?php echo yii\helpers\Url::to(['product/index'])?>"><?php echo Yii::t('app', 'Product');?></a></li>
                            <li class=""><a href="<?php echo yii\helpers\Url::to(['support/index'])?>"><?php echo Yii::t('app', 'Support');?></a></li>
                            <li class=""><a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>"><?php echo Yii::t('app', 'About Us');?></a></li>
                            <li><a href="<?php echo yii\helpers\Url::to(['contactus/index'])?>"><?php echo Yii::t('app', 'Contact Us');?></a></li>
                        </ul>
                    </div>
                    <p><?php echo Yii::t('app', 'BILL & FOX LIMITED');?></p>
                </div>

            </div>
        </div>

        </footer>


    <!--回顶部-->
    <div class="go_top">
        <a href="#top_top">
            <div class="go_top_bt">
                <img src="/img/tp.png" alt="">
            </div>
        </a>
        <div class="qrcode">
            <img src="/img/Facebook_QRcode.png" alt="">
            <div class="qrcode_son">
                <img src="/img/Facebook_QRcode.png" alt="">
            </div>

        </div>
    </div>
    <script src="/js/main.js"></script>
    <!--&lt;!&ndash;分析&ndash;&gt;-->
    <!--<script>-->
        <!--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
                    <!--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
                <!--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
        <!--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');-->

        <!--ga('create', 'UA-84101707-1', 'auto');-->
        <!--ga('send', 'pageview');-->

    <!--</script>-->
    <!--&lt;!&ndash;再营销&ndash;&gt;-->
    <!--<script type="text/javascript">-->
        <!--/* <![CDATA[ */-->
        <!--var google_conversion_id = 874087272;-->
        <!--var google_custom_params = window.google_tag_params;-->
        <!--var google_remarketing_only = true;-->
        <!--/* ]]> */-->
    <!--</script>-->
    <!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">-->
    <!--</script>-->

    <!--&lt;!&ndash;客服&ndash;&gt;-->
    <!--<script src=http://float2006.tq.cn/floatcard?adminid=9754605&sort=0 ></script>-->
    <!--<noscript>-->
        <!--<div style="display:inline;">-->
            <!--<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/874087272/?value=0&amp;guid=ON&amp;script=0"/>-->
        <!--</div>-->
    <!--</noscript>-->

    </body>
    </html>
    <?php $this->endCache();}?>