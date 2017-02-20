<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SuppliesNeeded */

$this->title = 'Create Supplies Needed';
$this->params['breadcrumbs'][] = ['label' => 'Supplies Neededs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplies-needed-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
