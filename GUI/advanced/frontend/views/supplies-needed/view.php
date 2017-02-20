<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeeded */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Supplies Neededs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplies-needed-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'suggested_supplies_id' => $model->suggested_supplies_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'suggested_supplies_id' => $model->suggested_supplies_id], [
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
            'requested_supplies',
            'quantity',
            'destination',
            'suggested_supplies_id',
        ],
    ]) ?>

</div>
