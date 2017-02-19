<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CityInformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'City Informations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-information-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create City Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'region_name',
            'city_name',
            'no_of_brgy',
            'lgu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
