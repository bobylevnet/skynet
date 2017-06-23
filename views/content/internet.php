<?php

use yii\grid\GridView;
use yii\base\Widget;
use app\models\Tinternet;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
		'query' => Tinternet::find(['id'=>'0']),
		'pagination' => [
				'pageSize' => 20,
		],
]);


echo  GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
				['class' => 'yii\grid\SerialColumn'],
				'id',
				'nametarif',
		],
			
 
]);
