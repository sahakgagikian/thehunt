<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * JobController implements the CRUD actions for Job model.
 */
class AdminController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return  [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}
