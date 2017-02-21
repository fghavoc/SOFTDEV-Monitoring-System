<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register Account';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-LGUsignup"><center>
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>Please fill out the following fields to signup:</p> -->

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="">Loyola Student Center</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>


    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ->textInput(['maxlength' => true,'placeholder'=>'sample@email.com']) ?>
            
                <?= $form->field($model, 'contact')->textInput(['maxlength' => true,'placeholder'=>'09*********']) ?>

                <?= $form->field($model, 'city')->textInput() ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <div class="form-group">
                    <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
  </div>
</div>
</body>