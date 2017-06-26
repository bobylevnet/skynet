
<?php 

use yii\bootstrap\Carousel;
use yii\helpers\Html;
echo  Carousel::widget([
		'options' => ['class' => 'carousel', 'data-interval' => '6000'],
		'items' => [


				// the item contains only the image
				//   Html::img('img\accord\present.png',['class'=>'']) ,
				// equivalent to the above
				['content' => '<div  class="slide color1"> <h3 class="header">АКЦИЯ</h3>'.Html::img('@web/img/accord/present.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Приведи друга и получи 20% скидку</span>'.
						Html::a("Узнать больше",'',["class"=>"pst-abs btn"])   .'</div>',
						'caption' => '',],
				// the item contains both the image and the caption
				[
						'content' => '<div  class="slide color2"> <h3 class="header">ВЫГОДНЫЕ ТАРИФЫ</h3>'.Html::img('@web/img/accord/money.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Поможем с экономить на интернете</span>'.
						Html::a("Узнать больше",'',["class"=>"pst-abs btn"])   .'</div>',
						'caption' => '',

				],
				[
						'content' => '<div  class="slide color3"> <h3 class="header">СКОРОСТЬ</h3>'.Html::img('@web/img/accord/speed.png',['id'=>'slider','class'=>'imgslidehide']).'
        		<span class="pst-abs txt-msg">Интернет со скоростью до 1GB</span>'.
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