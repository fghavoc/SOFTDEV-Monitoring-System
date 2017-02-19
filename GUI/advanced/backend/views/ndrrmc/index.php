<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NdrrmcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ndrrmcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ndrrmc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ndrrmc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'username',
            'password',
            'contact',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
