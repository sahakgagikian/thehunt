<?php

namespace frontend\controllers;

use common\models\Job;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

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
                        'actions' => ['browse-categories', 'browse-jobs', 'job-alerts'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->getIdentity()->type === 'candidate';
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
}
