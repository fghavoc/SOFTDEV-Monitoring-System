<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lgu */

$this->title = 'Update Lgu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lgus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'advisory_id' => $model->advisory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lgu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
