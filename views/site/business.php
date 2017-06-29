<?php


use yii\helpers\Url;

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Юр.лица';
$this->params['breadcrumbs'][] = $this->title;
?>


<div id="slide" class="carousel" >
<?php 
echo $this->render("//partial/carousel1");?>
</div>

<div class="container">
<div class="site-index">

   

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 shadow">
                <h2>Каналы связи</h2>

                <img src="/img/canal.png">

                <p><?= Html::a("Узнать больше",Url::to('/site/canal'),['class'=>'btn btn-default btn-full'])?>  
                  <!-- <a class="" href="http://www.yiiframework.com/doc/">Узнать больше</a> --></p>
            </div>
            <div class="col-lg-4 shadow">
                <h2>Видеонаблюдение</h2>
 			 <img src="/img/camera.png">
                <p><?= Html::a("Узнать больше",Url::to('/site/video'),['class'=>'btn btn-default btn-full'])?> </p>
            </div>
            <div class="col-lg-4 shadow">
                <h2>Выделенный IP</h2>

                <img src="/img/whiteip.png">

                <p><?= Html::a("Узнать больше",Url::to('/site/ipwhite'),['class'=>'btn btn-default btn-full'])?></p>
            </div>
        </div>

    </div>
</div>
</div>