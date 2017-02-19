<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CityInformation */

$this->title = 'Create City Information';
$this->params['breadcrumbs'][] = ['label' => 'City Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
