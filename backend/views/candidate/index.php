<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CandidateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Candidate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
