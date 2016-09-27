<?php
use yii\filters\PageCache;
?>
<title>Home</title>
<!--[if lt IE 9]>
<script src="js/html5.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery-3.1.0.min.js"></script>
<!--[if lte IE 8]>
<script src="//cdn.bootcss.com/jquery/1.9.0/jquery.min.js"></script>
<![endif]-->
<!--轮播‪-->
<link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">
<script src="/owlcarousel/owl.carousel.min.js"></script>

<!--<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>-->
<!--<script src="js/respond.min.js"></script>-->

<style>
    /*html5*/
    article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
</style>
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>

<section class="container-fluid-ppt clearfix" >
    <div class="row clearfix">
        <div class="owl-carousel owl-theme ppt " id="owl-carousel_first">
            <?php foreach($model as $im):?>
            <div class="item">
                <a href=""><img height="" src="<?php echo $host.$im['cover']?>" alt=""></a>
            </div>
           <?php endforeach;?>
        </div>
    </div>
</section>


<section class="container-fluid clearfix section2">
    <div class="row ">
        <a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?> " class="row_part_square_2">
            <?php if($this->beginCache('cache_home_img1')){?>
            <div class="col-lg-3 row_part_square_img">
                <img src="img/home_special_technology.png" alt="" >
            </div>
            <?php $this->endCache();}?>
            <div class="col-lg-3 row_part_square_words">
                <h2>SPECIAL TECHNOLOGY</h2>
                <p>There’s some words that introduce the special technology</p>
                <span>VIEW MORE</span>
            </div>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['product/index'])?>" class="row_part_square_2">
            <?php if($this->beginCache('cache_home_img2')){?>
            <div class="col-lg-3 row_part_square_img">
                <img src="img/home_fashion_show.png" alt="" >
            </div>
            <?php $this->endCache();}?>
            <div class="col-lg-3 row_part_square_words">
                <h2>FASHION NOW</h2>
                <p>Join us & Become a GTM player</p>
                <span>VIEW MORE</span>
            </div>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>" class="row_part_square_2">
            <div class="col-lg-3 row_part_square_words">
                <h2>OUR BRANCH</h2>
                <p>There’s some words that introduce the our branch</p>
                <span href="">VIEW MORE</span>
            </div>
            <?php if($this->beginCache('cache_home_img3')){?>
            <div class="col-lg-3 row_part_square_img">
                <img src="img/home_branch.jpg" alt="" >
            </div>
            <?php $this->endCache();}?>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>" class="row_part_square_2">
            <div class="col-lg-3 row_part_square_words">
                <h2>NEWS</h2>
                <p>There’s some words that introduce the FAQ</p>
                <span href="">VIEW MORE</span>
            </div>
            <?php if($this->beginCache('cache_home_img4')){?>
            <div class="col-lg-3 row_part_square_img">
                <img src="../img/home_news.png" alt="" >
            </div>
            <?php $this->endCache();}?>
        </a>
    </div>
</section>
 

<section class="container-fluid clearfix section3">
    <div class="row">
        <div class="col-lg-12 row_part_title">
            <h1>SPECIAL GTMBike</h1>
        </div>
    </div>
    <div class="row">
        <div class="owl-carousel owl-theme ppt" id="owl-carousel_second">

            <div class="item">
                <a href=""><img height="" src="web/" alt=""></a>
                <p>yiersansi</p>
            </div>
            <div class="item">
                <a href=""><img height="" src="" alt=""></a>
                <p>yiersansi</p>
            </div>

        </div>
    </div>
</section>



<script>
    $(document).ready(function(){
        //轮播1
        $('#owl-carousel_first').owlCarousel({
            items: 1,
            loop: true,
            lazyLoad: true,
            autoHeight:true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
        //轮播2
        $('#owl-carousel_second').owlCarousel({
            items: 4,
            loop: true,
            margin:10,
            autoHeight:true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
    })
</script>
