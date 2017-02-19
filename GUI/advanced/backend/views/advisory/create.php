<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Advisory */

$this->title = 'Create Advisory';
$this->params['breadcrumbs'][] = ['label' => 'Advisories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advisory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
