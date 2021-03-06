<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SuggestedSupplies */

$this->title = 'Create Suggested Supplies';
$this->params['breadcrumbs'][] = ['label' => 'Suggested Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suggested-supplies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsSuppliesNeeded' => $modelsSuppliesNeeded,

    ]) ?>

</div>
