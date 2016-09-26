<link rel="stylesheet" href="/mobile/css/item.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<!--主体部分-------------------------------------------------------------->
<section class="section"></section>
<section class="secion1 clearfix">
    <div class="item_pic">
        <img src="/mobile/img/left.png" alt="" class="left_btn">
        <img src="<?php echo $host.$product['cover']?>" alt="" class="product_pic">
        <img src="/mobile/img/right.png" alt="" class="right_btn">
        <div class="fivepics_smallpic">
        <?php foreach($product['pics'] as $key=>$v):?>
            <div class="fivepic" id="fivepic-<?php echo $key;?>"><img src="<?php echo $host.$v;?>" alt="" ></div>
        <?php endforeach;?>
        </div>
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
        <h3>Description:</h3>
        <div class="the_description">
            <?php echo $product['description']?>
        </div>
    </div>
    <div class="detail_description">
        <?php echo $product['descr']?>
    </div>
</section>




