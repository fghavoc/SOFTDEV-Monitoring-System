<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SuppliesNeededSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supplies Neededs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplies-needed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supplies Needed', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'requested_supplies',
            'quantity',
            'destination',
            'suggested_supplies_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
