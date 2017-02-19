<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SuggestedSupplies */

$this->title = 'Update Suggested Supplies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suggested Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suggested-supplies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
