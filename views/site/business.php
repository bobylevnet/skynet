<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Юр.лица';
$this->params['breadcrumbs'][] = $this->title;
?>



<div id="slide" class="color1 carousel" >
<?php 
echo $this->render("//partial/carousel1");?>
</div>
<div class="container"> 
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
</div>