<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tarifs */

$this->title = 'Create Tarifs';
$this->params['breadcrumbs'][] = ['label' => 'Tarifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarifs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
