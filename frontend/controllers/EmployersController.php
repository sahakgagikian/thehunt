<?php

namespace frontend\controllers;

use common\models\Application;
use common\models\Category;
use common\models\Company;
use common\models\Job;
use common\models\JobsByCategory;
use common\models\Resume;
use common\models\User;
use frontend\models\ApplicationSearch;
use Yii;
use yii\db\ActiveQuery;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Employers controller
 */
class EmployersController extends Controller
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
                        'actions' => ['manage-applications', 'manage-jobs', 'post-job', 'view-application', 'browse-resumes', 'view-resume'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->role === User::COMPANY;
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
     * Displays job posting page.
     *
     * @return mixed
     */
    public function actionPostJob()
    {
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;
        $allCategoryIds = Category::getAllCategoryIds();
        $model = new Job();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->company_id = $currentUser->company->id;
                if ($model->save()) {
                    foreach ($model->categoryIds as $id) {
                        $jobOfCategory = new JobsByCategory();
                        $jobOfCategory->job_id = $model->id;
                        $jobOfCategory->category_id = $id;
                        $jobOfCategory->save();
                    }
                    foreach ($model->categories as $category) {
                        $category->jobs_count = $category->categoryJobsCount;
                        $category->save();
                    }

                    return $this->redirect(['home/index']);
                }
            }
        }

        return $this->render('post-job', compact('model', 'allCategoryIds', 'currentUser'));
    }

    /**
     * Displays job managing page.
     *
     * @return mixed
     */
    public function actionManageJobs()
    {
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;

        return $this->render('manage-jobs', compact('currentUser'));
    }

    /**
     * Displays application managing page.
     *
     * @return mixed
     */
    public function actionManageApplications()
    {
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;
        $searchModel = new ApplicationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('manage-applications', compact('searchModel', 'dataProvider', 'currentUser'));
    }

    /**
     * Displays application view page.
     *
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionViewApplication($id)
    {
        /* @var User $currentUser */
        /* @var Application $currentApplication */

        $currentUser = Yii::$app->getUser()->identity;
        $currentApplication = Application::find()->with(['resume'])->where(['id' => $id])->one();
        $currentResume = $currentApplication->resume;

        if ($currentApplication->job->company->id !== $currentUser->company->id) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view-application', compact('currentApplication', 'currentResume'));
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

        $currentResume = Resume::getResume($id, 'company');
        if (!$currentResume) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('/candidates/view-resume', compact('currentResume'));
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
