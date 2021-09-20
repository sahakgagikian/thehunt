<?php

namespace frontend\controllers;

use common\models\Application;
use common\models\Candidate;
use common\models\Job;
use common\models\Resume;
use Yii;
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
    public function actionJobDetails($id)
    {
        $jobModel = Job::find()->where(['id' => $id])->one();

        return $this->render('job-details', compact('jobModel'));
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

    /**
     * Displays privacy pricing.
     *
     * @return mixed
     */
    public function actionApply($id)
    {
        $currentCandidateId = Yii::$app->getUser()->identity->candidate->id;
        $candidateResumes = Resume::find()->with(['educations', 'experiences', 'skills'])->where(['candidate_id' => $currentCandidateId])->all();

        $newApplicationModel = new Application();
        $newApplicationModel->candidate_id = Yii::$app->user->identity->candidate->id;
        $newApplicationModel->job_id = Job::find()->where(['id' => $id])->one()->id;

        $successMessage = 'You have successfully applied for this job.';
        $errors = '';

        if ($this->request->isPost) {
            if ($newApplicationModel->load(Yii::$app->request->post()) && $newApplicationModel->save()) {
                return $this->render('application-result', compact('successMessage'));
            }
            if ($newApplicationModel->hasErrors()) {
                foreach (array_unique($newApplicationModel->getErrorSummary(true)) as $errorMessage) {
                    $errors .= $errorMessage . '<br>';
                }
            }

            return $this->render('application-result', ['errorMessage' => $errors]);
        }

        return $this->render('apply', [
            'applicationModel' => $newApplicationModel,
            'candidateResumes' => $candidateResumes,
        ]);
    }

    /**
     * Displays privacy pricing.
     *
     * @return mixed
     */
    public function actionApplicationResult()
    {
        return $this->render('application-result');
    }
}
