<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ndrrmc */

$this->title = 'Create Ndrrmc';
$this->params['breadcrumbs'][] = ['label' => 'Ndrrmcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ndrrmc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
