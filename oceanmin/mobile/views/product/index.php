<link rel="stylesheet" href="/mobile/css/product.css">
<link rel="stylesheet" href="/mobile/css/font-awesome.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<!--主体部分-->
<section class="product_menu_top">
    <div class="">
        <div class="product_menu_top_fa the_all_product">
            <a href="" class="product_menu_top_fa_title"><h3 >All Products<span><img src="/mobile/img/Path%203.png" alt=""></span></h3></a>
            <hr>
        </div>
        <div class="product_menu_top_fa the_category_product">
            <h3 class="product_menu_top_fa_title">2 Tier Wire Shelving Rack<span><img src="/mobile/img/Path%203.png" alt=""></span></h3>
            <a href="" class="product_menu_top_fa_content">
                <p>steel</p>
                <p>chrome</p>
            </a>
            <hr>
        </div>
    </div>
</section>

<?php foreach($products as $pro):?>
<section class="section1 clearfix container">
    <!--<h1><?php echo $pro['title']?></h1>-->
    <?php foreach($pro["product"] as $pp):?>
    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pp['productid']]) ?>">
        <div class="category_product">
            <div class="product">
                <div class="product_pic">
                    <img   src="<?php echo $host.$pp["cover"]?>" alt="">
                </div>
                <p class="product_word"><?php echo $pp["title"]?></p>
            </div>
        </div>
    </a>
    <?php endforeach;?>
</section>
<?php endforeach;?>

<script>
    $(document).ready(function(){
        var productCategoryFa=$(".product_menu_top_fa_title");
        productCategoryFa.click(function(){
            console.log(1);
            $(this).nextAll().toggle();
            console.log(2);
        })
    })
</script>




