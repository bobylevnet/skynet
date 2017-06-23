<?php

use yii\helpers\Html;
use yii\grid\GridViewuse;
use yii\widgets\listView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VacancySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Vacancy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
       	'itemView' => '_list',
     	'summary' => '',
      
       // 'filterModel' => $searchModel,
       /* 'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'namevacancy',
            'functionvacan',
            'pay',

            ['class' => 'yii\grid\ActionColumn'],
        ],*/
    ]); ?>

</div>


