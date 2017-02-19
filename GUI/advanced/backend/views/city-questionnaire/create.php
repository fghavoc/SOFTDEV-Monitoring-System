<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CityQuestionnaire */

$this->title = 'Create City Questionnaire';
$this->params['breadcrumbs'][] = ['label' => 'City Questionnaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-questionnaire-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
