<?php

namespace frontend\controllers;

use frontend\models\LoginForm;
use Yii;
use yii\web\Controller;

/**
 * Login controller
 */
class LogController extends SiteController
{
    /**
     * Logs user in.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', compact('model'));
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->render('logout');
//        return $this->goHome();
    }
}
