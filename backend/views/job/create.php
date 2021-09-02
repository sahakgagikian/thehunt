<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $allCategoryIds array */
/* @var $allCompanyIds array */
/* @var $model common\models\Job */

$this->title = 'Create Job';
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allCategoryIds' => $allCategoryIds,
        'allCompanyIds' => $allCompanyIds
    ]) ?>

</div>
