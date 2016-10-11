<link rel="stylesheet" href="/css/item.css">
<!--字体文件图标-->
<link rel="stylesheet" href="/css/font-awesome.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.ercolego.com/";?>

<section class="section0 clearfix  ">
    <div class="container-fluid">
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class=""><a href="<?php echo yii\helpers\Url::to(['product/index'])?>" class="">Product/</a></li>
                <li class="">
                    <a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $product['cate_id']]) ?>" class=""><?php echo $product['cate_parent_name'];?>-<?php echo $product['cate_name'];?>/</a>
                </li>
                <li>PRODUCT&nbsp;INFO</li>
            </ol>
        </nav>
    </div>
</section>
<section class="container-fluid clearfix section1">
    <div class="row clearfix">
        <div class="col-lg-6 pic-thing">
            <div class=" big-pic row">
                <img src="<?php echo $host.$product['cover']?>" alt="">
            </div>
            <div class="fivepics row">
                <div class=" btn-pre"><span><img src="/img/left.png" alt=""></span></div>
                <div class="fivepics_smallpic">
                    <?php foreach($product['pics'] as $key=>$v):?>
                    <div class="fivepic" id="fivepic-<?php echo $key;?>"><img src="<?php echo $host.$v;?>" alt=""></div>
                    <?php endforeach;?>
                </div>
                <div class=" btn-next"><span><img src="/img/right.png" alt=""></span></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="item_info">
                <h3><?php echo $product['title']?> </h3>
                <h5>Features:</h5>
              <?php echo $product['features']?>
                <div class="item_info_call_me">
                    <a href="mailto:Ercole@beforeship.com">Contact Us</a>
                    <p>If you have any questions please contact me, we are sure any of your questions will get our prompt attention and reply.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section2  clearfix container-fluid">
    <div class="row item_Instructions clearfix">
        <div class=" col-lg-12 product_descr">
            <h2>Specifications</h2>
            <?php echo $product['descr']?>
        </div>
    </div>
</section>



<script >
    $(document).ready(function(){
        beBig();
//                点击前一张图片向前移动
        $(".btn-pre img").click(function(){
            //            获取这些图片的div把他们放入数组
            a=$(".fivepics_smallpic").children("div .fivepic ");
            var i=0;
            b=a[0];
            while(i< a.length){
                a[i]=a[i+1];
                i++;
            }
            i=i-1;
            a[i]=b;
//                console.log(i);
//                console.log(a[0],a[1],a[2],a[3],a[4],a[5],a[6]);
            var z=0;
            $("div").remove(".fivepic");
            while(z< a.length){
                $(".fivepics_smallpic").append(a[z]);
                 z++;
            }
//                $(".fivepics_smallpic_zero").after(a[0],a[1],a[2],a[3],a[4],a[5],a[6]);
            p=$(".fivepics_smallpic").children("div .fivepic ");
            beBig();
        })
//            点击后一张图片向后移动
        $(".btn-next img").click(function(){
            //            获取这些图片的div把他们放入数组
            a=$(".fivepics_smallpic").children("div .fivepic ");
            var y= a.length-1;
            b=a[y];
            while( y>0){
                a[y]=a[y-1];
                console.log(y);
                y--;
            }
            a[0]=b;
//                console.log(i);
//                console.log(a[0],a[1],a[2],a[3],a[4],a[5],a[6]);
            var z=0;
            $("div").remove(".fivepic");
            while(z< a.length){
                $(".fivepics_smallpic").append(a[z]);
                z++;
            }
//                $(".fivepics_smallpic_zero").after(a[0],a[1],a[2],a[3],a[4],a[5],a[6]);
            p=$(".fivepics_smallpic").children("div .fivepic ");
            beBig();
        })
//            点击其中一张图片在上面显示大图
        function beBig(){
            $(".fivepic img").click(function(){
                var bigPicSrc=/s(?=\d)/g;
                c=$(this).attr("src");
                //console.log(c);
                d= c.replace(bigPicSrc,'b');
                //console.log(d);
                $(".big-pic img").attr("src",c);
            })
        }
    })

</script>
