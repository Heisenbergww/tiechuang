<title>产品展示</title>
<link rel="stylesheet" href="/css/product-introduce.css">
<script src="js/jquery-3.1.0.min.js"></script>
<!--分页-->
<link rel="stylesheet" href="/css/pagination.css">
<script src="/js/jquery.pagination.min.js"></script>
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<section class="product_goto_container clearfix section1 product_goto_fa">
    <div class="row ">
        <nav id="product_goto" class="product_goto">
            <table class="the_table"> 
                <tr class="the_table_tr">
                    <?php foreach($cate as $cat):?>
                    <td class="the_table_td">
                        <a href="#<?php echo $cat['title']?>" class=""><?php echo $cat['title']?></a>
                    </td>
                    <?php endforeach;?>
                </tr>
            </table>
        </nav> 
    </div>
</section>

<?php foreach($products as $pro):?>
<a href=""  name="<?php echo $pro['title']?>" display="none" height="40px"></a>
<section class="container-fluid clearfix product_category_2 section3">
    <div class="row ">
        <div class="product_category_title">
            <a href=""><h2><?php echo $pro['title']?></h2></a>
        </div>
        <?php foreach($pro["product"] as $pp):?>
        <div class="product_category_content">
            <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pp['productid']]) ?>">
                <div class="col-lg-4">
                    <div class="product_item">
                        <img src="<?php echo $host.$pp["cover"]?>" alt="">
                        <div class="the_p_fa">
                            <p><?php echo $pp["title"]?></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</section>
<?php endforeach;?>


