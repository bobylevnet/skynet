<?php

use yii\bootstrap\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';





//<?php if (\Yii::$app->session['menuselect']=="activemenu1") {
	//	;
//}
//else {
	//echo $this->render("//partial/carousel1");
//}
//?>



<div id="slide" class="carousel" >
<?php 
echo $this->render("//partial/carousel");?>
</div>

<div class="container">
<div class="site-index">

   

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 shadow">
                <h2>Тарифы интернет</h2>

                <img src="/img/content/in.jpg">

                <p><?= Html::a("Узнать больше",Url::to('/tarifs/internet'),['class'=>'btn btn-default btn-full'])?>  
                  <!-- <a class="" href="http://www.yiiframework.com/doc/">Узнать больше</a> --></p>
            </div>
            <div class="col-lg-4 shadow">
                <h2>Видеонаблюдение</h2>
 			 <img src="/img/content/video.jpg">
                <p><?= Html::a("Узнать больше",Url::to('/tarifs/video'),['class'=>'btn btn-default btn-full'])?> </p>
            </div>
            <div class="col-lg-4 shadow">
                <h2>Пакеты интернет+ТВ</h2>

                <img src="/img/content/in+tv.jpg">

                <p><?= Html::a("Узнать больше",Url::to('/tarifs/inttv'),['class'=>'btn btn-default btn-full'])?></p>
            </div>
        </div>

    </div>
</div>
</div>