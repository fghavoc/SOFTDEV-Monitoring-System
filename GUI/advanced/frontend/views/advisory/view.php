<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advisory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advisories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advisory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'ndrrmc_id' => $model->ndrrmc_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'ndrrmc_id' => $model->ndrrmc_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'subject',
            'disaster_category',
            'ndrrmc_id',
        ],
    ]) ?>

</div>
