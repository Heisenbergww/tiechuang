<link rel="stylesheet" href="/mobile/css/product.css">
<link rel="stylesheet" href="/mobile/css/font-awesome.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.ercolego.com/";?>
<!--主体部分-->
<section class="product_menu_top">
    <div class="">
        <div class="product_menu_top_fa the_all_product">
            <a href="<?php echo yii\helpers\Url::to(['product/index']) ?>" class="product_menu_top_fa_title"><h3 >All Products<span><img src="/mobile/img/Path%203.png" alt=""></span></h3></a>
            <hr>
        </div>
        <?php foreach($menu as $m):?>
        <div class="product_menu_top_fa the_category_product">
            <h3 class="product_menu_top_fa_title"><?php echo $m['title']?><span><img src="/mobile/img/Path%203.png" alt=""></span></h3>
            <?php foreach($m['children'] as $cate):?>
            <a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $cate['cateid']]) ?>" class="product_menu_top_fa_content">
                <p><?php echo $cate['title']?></p>
            </a>
            <?php endforeach;?>
            <hr>
        </div>
        <?php endforeach;?>
    </div>
</section>

<?php foreach($products as $pro):?>
<section class="section1 clearfix container">
    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
        <div class="category_product">
            <div class="product">
                <div class="product_pic">
                    <img src="<?php echo $host.$pro["cover"]?>" alt="">
                </div>
                <p class="product_word"><?php echo $pro['title']?></p>
            </div>
        </div>
    </a>
</section>
<?php endforeach;?>

<div class="pagination pull-right">
    <?php echo yii\widgets\LinkPager::widget([
        'pagination' => $pager,
        'prevPageLabel' => '&#8249;',
        'nextPageLabel' => '&#8250;',
    ]); ?>
</div>        

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




