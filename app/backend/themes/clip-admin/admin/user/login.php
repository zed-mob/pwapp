<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = Yii::t('rbac-admin', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php /*
<div class="site-login">
	asdflaskdfjsdlkfjsldk
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['user/request-password-reset']) ?>.
                    For new user you can <?= Html::a('signup', ['user/signup']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('rbac-admin', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div> */ ?>
<!-- start: LOGIN -->
<div class="row">
	<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="logo margin-top-30">
			<?php /* <img src="<?= $this->theme->baseUrl ?>/assets/images/logo.png" alt="Clip-Two"/> */ ?>
			<h3><?= Html::encode($this->title) ?></h3>
		</div>
		<!-- start: LOGIN BOX -->
		<div class="box-login">
			<!-- <form class="form-login" action="index.html"> -->
			<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-login']); ?>
				<fieldset>
					<legend>
						Sign in to your account
					</legend>
					<p>
						Please enter your name and password to log in.
					</p>
					<div class="form-group">
						<span class="input-icon">
							<?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => 'Username']) ?>
							<i class="fa fa-user"></i> </span>
					</div>
					<div class="form-group form-actions">
						<span class="input-icon">
							<?= $form->field($model, 'password')->passwordInput(['class' => 'form-control password', 'placeholder' => 'Password']) ?>
							<i class="fa fa-lock"></i>
							If you forgot your password you can <?= Html::a('reset it', ['user/request-password-reset']) ?>.
						</span>
					</div>
					<div class="form-actions">
						<div class="checkbox clip-check check-primary">
							<?= $form->field($model, 'rememberMe')->checkbox() ?>
						</div>
					</div>
					<div class="form-group">
						<?= Html::submitButton(Yii::t('rbac-admin', 'Login'), ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
						<i class="fa fa-arrow-circle-right"></i>
					</div>
					<div class="new-account">
						For new user you can <?= Html::a('signup', ['user/signup']) ?>.
					</div>
				</fieldset>
			<?php ActiveForm::end(); ?>
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> ClipTheme</span>. <span>All rights reserved</span>
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- end: LOGIN BOX -->
	</div>
</div>
<!-- end: LOGIN -->
