<?php

namespace backend\modules\dashboard\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
		$this->view->params['pageTitle'] = 'DASHBOARD';

        return $this->render('index');
    }

}
