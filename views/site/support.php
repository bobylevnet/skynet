<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Тех. потдержка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div 	class="container">
<div class="site-contact">
  

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
		<?php $this->registerJsFile(Url::to('/js/redirect.js'))?>
        <div class="alert alert-success tp">
          Благодорим вас за приявленный интерес с нашим услугам.
           <p>
           Мы вскоре свяжемся с вами для уточнения всех деталей.
           </p>
        </div>

        <p>
   

        </p>

    <?php else: ?>

        <p>
           
        </p>

        <div class="row ">
          
            <div class="center-block center-block-width">
			<h2><?= Html::encode($this->title) ?></h2>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                   
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'phone') ?>

                    <?= $form->field($model, 'message')->textarea() ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
			
            </div>
        </div>

    <?php endif; ?>
</div>
</div>