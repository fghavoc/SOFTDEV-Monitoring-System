<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lgu */

$this->title = 'Create Lgu';
$this->params['breadcrumbs'][] = ['label' => 'Lgus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
