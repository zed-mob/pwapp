<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

?>
<!-- start: LOGIN -->
<div class="row">
	<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="logo margin-top-30">
		</div>
		<!-- start: LOGIN BOX -->
		<div class="box-login">
			<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-login']); ?>
				<fieldset>
					<legend>
						Sign in to your account
					</legend>
					<p>
						Please enter your name and password to log in.
					</p>
					<?= $form->field($model, 'username', [
						'template' => "{label}\n<span class='input-icon'>\n{input}\n
						<i class='fa fa-user'></i></span>\n{hint}\n{error}"
					])->textInput(['class' => 'form-control', 'placeholder' => 'Username']) ?>

					<?= $form->field($model, 'password', [
						'template' => "{label}\n<span class='input-icon'>\n{input}\n<i class='fa fa-lock'></i>
						".Html::a('I forgot my password', ['user/request-password-reset'], ['class' => 'forgot']).".
						\n</span>\n{hint}\n{error}"
					])->passwordInput(['class' => 'form-control password', 'placeholder' => 'Password']) ?>

					<?= $form->field($model, 'rememberMe', [
						'template' => "<div class='checkbox clip-check check-primary'>\n{input}\n
						<label for='remember'>
							Keep me signed in
						</label>\n{hint}\n{error}</div>\n".Html::submitButton('Login <i class="fa fa-arrow-circle-right"></i>', ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']),
						])->checkbox(['id' => 'remember'], false) ?>
				</fieldset>
			<?php ActiveForm::end(); ?>
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> PASS College</span>. <span>All rights reserved</span>
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- end: LOGIN BOX -->
	</div>
</div>
<!-- end: LOGIN -->
