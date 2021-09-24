<?php

use common\models\Category;
use kartik\select2\Select2;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'category_id',
                'value' => function ($item) {
                    $value = '';
                    foreach ($item->categories as $category) {
                        $value .= $value ? ', ' : '';
                        $value .= $category->title;
                    }
                    return $value;
                },
                'filter' => Select2::widget(
                    [
                        'model' => $searchModel,
                        'attribute' => 'categoryId',
                        'data' => Category::find()->select(['title'])->indexBy('id')->column(),
                        'options' => [
                            'placeholder' => '',
                            'multiple' => true,
                        ]
                    ]
                ),
            ],

            'id',
            'title',

            [
                'attribute' => 'company',
                'value' => function ($item) {
                    return $item->company->username;
                },
            ],

            'open_jobs_count',
            'location',
            'working_hours',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
