<?php

namespace backend\controllers;

use backend\models\JobSearch;
use common\models\Category;
use common\models\Company;
use common\models\Job;
use common\models\JobsByCategory;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * JobController implements the CRUD actions for Job model.
 */
class JobController extends AdminController
{
    /**
     * Lists all Job models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JobSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', compact('searchModel', 'dataProvider'));
    }

    /**
     * Displays a single Job model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Job model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Job the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Job::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Creates a new Job model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Job();
        $allCategoryIds = Category::getAllCategoryIds();
        $allCompanyIds = Company::getAllCompanyIds();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                foreach ($model->categoryIds as $id) {
                    $jobOfCategory = new JobsByCategory();
                    $this->setJobOfCategory($jobOfCategory, $model, $id);
                }
                foreach ($model->categories as $category) {
                    $category->jobs_count = $category->categoryJobsCount;
                    $category->save();
                }

                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', compact('model', 'allCategoryIds', 'allCompanyIds'));
    }

    /**
     * Updates an existing Job model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $allCategoryIds = Category::getAllCategoryIds();
        $allCompanyIds = Company::getAllCompanyIds();
        $jobsByCategoryModel = JobsByCategory::find()->where(['job_id' => $id])->all();

        foreach ($model->categories as $category) {
            $category->jobs_count = $category->categoryJobsCount - 1;
            $category->save();
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            foreach ($jobsByCategoryModel as $jbc) {
                $jbc->delete();
            }

            foreach ($model->categoryIds as $id) {
                $jobOfCategory = new JobsByCategory();
                $this->setJobOfCategory($jobOfCategory, $model, $id);
                $newModel = $this->findModel($model->id);

                foreach ($newModel->categories as $category) {
                    $category->jobs_count = $category->categoryJobsCount;
                    $category->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', compact('model', 'allCategoryIds', 'allCompanyIds'));
    }

    private function setJobOfCategory(JobsByCategory $jobOfCategory, $job, $categoryId)
    {
        $jobOfCategory->job_id = $job->id;
        $jobOfCategory->category_id = $categoryId;
        $jobOfCategory->save();
    }

    /**
     * Deletes an existing Job model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        foreach ($model->categories as $category) {
            $category->jobs_count = $category->categoryJobsCount - 1;
            $category->save();
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    public function actionCategoryList($q = null)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'title' => '']];
        if (!is_null($q)) {
            $data = Category::find()->select('id, title')
                ->from('categories')
                ->where(['like', 'title', $q])
                ->limit(20)->all();
            $results = [];

            /* @var Category $datum */
            foreach ($data as $datum) {
                $results[] = ['id' => $datum->id, 'text' => $datum->title];
            }
            $out['results'] = $results;
        }

        return $out;
    }
}
