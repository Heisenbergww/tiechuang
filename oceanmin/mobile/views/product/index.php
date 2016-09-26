<link rel="stylesheet" href="/mobile/css/product.css">
<link rel="stylesheet" href="/mobile/css/font-awesome.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<!--主体部分-->
<?php foreach($products as $pro):?>
<section class="section1 clearfix container">
    <h1><?php echo $pro['title']?></h1>
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




