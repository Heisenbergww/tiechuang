<?php
use yii\filters\PageCache;
?>
<?php if($this->beginCache('cache_company_info')){?>
<link rel="stylesheet" href="/css/company_info.css">

    <!--主体部分-->
    <section class="section1 clearfix big_bg_menu ">
    <div class="container-fluid">
        <h1>Company Info</h1>
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class="">Company Info</li>
            </ol>
        </nav>
    </div>
</section>
    <section class="section2 container-fluid clearfix">
        <div class="row">
            <div class="col-lg-12">
                <img src="/img/company_info.png" alt="">
                <p>About GTM bike</p>
                <p>GTM was founded in 2015,with global vision, we have set up R&D, marketing, manufacturing and logistics centers in countries such as United States, Belgium, The British, Hong Kong and China. As a bike brand, GTM always adhere to the environmental protection and health.
                </p>
                <p>GTM has completed the integration of portable transportation industrial chain, and the globalization of our brand name. Our bikes have been exported to all over the world.
                </p>
                <p>GTM is mainly for customers to build environmentally friendly travel, the state of healthy living to help them find freedom and joy from the stressful life and work.
                </p>
                <p>Our products include folding bikes, road bikes, mountain bikes, electric bikes and smart bike. Our company can provide wholesale and large quantities, welcome distributors inquiry.
                </p>
                <p>GTM has set up warehouse in the Americas, Europe, Asia, therefore, we will provide the best quality and the lowest price and the best service to every customer.
                </p>
            </div>
        </div>
    </section>
<?php $this->endCache();}?>