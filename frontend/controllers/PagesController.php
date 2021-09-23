<?php

namespace frontend\controllers;

use common\models\Application;
use common\models\Candidate;
use common\models\Job;
use common\models\Resume;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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

    /**
     * Finds the Job model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Job the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findJobModel($id)
    {
        if (($model = Job::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionJobDetails($id)
    {
        $jobModel = $this->findJobModel($id);

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
     * @throws NotFoundHttpException
     */
    public function actionApply($id)
    {
        $candidateResumes = Candidate::getCurrentCandidate()->resumes;
        $jobToApply = $this->findJobModel($id);

        $applicationModel = new Application();
        $applicationModel->candidate_id = Candidate::getCurrentCandidate()->id;
        $applicationModel->job_id = $jobToApply->id;
        $applicationModel->company_id = $jobToApply->company_id;

        $message = '';

        if ($this->request->isPost) {
            if ($applicationModel->load(Yii::$app->request->post()) && $applicationModel->save()) {
                Yii::$app->session->setFlash('success', 'You have successfully applied for this job.');
            }
            if ($applicationModel->hasErrors()) {
                $message = $applicationModel->getFirstError('candidate_id');
                Yii::$app->session->setFlash('error', $message);
            }

            return $this->redirect(['application-result']);
        }

        return $this->render('apply', compact('applicationModel', 'candidateResumes'));
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
