<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SuggestedSupplies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suggested-supplies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disaster_type')->dropDownList(['Earthquake' => 'Earthquake', 'Flood' => 'Flood','Low Pressure Area' => 'Low Pressure Area', 'Tropical Depression' => 'Tropical Depression', 'Typhoon' => 'Typhoon','Volcanic' => 'Volcanic', 'Wind' =>'Wind', 'Other' => 'Other',], ['prompt' => '==Select==']) ?>

    <?= $form->field($model, 'equipment_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
