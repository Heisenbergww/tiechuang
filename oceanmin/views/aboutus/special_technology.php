<?php
use yii\filters\PageCache;
?>
<?php if($this->beginCache('cache_special_tec')){?>
<link rel="stylesheet" href="/css/special_technology.css">
<!--主体部分-->
<section class="section1 clearfix big_bg_menu ">
<div class="container-fluid">
    <h1>Special Technology</h1>
    <nav id="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
            <li class="">Special Technology</li>
        </ol>
    </nav>
</div>
</section>
<section class="section2 clearfix container-fluid Special_Technology_content">
    <div class="row">
            <p>
                <strong>Aluminum alloy technology</strong>---Looking for a better riding experience</br></br>
                We put a simple frame technology? With the efforts we put as much as we know the reason you ride. Carefully designed geometry structure; aluminum alloy frame has conforms to locate the optimal size of man-machine crowd; The vehicle line is smooth, solid, glamour.
            </p>
            <img src="/img/special_te.jpg" alt="">
            <p>
                <strong> Aerodynamic technology</strong>---Faster from more accurate design</br></br>
                The minimum surface area of the front portion of the bicycle is crucial. It has laid the foundation for the entire bike expressive 3:1 the tail blunt windward surface, correct riding posture will make you feel more light Province.
            </p>
            <img src="/img/special_te2.jpg" alt="">
            <p>
                <strong>Integration technology</strong>---Highly integrated</br></br>
                Line pipe, brake, nutritional supplements, quick release -- these can increase wind resistance. These all integrated into the frame, even if it is the nuances, the wind can’t slow down the pace of progress.
            </p>
            <img src="/img/special_te3.jpg" alt="">
        </div>
    </div>

</section>
<?php $this->endCache();}?>

