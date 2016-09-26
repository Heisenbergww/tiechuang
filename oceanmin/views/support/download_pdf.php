<!--该页-->
<link rel="stylesheet" href="/css/download_pdf.css">
<!--字体文件图标-->
<link rel="stylesheet" href="/css/font-awesome.min.css">
<!-- 图片拼接服务器 -->
<?php $host="http://www.gtmbike.com/";?>
<!--主体部分-->
<section class="section0 clearfix  ">
    <div class="container-fluid">
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class="">Download Manual</li>
            </ol>
        </nav>
    </div>
</section>
<section class="container-fluid clearfix section1">
    <img src="/img/pdf_bigpic.png" alt="">
</section>
<?php foreach($products as $pro):?>
<section class="container-fluid clearfix download_pdf_list1 section_model section2">
    <div class="row ">
        <div class="download_pdf_list_title">
            <h2><?php echo $pro['title']?></h2>
        </div>
        <div class="download_pdf_list_content">
            
          
        <?php foreach($pro["product"] as $pp):?>
            <div class="col_one_fifth">
                <hr>
                <div class="product_pdf">
                    <div class="product_pdf_pic_fa">
                        <img class="product_pdf_pic" src="<?php echo $host.$pp["cover"]?>" alt="">
                    </div>
                    <div class="tanchuang">
                        <img class="tanchuang_img" src="<?php echo $host.$pp["cover"]?>" alt="">
                        <img  class="close" src="/img/close.png" alt="">
                    </div>
                    <div class="the_pdf_p_fa">
                        <p><?php echo $pp["title"]?></p>
                    </div>
                    <a href="<?php echo $host.$pp["pdf"]?>" class="download_btn"><i class="fa fa-download" aria-hidden="true"></i>DOWNLOAD</a>
                </div>
            </div>

        <?php endforeach;?>

        </div>
    </div>
</section>



<?php endforeach;?>

