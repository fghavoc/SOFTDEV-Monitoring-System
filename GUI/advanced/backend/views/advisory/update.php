<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Advisory */

$this->title = 'Update Advisory: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advisories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'ndrrmc_id' => $model->ndrrmc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="advisory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
