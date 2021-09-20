<?php

namespace frontend\controllers;

use common\models\Application;
use common\models\Category;
use common\models\Company;
use common\models\Job;
use common\models\JobsByCategory;
use common\models\User;
use Yii;
use yii\db\ActiveQuery;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

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
                        'actions' => ['manage-applications', 'manage-jobs', 'post-job', 'view-application'],
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
     * Displays job posting page.
     *
     * @return mixed
     */
    public function actionPostJob()
    {
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;
        $model = new Job();
        $model->company_id = Company::find()->select('id')
            ->where(['companies.user_id' => $currentUser->id])->one()->id;
        $allCategoryIds = ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'title');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
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
        $companyJobIds = ArrayHelper::getColumn($currentUser->company->jobs, 'id');

        $currentCompanyApplications = Application::find()
            ->innerJoinWith([
                'job' => function (ActiveQuery $query) use ($companyJobIds) {
                    return $query->andWhere(['in', 'jobs.id', $companyJobIds]);
                }])
            ->all();

        return $this->render('manage-applications', compact('currentCompanyApplications', 'currentUser'));
    }

    /**
     * Displays application view page.
     *
     * @return mixed
     */
    public function actionViewApplication($id)
    {
        /* @var User $currentUser */
/*
        $currentUser = Yii::$app->user->identity;
        $companyJobIds = ArrayHelper::getColumn($currentUser->company->jobs, 'id');

        $currentCompanyApplications = Application::find()
            ->innerJoinWith([
                'job' => function (ActiveQuery $query) use ($companyJobIds) {
                    return $query->andWhere(['in', 'jobs.id', $companyJobIds]);
                }])
            ->all();*/
        $currentApplication = Application::find()->with(['resume'])->where(['id' => $id])->one();
        $currentResume = $currentApplication->resume;

        return $this->render('view-application', compact('currentApplication', 'currentResume'));
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
