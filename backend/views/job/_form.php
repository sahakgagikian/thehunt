<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Job */
/* @var $form yii\widgets\ActiveForm */
/* @var $allCategoryIds array */
/* @var $allCompanyIds array */
?>

<div class="job-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = $model->getCategories()->select('title')->indexBy('id')->column(); ?>

    <?= $form->field($model, 'categoryIds')->widget(Select2::class, [
        'initValueText' => $data,
        'options' => ['multiple' => true, 'value' => array_keys($data)],
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 1,
            'language' => [
                'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
            ],
            'ajax' => [
                'url' => Url::to(['/job/category-list']),
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {q:params.term}; }')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function(data) { return data.text; }'),
            'templateSelection' => new JsExpression('function (data) { return data.text; }'),
        ],
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
