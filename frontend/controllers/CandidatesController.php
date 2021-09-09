<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class CandidatesController extends Controller
{
    /**
     * Displays job browsing page.
     *
     * @return mixed
     */
    public function actionBrowseJobs()
    {
        return $this->render('browse-jobs');
    }

    /**
     * Displays category browsing page.
     *
     * @return mixed
     */
    public function actionBrowseCategories()
    {
        return $this->render('browse-categories');
    }

    /**
     * Displays job alerts page.
     *
     * @return mixed
     */
    public function actionJobAlerts()
    {
        return $this->render('job-alerts');
    }
}
