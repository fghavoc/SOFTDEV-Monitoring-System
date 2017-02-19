<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\SuggestedSupplies;

/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeeded */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplies-needed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'requested_supplies')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'suggested_supplies_id')->dropDownList(ArrayHelper::map(SuggestedSupplies::find()->all(),'id','equipment_name'),['prompt'=>'=SELECT=']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
