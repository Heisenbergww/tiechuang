<!--单独引用-->
<link rel="stylesheet" href="/mobile/css/home.css">
<link rel="stylesheet" href="/mobile/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="/mobile/owlcarousel/owl.theme.default.min.css">
<script src="/mobile/owlcarousel/owl.carousel.min.js"></script>
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>

<!--主体部分-------------------------------------------------------------->
<!--轮播-->
<section class="section0  clearfix banners">
    <div class="owl-carousel owl-theme ppt">
        <?php foreach($model as $im):?>
        <div class="item">
            <a href=""><img src="<?php echo $host.$im['cover']?>" alt=""></a>
        </div>
        <?php endforeach;?>
    </div>
</section>

<section class="section1 clearfix container">
    <a href="<?php echo yii\helpers\Url::to(['/mobile/aboutus/technology'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/sepcial_technology.png" alt="">
            </div>
            <div class="ac_words">
                <h1>SPECIAL TECHNOLOGY</h1>
                <p>International advanced technology, Excellent quality</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
    <a href="<?php echo yii\helpers\Url::to(['/mobile/fashion/index'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/fashion.png" alt="">
            </div>
            <div class="ac_words">
                <h1>FASHION NOW</h1>
                <p>Join us & Become a GTM player</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
    <a href="<?php echo yii\helpers\Url::to(['/mobile/aboutus/branch'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/branchs.png" alt="">
            </div>
            <div class="ac_words">
                <h1>OUR BRANCH</h1>
                <p>There’s some words that introduce the our branch</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
    <a href="<?php echo yii\helpers\Url::to(['/mobile/aboutus/news'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/home_news.png" alt="">
            </div>
            <div class="ac_words">
                <h1>NEWS</h1>
                <p>There’s some words that introduce the FAQ</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
</section>

<section class="section2 clearfix container">
    <h1>SPECIAL GTMBike</h1>
    <div class="recommend_fa clearfix">
        <?php foreach($product as $pro):?>
        <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
            <div class="recommend">
                <div class="recommend_pic">
                    <img   src="<?php echo $host.$pro['cover']?>" alt="">
                </div>
                <p class="recommend_word"><?php echo $pro['title']?></p>
            </div>
        </a>
        <?php endforeach;?>
    </div>
</section>


<!--单独引用-->
<!--轮播-->
<script>
    $(document).ready(function(){
        //轮播
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
    })
</script>