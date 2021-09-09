<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class HomeController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays second homepage.
     *
     * @return mixed
     */
    public function actionIndex2()
    {
        return $this->render('index2');
    }
}
