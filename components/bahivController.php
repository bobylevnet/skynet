<?php
use yii\filters\AccessControl;
class  bahivController extends Controller


public function behaviors()
{
	return [
			'access' => [
					'class' =>    AccessControl::className(),
					'only' => ['create', 'update' , 'delete'],
					'rules' => [
							[
									'actions' => ['index','create', 'update' , 'delete'],
									'allow' => true,
									'roles' => ['@'],
							],
					],
			],
			'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
							'delete' => ['POST'],
					],
			],
	];
}