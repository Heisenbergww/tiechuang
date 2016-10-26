<?php
use yii\filters\PageCache;
?>
<!--该页-->
<link rel="stylesheet" href="/css/faq.css">

    <!--主体部分-->
    <section class="section0 clearfix  ">
        <div class="container-fluid">
            <nav id="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                    <li class="">faq</li>
                </ol>
            </nav>
        </div>
    </section>
    <?php if($this->beginCache('cache_faq_img')){?> 
    <section class="container-fluid clearfix section1">
        <img src="/img/faq.jpg" alt="">
    </section>
    <?php $this->endCache();}?> 
<section class="section2  container_q_and_a">
    <div class="q_and_a">
        <div class="row the_q clearfix">
            <div class="col-lg-1">
                <div class="the_q_left">
                    <span>Q</span>
                </div>
            </div>
            <div class="col-lg-11">
                <div class="the_q_right">
                    <span class="triangle_q"></span>
                    <p>What are you hours of operation?
                    </p>
                </div>
            </div>
        </div>
        <div class="row the_a clearfix">
            <div class="col-lg-1">
                <div class="the_a_left"><span>A</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_a_right">
                    <span class="triangle_a"></span>
                    <p>Customer service is available Monday – Friday, 9AM to 5:30PM. Messages and emails can be left during non-working hours and you will be contacted the next business day.  
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="q_and_a">
        <div class="row the_q clearfix">
            <div class="col-lg-1">
                <div class="the_q_left"><span>Q</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_q_right">
                    <span class="triangle_q"></span>
                    <p>Are you the manufacturers, Where do you shipping from？
                    </p>
                </div>
            </div>
        </div>
        <div class="row the_a clearfix">
            <div class="col-lg-1">
                <div class="the_a_left"><span>A</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_a_right">
                    <span class="triangle_a"></span>
                    <p>Yes. Our products are made in China’s factory, but We have set up warehouse in Americas, Europe, Asia.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="q_and_a">
        <div class="row the_q clearfix">
            <div class="col-lg-1">
                <div class="the_q_left"><span>Q</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_q_right">
                    <span class="triangle_q"></span>
                    <p>How can I get some samples?
                    </p>
                </div>
            </div>
        </div>
        <div class="row the_a clearfix">
            <div class="col-lg-1">
                <div class="the_a_left"><span>A</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_a_right">
                    <span class="triangle_a"></span>
                    <p>We’re honored to supply samples for you. Our samples are free for customers who confirm the order, but the courier charge is on customer’s account.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="q_and_a">
        <div class="row the_q clearfix">
            <div class="col-lg-1">
                <div class="the_q_left"><span>Q</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_q_right">
                    <span class="triangle_q"></span>
                    <p>Can I bargain the price?
                    </p>
                </div>
            </div>
        </div>
        <div class="row the_a clearfix">
            <div class="col-lg-1">
                <div class="the_a_left"><span>A</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_a_right">
                    <span class="triangle_a"></span>
                    <p>Yes, the price list is our general price, we'll offer you final price according to your quantity and requirements.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="q_and_a">
        <div class="row the_q clearfix">
            <div class="col-lg-1">
                <div class="the_q_left"><span>Q</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_q_right">
                    <span class="triangle_q"></span>
                    <p>Who can answer my questions about the products, including size, order status, shipping, etc.?
                    </p>
                </div>
            </div>
        </div>
        <div class="row the_a clearfix">
            <div class="col-lg-1">
                <div class="the_a_left"><span>A</span></div>
            </div>
            <div class="col-lg-11">
                <div class="the_a_right">
                    <span class="triangle_a"></span>
                    <p>If you have any further questions, feel free to contact us at WaaGee@beforeship.com. Please allow for a 24-hour response time especially with questions sent over the weekend. Thank you for your understanding.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
