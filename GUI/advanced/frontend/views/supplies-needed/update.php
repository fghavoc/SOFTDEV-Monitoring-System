<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeeded */

$this->title = 'Update Supplies Needed: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Supplies Neededs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'suggested_supplies_id' => $model->suggested_supplies_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplies-needed-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
