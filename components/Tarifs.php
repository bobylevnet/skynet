<?php
namespace app\components;
use yii\base\Widget;

use yii\helpers\Html;
use yii\helpers\Url;




class Tarifs  extends Widget
{
	
	
	
	
	public $img;
	public $model;
	public $condition;
	
	public function init()
	{
		parent::init();
	
		
	}
	
	public function run()
	{	
	 $result = $this->model->find()->select(
	 		[
	 		'id',		
	 		'nametarif',
	 		'speedtarif',
	 		'technology',
	 		'pricetarif',
	 		'action',
	 		])->where(['typetarif'=>$this->condition])->all();	
		foreach($result  as $value)
		{
			
		echo 	Html::beginTag('div', ['class'=>'clmn']);
		$action = $value->attributes['action'];
		
		//акция
		if ($action!='')
		{
		echo Html::img($action,['class'=>'action']);	
		}
		$id = $value->attributes['id'];
	
		
		echo  '<div>'. $this->img.'</div>' ;
		 $arr = $value->toArray();
		 unset($arr['id']);
		 unset($arr['action']);
		 
			foreach($arr as $vl)
			{
			
				if ($value->attributes['nametarif']==$vl)
				{
				 echo    Html::a(Html::tag('div',$vl . Html::tag('span','*',['class'=>'detail']) ,['class'=>'tarifs']),
				 		 Url::to('tarifs/detail?id='.$id));
				}
				else
				{
					echo    Html::tag('div',$vl,['class'=>'tarifs']);
				}
			
			}
		
		echo    Html::a('Подключиться!', Url::to(['site/contact','id'=>$id]), ['class'=>'btn btn-tarif']);
		echo 	Html::endTag('div');
		}
	}
	
	
	
	
	
}