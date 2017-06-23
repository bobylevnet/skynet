<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

use app\models\Menu;
use app\models\User;
use app\models\LoginForm;
use yii\base\Widget;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php  
  
    $this->head() ?>
</head>
<body>

   <div class="wrap">
<?php     $this->beginBody() ?>
<header>


   <div class="container">
    <?php 
    NavBar::begin([
        'brandLabel' => '' ,
        'brandUrl' => Yii::$app->homeUrl,
    	'brandOptions'=> ['class'=>'logo'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    	
    ]);
    if (!Yii::$app->user->isGuest) {
    	echo  Html::a("Выйти", Url::to('/site/logout'));
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right '. \Yii::$app->session['menuselect']],
        'items' => Menu::getList(1, null),
    	'encodeLabels' => false,
    	 
    ]);
    NavBar::end();
    ?>
    </div>


 <div class="second-line">

     <div class="container">
         <div class="row">
             <div class="left">
               <?= Html::beginTag('a',  ['href' => Url::to()]); ?>
               <?php   echo Html::img('@web/img/logo.png');  ?>
               <div>Интернет провайдер</div>
               <?= Html::endTag('a')  ?>      
             </div>
             <div class="right">
             	<span> 8 (3496) 300-354</span>
             </div>
         </div>
     </div>
</div>    

<div class="three-line">
    <div class="container">
        <div class="row">
            <div  class="nav">
<?php  
    echo Nav::widget([
        'options' => ['class' => 'nav-pills  nav-justified nav-border'],
      	'items' => Menu::getList(\Yii::$app->session['menuselect'],$this->context->route),
    	'encodeLabels' => false,
    ]);
    
    
    ?>
            </div>
        </div>
    </div>
</div>
</header>


 
        <?= $content ?>
         
    </div>
<footer class="footer">
    <div class="container">
    
       <div class="left-content-footer">
        <p> <?= \yii\bootstrap\Html::a('О компании',Url::to('/site/license'),['class'=>'header-comp']) ?> </p>
        <p> <?= \yii\bootstrap\Html::a('Контакты',Url::to('/site/adres')) ?> </p>
        <p> <?= \yii\bootstrap\Html::a('Лицензии',Url::to('/site/license')) ?> </p>
       
        </div>
 <p class="pull-left">&copy; ООО "Скай-нет" <?= date('Y') ?></p>
       
    </div>
</footer>


    
   <?php  $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
