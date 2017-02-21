<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advisory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advisory-form">

    <?php $form = ActiveForm::begin(); ?>

     <!-- $form->field($model, 'date')->textInput(['maxlength' => true])  -->

    <?= $form->field($model, 'recipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disaster_category')->dropDownList([ 'Flood' => 'Flood', 'Earthquake' => 'Earthquake','Typhoon' => 'Typhoon', 'Wind' => 'Wind', 'Tropical Depression' => 'Tropical Depression', 'Low Pressure Area' => 'Low Pressure Area','Incident Monitored' => 'Incident Monitored'], ['prompt' => 'Select Subject...']) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 15]) ?>

    <!--  $form->field($model, 'ndrrmc_id')->textInput()  -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
