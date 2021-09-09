<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class ContactController extends Controller
{
    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        return $this->render('contact');
    }
}
