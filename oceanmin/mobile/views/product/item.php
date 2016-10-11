<link rel="stylesheet" href="/mobile/css/item.css">
<link rel="stylesheet" href="/mobile/css/swiper-3.3.1.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.ercolego.com/";?>
<!--主体部分-------------------------------------------------------------->
<section class="section"></section>
<section class="secion1 clearfix">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($product['pics'] as $key=>$v):?>
            <div class="swiper-slide" id="fivepic-<?php echo $key;?>">
                <img src="<?php echo $host.$v;?>" alt="" width="100%" height="auto">
            </div>
            <?php endforeach;?>
        </div>
        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="item_name">
        <p>
            <?php echo $product['title']?>
        </p>
    </div>
</section>
<section class="section2 clearfix container">
    <div class="short_description">
        <h3>Features:</h3>
        <div class="the_feature">
           <?php echo $product['features']?>
        </div>
    </div>
    <div class="detail_description">
        <?php echo $product['descr']?>
    </div>
</section>

<script>
    //        底部固定
    //product详情页面
    // 当向下滚动距离大于60px，将顶部固定成fixed
    function goToFixBottom(){
        var winPos = $(window).scrollTop();
        console.log(winPos);
        var bh=$(".footer_menu ").offset().top;
        console.log(bh);
        if (winPos<bh-580){
            $(".contact_us_fa").css({position:"fixed"});
        }
        else{
            $(".contact_us_fa").css({position:"relative"});
        }
    }
    $(window).scroll(goToFixBottom);
</script>
<script src="/mobile/js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
    })
</script>




