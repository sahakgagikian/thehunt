<?php

/* @var $this yii\web\View */
/* @var $model Job */
/* @var $allCategoryIds array */
/* @var $currentUser User */

use common\models\Job;
use common\models\User;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $currentUser->username . ' - Add job';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Post A Job</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Content section Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-xs-12">
                <div class="post-job box">
                    <h3 class="job-title">Post a new Job</h3>
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'options' => [
                            'class' => 'login-form'
                        ],
                    ]); ?>
                    <div class="form-group">
                        <label class="control-label">Job Title</label>
                        <?= $form
                            ->field($model, 'title')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Write job title',
                                'autofocus' => true])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <?= $form
                            ->field($model, 'location')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'e.g.London',
                                'autofocus' => true])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Working hours</label>
                        <?= $form
                            ->field($model, 'working_hours')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Full time, part time or something else',
                                'autofocus' => true])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <?= $form
                            ->field($model, 'categoryIds')
                            ->widget(Select2::class, [
                                'data' => $allCategoryIds,
                                'model' => $model,
                                'options' => [
                                    'class' => 'styled-select',
                                    'placeholder' => 'Choose categories...',
                                    'multiple' => true
                                ]])
                            ->label(false); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Open Jobs Count</label>
                        <?= $form
                            ->field($model, 'open_jobs_count')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Number Of Open Jobs',
                                'autofocus' => true])
                            ->label(false) ?>
                    </div>

                    <!--<div class="form-group">
                        <label class="control-label">Job Tags <span>(optional)</span></label>
                        <input type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management">
                        <p class="note">Comma separate tags, such as required skills or technologies, for this
                            job.</p>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                    </div>
                    <section id="editor">
                        <div id="summernote"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia
                                aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas
                                excepturi possimus similique veritatis nobis. Provident cupiditate delectus,
                                optio?</p></div>
                    </section>
                    <div class="form-group">
                        <label class="control-label">Application email / URL</label>
                        <input type="text" class="form-control" placeholder="Enter an email address or website URL">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Closing Date <span>(optional)</span></label>
                        <input type="text" class="form-control" placeholder="yyyy-mm-dd">
                    </div>
                    <div class="divider">
                        <h3 class="job-title">Company Details</h3>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input type="text" class="form-control" placeholder="Enter the name of the company">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Website <span>(optional)</span></label>
                        <input type="text" class="form-control" placeholder="http://">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tagline <span>(optional)</span></label>
                        <input type="text" class="form-control" placeholder="Briefly describe your company">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tagline <span>(optional)</span></label>
                        <input type="text" class="form-control" placeholder="Briefly describe your company">
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label form-control" for="validatedCustomFile">Choose
                            file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>-->

                    <div class="form-group">
                        <?= Html::submitButton('Submit your job', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->
