<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Job */
/* @var $form yii\widgets\ActiveForm */
/* @var $allCategoryIds array */
/* @var $allCompanyIds array */
?>

<div class="job-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryIds')->widget(Select2::class, [
        'data' => $allCategoryIds,
        'model' => $model,
        'options' => [
            'placeholder' => 'Choose categories...',
            'multiple' => true
        ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->widget(Select2::class, [
        'data' => $allCompanyIds,
        'model' => $model,
        'options' => [
            'placeholder' => 'Choose company...',
            'multiple' => false
        ]
    ]); ?>

    <?= $form->field($model, 'open_jobs_count')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_hours')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
