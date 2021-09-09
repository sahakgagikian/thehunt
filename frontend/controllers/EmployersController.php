<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class EmployersController extends Controller
{
    /**
     * Displays job posting page.
     *
     * @return mixed
     */
    public function actionPostJob()
    {
        return $this->render('post-job');
    }

    /**
     * Displays job managing page.
     *
     * @return mixed
     */
    public function actionManageJobs()
    {
        return $this->render('manage-jobs');
    }

    /**
     * Displays application managing page.
     *
     * @return mixed
     */
    public function actionManageApplications()
    {
        return $this->render('manage-applications');
    }

    /**
     * Displays resume browsing page.
     *
     * @return mixed
     */
    public function actionBrowseResumes()
    {
        return $this->render('browse-resumes');
    }
}
