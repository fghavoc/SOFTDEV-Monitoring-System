<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CityQuestionnaire */

$this->title = 'Update City Questionnaire: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'City Questionnaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'city_information_id' => $model->city_information_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="city-questionnaire-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
