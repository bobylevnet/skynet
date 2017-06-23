<?php


use yii\helpers\Html;
use app\components\Tarifs;
use yii\base\Widget;
use app\models\Tarifs as TarifsTable;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TineternetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Интернет тарифы';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinternet-index">



   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		
    <p>
        <?php // echo Html::a('Create Tinternet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="container">
   <h1><?php  echo  Html::encode($this->title) ?></h1>
    <div class="clmn-center">
    <div class="cntr">
    <?= Tarifs::widget([
    		'model'=> new TarifsTable(),
    		'img' => Html::img('@web/img/tarifs-internet.png'),
    		'condition'=>'internet']);?>
    </div>
    
           </div>
    
    
    </div>
</div>
