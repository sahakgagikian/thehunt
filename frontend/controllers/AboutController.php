<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class AboutController extends Controller
{
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
