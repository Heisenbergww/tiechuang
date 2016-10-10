<!--单独引用-->
<link rel="stylesheet" href="/mobile/css/home.css">
<link rel="stylesheet" href="/mobile/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="/mobile/owlcarousel/owl.theme.default.min.css">
<script src="/mobile/owlcarousel/owl.carousel.min.js"></script>
<link rel="stylesheet" href="/mobile/css/swiper-3.3.1.min.css">

<!--主体部分-------------------------------------------------------------->
<!--轮播-->
<section class="section0  clearfix banners">
    <div class="owl-carousel owl-theme ppt">
        <?php foreach($model as $im):?>
        <div class="item">
            <a href=""><img src="/<?php echo $im['cover']?>" alt=""></a>
        </div>
        <?php endforeach;?>
    </div>
</section>

<section class="section1 clearfix container">
    <a href="<?php echo yii\helpers\Url::to(['/mobile/aboutus/technology'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/home_special_technology.png" alt="">
            </div>
            <div class="ac_words">
                <h1>SPECIAL TECHNOLOGY</h1>
                <p>International advanced technology, Industrial standard</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
    <a href="<?php echo yii\helpers\Url::to(['/mobile/fashion/index'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/home_faq.png" alt="">
            </div>
            <div class="ac_words">
                <h1>F A Q</h1>
                <p>We will help you answer questions that may be encountered</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
    <a href="<?php echo yii\helpers\Url::to(['/mobile/aboutus/branch'])?>">
        <div class="ac">
            <div class="ac_pic">
                <img src="/mobile/img/home_branch.jpg" alt="">
            </div>
            <div class="ac_words">
                <h1>OUR BRANCH</h1>
                <p>There’s some words that introduce our branch</p>
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
                <p>Here,you will see the latest news about Ercole</p>
                <p class="span">VIEW MORE</p>
            </div>
        </div>
    </a>
</section>

<section class="section2 clearfix container">
    <h1>Products Show</h1>
    <div class="swiper-container-home swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($product as $pro):?>
            <div class="swiper-slide">
                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
                    <div class="recommend">
                        <div class="recommend_pic">
                            <img   src="/<?php echo $pro['cover']?>" alt="">
                        </div>
                        <p class="recommend_word"><?php echo $pro['title']?></p>
                    </div>
                </a>
            </div>
            <?php endforeach;?>
        </div>
        <!-- 如果需要导航按钮 -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>





    <!--<div class="recommend_fa clearfix">-->
        <!--<?php foreach($product as $pro):?>-->
        <!--<a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">-->
            <!--<div class="recommend">-->
                <!--<div class="recommend_pic">-->
                    <!--<img   src="/<?php echo $pro['cover']?>" alt="">-->
                <!--</div>-->
                <!--<p class="recommend_word"><?php echo $pro['title']?></p>-->
            <!--</div>-->
        <!--</a>-->
        <!--<?php endforeach;?>-->
    <!--</div>-->
</section>


<!--单独引用-->
<!--轮播-->
<script src="/mobile/js/swiper.min.js"></script>

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
    //轮播2
    var mySwiperHome = new Swiper ('.swiper-container-home', {
        pagination : '.swiper-pagination',
        paginationType : 'fraction',
        paginationClickable: true,
        slidesPerView: 2,
        slidesPerColumn: 2
    })
</script>