
<?php 

use yii\bootstrap\Carousel;
use yii\helpers\Html;
echo  Carousel::widget([
		'options' => ['class' => 'carousel', 'data-interval' => '6000'],
		'items' => [


				// the item contains only the image
				//   Html::img('img\accord\present.png',['class'=>'']) ,
				// equivalent to the above
				['content' => '<div  class="slide color1"> <h3 class="header">ПРИГЛАШАЕМ</h3>'.Html::img('@web/img/accord/arm.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Операторов связи для сотрудничества</span>'.
						Html::a("Узнать больше",'',["class"=>"pst-abs btn"])   .'</div>',
						'caption' => '',],
				// the item contains both the image and the caption
				[
						'content' => '<div  class="slide color2"> <h3 class="header">ПРЕИМУЩЕСТВА</h3>'.Html::img('@web/img/accord/ip.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Выделнный IP адрес +  скорость до 1GB</span>'.
						Html::a("Узнать больше",'',["class"=>"pst-abs btn"])   .'</div>',
						'caption' => '',

				],
				[
						'content' => '<div  class="slide color3"> <h3 class="header">МОНТАЖ</h3>'.Html::img('@web/img/accord/camera.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Систем видеонаблюдения + ЛВС </span>'.
						Html::a("Узнать больше",'',["class"=>"pst-abs btn"])   .'</div>',
						'caption' => '',

				],

		],
		'controls' => [
				'<div class="glyphicon glyphicon-chevron-left" aria-hidden="true"></div>',
				'<div class="glyphicon glyphicon-chevron-right" aria-hidden="true"></div>'
		]
]);
?>