<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SuppliesNeeded;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model common\models\SuggestedSupplies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suggested-supplies-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    
  <!--  <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'disaster_type')->dropDownList(['Earthquake' => 'Earthquake', 'Flood' => 'Flood','Low Pressure Area' => 'Low Pressure Area', 'Tropical Depression' => 'Tropical Depression', 'Typhoon' => 'Typhoon','Volcanic' => 'Volcanic', 'Wind' =>'Wind', 'Other' => 'Other',], ['prompt' => '==Select==']) ?>

 
    <?= $form->field($model, 'equipment_name')->textInput(['maxlength' => true]) ?>

    <div class="rows">
	<div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Needed Supplies</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsSuppliesNeeded[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'requested_supplies',
                    'quantity',
                    'destination',
                //    'suggested_supplies_id',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsSuppliesNeeded as $i => $modelsSuppliesNeeded): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Request...</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelsSuppliesNeeded->isNewRecord) {
                                echo Html::activeHiddenInput($modelsSuppliesNeeded, "[{$i}]id");
                            }
                        ?>
                      
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelsSuppliesNeeded, "requested_supplies")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelsSuppliesNeeded, "quantity")->textInput(['maxlength' => true]) ?>
                            </div>
                              <div class="col-sm-4">
                                <?= $form->field($modelsSuppliesNeeded, "destination")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
