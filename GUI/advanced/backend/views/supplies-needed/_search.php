<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeededSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplies-needed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'requested_supplies') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'destination') ?>

    <?= $form->field($model, 'suggested_supplies_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
