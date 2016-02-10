<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\RequestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idRequest') ?>

    <?= $form->field($model, 'createdAt') ?>

    <?= $form->field($model, 'attendedAt') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'idRequestCategory') ?>

    <?php // echo $form->field($model, 'idBeneficiary') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
