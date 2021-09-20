<?php

namespace frontend\controllers;

use common\models\Education;
use common\models\Experience;
use common\models\Resume;
use common\models\Skill;
use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Home controller
 */
class ResumeController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['add-resume', 'manage-resumes', 'resume', 'add-education-form', 'add-experience-form', 'add-skill-form', 'view-resume'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->type === 'candidate';
                        }
                    ],
                    [
                        'actions' => ['browse-resumes', 'view-resume'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->type === 'company';
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;
        $resumeModel = new Resume();
        $resumeModel->update_date = date("Y/m/d");

        if ($this->request->isPost && $resumeModel->load($this->request->post())) {
            $resumeModel->candidate_id = $currentUser->candidate->id;

            if (UploadedFile::getInstance($resumeModel, 'cover_image')) {
                $resumeModel->cover_image = UploadedFile::getInstance($resumeModel, 'cover_image');
                $resumeModel->upload();
                $resumeModel->save();
            }
            if (UploadedFile::getInstance($resumeModel, 'educations_cover_image')) {
                $resumeModel->educations_cover_image = UploadedFile::getInstance($resumeModel, 'educations_cover_image');
                $resumeModel->uploadEducation();
                $resumeModel->save();
            }
            if (UploadedFile::getInstance($resumeModel, 'experiences_cover_image')) {
                $resumeModel->experiences_cover_image = UploadedFile::getInstance($resumeModel, 'experiences_cover_image');
                $resumeModel->uploadExperience();
                $resumeModel->save();
            }

            if ($resumeModel->save()) {
                $this->handleAddonExistence('Education', $resumeModel, Education::class);
                $this->handleAddonExistence('Experience', $resumeModel, Experience::class);
                $this->handleAddonExistence('Skill', $resumeModel, Skill::class);

                return $this->goHome();
            }
        }

        return $this->render('add-resume', compact('resumeModel'));
    }

    public function handleAddonExistence($key, $resumeModel, $addonModelClassName)
    {
        if (array_key_exists($key, $this->request->post())) {
            foreach ($this->request->post()[$key] as $addonData) {
                $addonModel = new $addonModelClassName();

                if ($addonModel->load([$key => $addonData])) {
                    $addonModel->resume_id = $resumeModel->id;
                    $addonModel->save();
                }
            }
        }
    }

    /**
     * Renders education form.
     *
     * @return mixed
     */
    public function actionAddEducationForm()
    {
        $this->layout = false;

        return $this->render('add-education');
    }

    /**
     * Renders experience form.
     *
     * @return mixed
     */
    public function actionAddExperienceForm()
    {
        $this->layout = false;

        return $this->render('add-experience');
    }

    /**
     * Renders skill form.
     *
     * @return mixed
     */
    public function actionAddSkillForm()
    {
        $this->layout = false;

        return $this->render('add-skill');
    }

    /**
     * Displays resume managing page.
     *
     * @return mixed
     */
    public function actionManageResumes()
    {
        $currentCandidateId = Yii::$app->getUser()->identity->candidate->id;
        $candidateResumes = Resume::find()->with(['educations', 'experiences', 'skills'])->where(['candidate_id' => $currentCandidateId])->all();

        return $this->render('manage-resumes', compact('candidateResumes'));
    }

    /**
     * Displays resume view page.
     *
     * @return mixed
     */
    public function actionViewResume($id)
    {
        $currentResume = Resume::find()->with(['educations', 'experiences', 'skills'])->where(['id' => $id])->one();

        return $this->render('view-resume', compact('currentResume'));
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
