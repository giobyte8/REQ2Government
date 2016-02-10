<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Beneficiary */

$this->title = 'Update Beneficiary: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Beneficiaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idBeneficiary]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beneficiary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
