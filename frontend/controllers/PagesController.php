<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class PagesController extends Controller
{
    /**
     * Displays job page.
     *
     * @return mixed
     */
    public function actionJobPage()
    {
        return $this->render('job-page');
    }

    /**
     * Displays job details.
     *
     * @return mixed
     */
    public function actionJobDetails()
    {
        return $this->render('job-details');
    }

    /**
     * Displays privacy policy.
     *
     * @return mixed
     */
    public function actionPrivacyPolicy()
    {
        return $this->render('privacy-policy');
    }

    /**
     * Displays privacy FAQ.
     *
     * @return mixed
     */
    public function actionFaq()
    {
        return $this->render('faq');
    }

    /**
     * Displays privacy pricing.
     *
     * @return mixed
     */
    public function actionPricing()
    {
        return $this->render('pricing');
    }
}
