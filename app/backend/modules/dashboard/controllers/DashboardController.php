<?php

namespace backend\modules\dashboard\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
		$this->view->params['pageTitle'] = 'Dashboard';
		$this->view->params['activeBar'] = 'dashboard';

        return $this->render('index');
    }

}
