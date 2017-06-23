<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>

<div class="container">
<h1> <?=$this->title = 'Вакансии'; ?> </h1>
	<div class="clmn-center">
<div class="vacancy-item">

<div>
   <h4>Должность</h4> 
    <?= HtmlPurifier::process($model->namevacancy) ?>    
 </div> 
 <div>
    <h4>Обязанности </h4>
     <?= HtmlPurifier::process($model->functionvacan) ?>    
   </div>
   <div>
         <h4>Уровень зарплаты</h4>
     <?= HtmlPurifier::process($model->pay) ?>
     </div> 
</div>
 </div>
 <div> Обращаться по телефону или пасить на   <a href="mailto:connect@skynet89.ru "> connect@skynet89.ru </a> 	</div>
</div>
