<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class ResumeController extends Controller
{
    /**
     * Displays resume page.
     *
     * @return mixed
     */
    public function actionResume()
    {
        return $this->render('resume');
    }

    /**
     * Displays add resume page.
     *
     * @return mixed
     */
    public function actionAddResume()
    {
        return $this->render('add-resume');
    }

    /**
     * Displays resume managing page.
     *
     * @return mixed
     */
    public function actionManageResumes()
    {
        return $this->render('manage-resumes');
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
