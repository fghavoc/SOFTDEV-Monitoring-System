<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdvisorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advisories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advisory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advisory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'subject',
            'disaster_category',
            'ndrrmc_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
