<?php

namespace backend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use common\models\user\Login;
use mdm\admin\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionLogin()
	{
		$this->layout = '@backend/themes/clip-admin/layouts/guest';

		if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

		$model = new Login();

        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                    'model' => $model,
            ]);
        }
	}

	/**
     * Logout
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->getUser()->logout();

        return $this->goHome();
    }

}
