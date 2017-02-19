<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeeded */

$this->title = 'Update Supplies Needed: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Supplies Neededs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'lgu_id' => $model->lgu_id, 'lgu_advisory_id' => $model->lgu_advisory_id, 'suggested_supplies_id' => $model->suggested_supplies_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplies-needed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
