<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameMenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actionMenu')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'activeMenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topBottom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menuImg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
