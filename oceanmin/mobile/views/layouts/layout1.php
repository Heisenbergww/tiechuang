<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="Keywords" Content=""/>
    <meta name="description" Content=""/>
    <title>Waagee</title>
    <link rel="stylesheet" href="/mobile/css/main.css">
    <link rel="stylesheet" href="/mobile/css/font-awesome.min.css">
    <script src="/mobile/js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <!--头部---------------------------------------------------------->
    <header class="clearfix top_menu_fixed">
        <nav class="top_menu ">
            <i class="fa fa-bars fa-4x top_menu_bar" aria-hidden="true"></i>
            <div class="logo">
                <a href="">
                    <img src="/mobile/img/logo.png" alt="">
                </a>
            </div>
        </nav>
    </header>
    <a href="" name="top_tag"></a>

<?php echo $content;?>

    <!-- 底部 -->
    <section class="footer_menu clearfix">
        <a href="mailto:Waagee@beforeship.com"><p class="footer_menu_fa contact_us_fa">Contact Us</p></a>
        <p class="footer_menu_fa about_fa">About Us <span><img src="/mobile/img/add.png" alt=""></span></p>
        <ul class="footer_menu_child for_about">
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>">Company Information</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?>">Special Technology</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>">News</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>">Our Branch</a></li>
        </ul>
        <p class="footer_menu_fa support_fa">Support<span><img src="/mobile/img/add.png" alt=""></span></p>
        <ul class="footer_menu_child for_support">
            <li><a href="<?php echo yii\helpers\Url::to(['support/faq'])?>">FAQ</a></li>
        </ul>
    </section>

    <footer class="">
        <div class=" footer-info clearfix">
            <h3>FOLLOW US</h3>
            <div class="social">
                <div class="social_icon ">
                    <a target="_blank" href="<?php echo $this->params['footer']['facebook'];?>">
                        <img src="/mobile/img/fb_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="<?php echo $this->params['footer']['twitter'];?>">
                        <img src="/mobile/img/tw_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="<?php echo $this->params['footer']['linkedin'];?>">
                        <img src="/mobile/img/li_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="<?php echo $this->params['footer']['youtube'];?>">
                        <img src="/mobile/img/ytb_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="<?php echo $this->params['footer']['instagram'];?>">
                        <img src="/mobile/img/ins_.png" alt="">
                    </a>
                </div>
            </div>
            <hr>
            <p>BILL & FOX LIMITED</p>
        </div>
        <a href="#top_tag" class="to_top">
            <nav class="bottom_menu">
                <img src="/mobile/img/top_.png" alt="">
                <div class="">
                   <p>Back to top</p>
                </div>
            </nav>
        </a>
    </footer>

    <nav class="side_menu">
        <nav class="side_menu_content">
            <i class="fa fa-bars fa-4x side_menu_content_bar " aria-hidden="true"></i>
            <div>
                <p><a href="<?php echo yii\helpers\Url::to(['home/index'])?>">HOME</a></p>
                <p><a href="<?php echo yii\helpers\Url::to(['product/index'])?>">PRODUCT</a></p>
                <p class="side_support_fa">SUPPROT<span><img src="/mobile/img/add.png" alt=""></span></p>
                <ul class="side_menu_child side_for_support">
                    <li><a href="<?php echo yii\helpers\Url::to(['support/faq'])?>">FAQ</a></li>
                </ul>
                <p class="side_about_fa">ABOUT US<span><img src="/mobile/img/add.png" alt=""></span></p>
                <ul class="side_menu_child side_for_about">
                    <li><a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>">Company Information</a></li>
                    <li><a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?>">Special Technology</a></li>
                    <li><a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>">News</a></li>
                    <li><a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>">Our Branch</a></li>
                </ul>
                <p><a href="<?php echo yii\helpers\Url::to(['contactus/index'])?>">CONTACT US</a></p>
            </div>
        </nav>
    </nav>



<script src="/mobile/js/main.js"></script>



</body>
</html>