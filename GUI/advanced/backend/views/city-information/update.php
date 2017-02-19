<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CityInformation */

$this->title = 'Update City Information: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'City Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="city-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
