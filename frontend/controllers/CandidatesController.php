<?php

namespace frontend\controllers;

use common\models\Candidate;
use common\models\Education;
use common\models\Experience;
use common\models\Job;
use common\models\Resume;
use common\models\Skill;
use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * Candidates controller
 */
class CandidatesController extends Controller
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
                        'actions' => ['view-resume'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->role === User::COMPANY;
                        }
                    ],
                    [
                        'actions' => [
                            'browse-categories',
                            'browse-jobs',
                            'job-alerts',
                            'add-resume',
                            'manage-resumes',
                            'resume',
                            'add-education-form',
                            'add-experience-form',
                            'add-skill-form',
                            'view-resume'
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->role === User::CANDIDATE;
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
     * Displays job browsing page.
     *
     * @return mixed
     */
    public function actionBrowseJobs()
    {
        return $this->render('browse-jobs', [
            'allJobs' => Job::find()->with(['company'])->all(),
        ]);
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
            }
            if (UploadedFile::getInstance($resumeModel, 'educations_cover_image')) {
                $resumeModel->educations_cover_image = UploadedFile::getInstance($resumeModel, 'educations_cover_image');
                $resumeModel->uploadEducation();
            }
            if (UploadedFile::getInstance($resumeModel, 'experiences_cover_image')) {
                $resumeModel->experiences_cover_image = UploadedFile::getInstance($resumeModel, 'experiences_cover_image');
                $resumeModel->uploadExperience();
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
//        $this->layout = false;

        return $this->renderAjax('add-education');
    }

    /**
     * Renders experience form.
     *
     * @return mixed
     */
    public function actionAddExperienceForm()
    {
//        $this->layout = false;

        return $this->renderAjax('add-experience');
    }

    /**
     * Renders skill form.
     *
     * @return mixed
     */
    public function actionAddSkillForm()
    {
//        $this->layout = false;

        return $this->renderAjax('add-skill');
    }

    /**
     * Displays resume managing page.
     *
     * @return mixed
     */
    public function actionManageResumes()
    {
        $candidateResumes = Candidate::getCurrentCandidate()->resumes;

        return $this->render('manage-resumes', compact('candidateResumes'));
    }

    /**
     * Displays resume view page.
     *
     * @return mixed
     * @throws NotFoundHttpException when user tries to view resume that doesn't belong to them, or it is not sent to them
     */
    public function actionViewResume($id)
    {
        /* @var Resume $currentResume */
        $currentResume = Resume::getResume($id, 'candidate');

        if (!$currentResume) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view-resume', compact('currentResume'));
    }
}
