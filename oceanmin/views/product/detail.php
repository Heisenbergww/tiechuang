<link rel="stylesheet" href="/css/item.css">
<!--字体文件图标-->
<link rel="stylesheet" href="/css/font-awesome.min.css">
<script src="/js/jquery-3.1.0.min.js"></script>
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<section class="section0 clearfix  ">
    <div class="container-fluid">
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class=""><a href="<?php echo yii\helpers\Url::to(['product/index'])?>" class="">Product/</a></li>
                <li class="">Product-info</li>
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
                    <a href="mailto:GTM@beforeship.com">Contact Us</a>
                    <p>If you have any questions please contact me, we are sure any of your questions will get our prompt attention and reply.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid clearfix section_middle">
    <table class="tab_switch">
        <tr class="tab_switch_tr">
            <td class="tab_switch_td tab_switch_td_1">
                <p>Specifications</p>
                <span class="triangle_blue"></span>
            </td>
            <td class="tab_switch_td tab_switch_td_2">
                <p>Instructions</p>
                <span class="triangle_blue"></span>
            </td>
            <td class="tab_switch_td tab_switch_td_3">
                <p>Contact Us:<a href="mailto:GTM@beforeship.com">E-Mail:GTM@beforeship.com </a></p>
            </td>
        </tr>
    </table>
</section>
<section class="container-fluid clearfix section2">
</section>
<!-- <section class="section3 clearfix">
    <img src="/img/special.png" alt="" class="special_big">
</section> -->
<section class="section4 for_table_1 clearfix container-fluid">
    <div class="row item_Instructions clearfix">
        <div class=" col-lg-12 product_descr">
            <?php echo $product['descr']?>
        </div>
    </div>
</section>
<section class="section4 for_table_2 clearfix container-fluid">
    <div class="row item_more_info clearfix">
        <h3>Download Product Specification</h3>
        <a target="_blank" href="<?php echo $host.$product['pdf']?>" class="download_btn"><i class="fa fa-download" aria-hidden="true"></i>Download the PDF</a>
        <div class="col-lg-12 clearfix table_fa ">
            <!--之前的table删除了-->
        </div>
    </div>
    <div class="view_more_collapse">
        <h4>view more</h4>
    </div>
    <div class="row">
        <div class=" col-lg-12 product_descr">
           <img src="<?php echo $product['instructions']?>"> 
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
