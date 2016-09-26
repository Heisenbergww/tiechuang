<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="Keywords" Content="gtmbike,GTMBike,gtm,GTM,bike,bikes,bicycles,mountain bikes,road bikes,fold bikes"/>
    <meta name="description" Content="GTMBike is a premier brand of fold bikes, road bikes, mountain bikes."/>
    <title>GTM Bike</title>
    <title>home</title>
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
        <p class="footer_menu_fa about_fa">About Us <span><img src="/mobile/img/add.png" alt=""></span></p>
        <ul class="footer_menu_child for_about">
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>">Company Information</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?>">Special Technology</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>">News</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>">Our Branch</a></li>
        </ul>
        <p class="footer_menu_fa support_fa">Support<span><img src="/mobile/img/add.png" alt=""></span></p>
        <ul class="footer_menu_child for_support">
            <li><a href="<?php echo yii\helpers\Url::to(['support/index'])?>">Download Manual</a></li>
            <li><a href="<?php echo yii\helpers\Url::to(['support/faq'])?>">FAQ</a></li>
        </ul>
    </section>

    <footer class="">
        <div class=" footer-info clearfix">
            <h3>FOLLOW US</h3>
            <div class="social">
                <div class="social_icon ">
                    <a target="_blank" href="https://www.facebook.com/GTM.Bike/">
                        <img src="/mobile/img/fb_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="https://twitter.com/BikeGTM ">
                        <img src="/mobile/img/tw_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="https://cn.linkedin.com/in/gtmbike">
                        <img src="/mobile/img/li_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="https://www.youtube.com/channel/UCizTI6EIilR7kh0_ipxZmmA">
                        <img src="/mobile/img/ytb_.png" alt="">
                    </a>
                </div>
                <div class="social_icon ">
                    <a target="_blank" href="http://www.instagram.com/gtmbike/">
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
                <p><a href="<?php echo yii\helpers\Url::to(['fashion/index'])?>">FASHION NOW</a></p>
                <p><a href="<?php echo yii\helpers\Url::to(['product/index'])?>">PRODUCT</a></p>
                <p class="side_support_fa">SUPPROT<span><img src="/mobile/img/add.png" alt=""></span></p>
                <ul class="side_menu_child side_for_support">
                    <li><a href="<?php echo yii\helpers\Url::to(['support/index'])?>">Download Manual</a></li>
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

    <!--分析-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84101707-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!--再营销-->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 874087272;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>

</body>
</html>