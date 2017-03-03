<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<body class="hold-transition register-page">
<div class="register-box">
<center><img src="http://i1360.photobucket.com/albums/r656/Gail_Haboc/NDRRMC%20img/logo/ndrrmc_zps4vrwimdn.png" width="220" height="110"></center>
  <div class="register-logo">
     <a href="#"><b>Monitoring System</b><br></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

   <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            

       <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                        <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

      <?php ActiveForm::end(); ?>
     <div style="color:#999;margin:1em 0">
                   I already have an account <?= Html::a('Login', ['login']) ?>.
    </div>

   <!-- <a href="http://localhost/pharmasysv3/pharmasysV3/backend/web/index.php?r=site%2Flogin">I already have an account</a> -->
  </div>
</div>
</body>
<!--
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
-->