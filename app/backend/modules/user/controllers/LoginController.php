<?php

namespace backend\modules\user\controllers;

use Yii;
use common\models\user\User;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionLogin()
	{
		$model = new User();

		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
			// form inputs are valid, do something here
			return;
			}
		}

		return $this->render('login', [
				'model' => $model,
			]);
	}
}
