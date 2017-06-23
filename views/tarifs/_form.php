<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tarifs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarifs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nametarif')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'speedtarif')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'pricetarif')->textarea(['rows' => 1]) ?>
    
    <?= $form->field($model, 'technology')->textInput(['rows' => 1]) ?>

    <?= $form->field($model, 'typetarif')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
