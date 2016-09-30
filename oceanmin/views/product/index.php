<title>产品展示</title>
<link rel="stylesheet" href="/css/product-introduce.css">
<script src="/js/jquery-3.1.0.min.js"></script>
<!--分页-->
<link rel="stylesheet" href="/css/pagination.css">
<script src="/js/jquery.pagination.min.js"></script>
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<section class="section0 clearfix  ">
    <div class="container-fluid">
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class="">Product</li>
            </ol>
        </nav>
    </div>
</section>
<section class="container-fluid clearfix section1">
    <img src="/img/product_info.jpg" alt="">
</section>
<section class="container-fluid clearfix section2">
    <div class="row business">
        <div class="col-lg-3 business-left ">
            <div class="row ">
                <div class="col-lg-12 business-left-title">
                    <a href="<?php echo yii\helpers\Url::to(['product/index']) ?>">
                    <h3>All Products</h3>
                    </a>
                </div>
                <?php foreach($menu as $m):?>
                <div class="col-lg-12 business-one">
                    <div class="business-name" >
                        <h3><?php echo $m['title']?><span><img src="/img/Path%203.png" alt=""></span></h3>
                        <hr>
                    </div>
                    <div class="business-content">
                        <?php foreach($m['children'] as $cate):?>
                        <a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $cate['cateid']]) ?>"><p><?php echo $cate['title']?></p></a>
                        <?php endforeach;?>
                    </div>
                </div>
               <?php endforeach;?>
               
                <div class="col-lg-12 business-contact" >
                    <div class="business-contact_ctrl">
                        <h5>Contact Us</h5>
                        <p><span>Company Name：</span><?php echo $company['companyname']?></p>
                        <p><span>Email：</span><?php echo $company['companyemail']?></p>
                        <p><span>TEL：</span><?php echo $company['companytel']?>9</p>
                        <p><span>Fax：</span><?php echo $company['companyfax']?></p>
                        <p><span>Mobile：</span><?php echo $company['companymobile']?></p>
                        <img src="/img/二维码.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 business-right">
            <div class="row business-pic clearfix">
                <?php foreach($products as $pro):?>
                <div class="col-lg-4 business-pic-son">
                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
                        <div class="product_item_pic">
                            <img src="/<?php echo $pro['cover']?>" alt="">
                            <p><?php echo $pro['title']?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>



    </div>
     <div class="pagination pull-right">
            <?php echo yii\widgets\LinkPager::widget([
                'pagination' => $pager,
                'prevPageLabel' => '&#8249;',
                'nextPageLabel' => '&#8250;',
            ]); ?>
        </div>
</section>






