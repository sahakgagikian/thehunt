<?php

namespace frontend\controllers;

use common\models\Candidate;
use common\models\Company;
use frontend\models\CandidateSignupForm;
use frontend\models\CompanySignupForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Register controller
 */
class RegisterController extends Controller
{
    /**
     * Displays candidate registration page.
     *
     * @return mixed
     */
    public function actionCandidateRegister()
    {
        $model = new CandidateSignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            $newCandidate = new Candidate();
            $newCandidate->username = Yii::$app->request->post()['CandidateSignupForm']['username'];
            $newCandidate->save();

            return $this->goHome();
        }

        return $this->render('candidate-register', compact('model'));
    }

    /**
     * Displays employer registration page.
     *
     * @return mixed
     */
    public function actionEmployerRegister()
    {
        $model = new CompanySignupForm();

        if ($model->load(Yii::$app->request->post())) {
            $model->logo = UploadedFile::getInstance($model, 'logo');

            if ($model->upload() && $model->signup()) {
                $newCompany = new Company();
                $newCompany->username = Yii::$app->request->post()['CompanySignupForm']['username'];
                $newCompany->logo = $model->logo;
                $newCompany->save();

                return $this->goHome();
            }

            return $this->goHome();
        }

        return $this->render('employer-register', compact('model'));
    }
}
