<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarifsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarifs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarifs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarifs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nametarif:ntext',
            'speedtarif:ntext',
            'pricetarif:ntext',
            'typetarif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
