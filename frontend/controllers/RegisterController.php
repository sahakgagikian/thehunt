<?php

namespace frontend\controllers;

use common\models\Candidate;
use common\models\Company;
use DateTimeZone;
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
        $timezoneList = DateTimeZone::listIdentifiers();

        if ($model->load(Yii::$app->request->post()) && $user = $model->signup()) {
            $newCandidate = new Candidate();
            $newCandidate->user_id = $user->id;
            $newCandidate->username = $user->username;
            $newCandidate->save();

            return $this->goHome();
        }

        return $this->render('candidate-register', compact('model', 'timezoneList'));
    }

    /**
     * Displays employer registration page.
     *
     * @return mixed
     */
    public function actionEmployerRegister()
    {
        $model = new CompanySignupForm();
        $timezoneList = DateTimeZone::listIdentifiers();

        if ($model->load(Yii::$app->request->post())) {
            $model->logo = UploadedFile::getInstance($model, 'logo');

            if ($model->upload() && $user = $model->signup()) {
                $newCompany = new Company();
                $newCompany->user_id = $user->id;
                $newCompany->username = $user->username;
                $newCompany->logo = $model->logo;
                $newCompany->save();

                return $this->goHome();
            }

            return $this->goHome();
        }

        return $this->render('employer-register', compact('model', 'timezoneList'));
    }
}
