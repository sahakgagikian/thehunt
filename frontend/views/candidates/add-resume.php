<?php

/* @var $this yii\web\View */

/* @var $resumeModel Resume */
/* @var $educationModel Education */
/* @var $experienceModel Experience */
/* @var $skillModel Skill */

use common\models\Education;
use common\models\Experience;
use common\models\Resume;
use common\models\Skill;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Add resume';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Create Resume</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Content section Start -->
<section id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-xs-12">
                <div class="add-resume box">
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'form-ad',
                        ],
                    ]); ?>

                    <h3>Basic information</h3>
                    <div class="form-group">
                        <label class="control-label">Full name</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_name')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Full name'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_email')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Your@domain.com'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Profession Title</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_profession_title')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Headline (e.g. Front-end developer)'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_location')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Location, e.g'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Web</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_website')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Website address'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Desired salary per hour</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_desired_salary')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Salary, e.g. 85'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Age</label>
                        <?= $form
                            ->field($resumeModel, 'candidate_age')
                            ->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Years old'])
                            ->label(false) ?>
                    </div>
                    <div class="form-group">
                        <div class="button-group">
                            <div class="action-buttons">
                                <div class="upload-button">
                                    <button class="btn btn-common">Choose a cover image</button>
                                    <?= $form
                                        ->field($resumeModel, 'cover_image')
                                        ->fileInput([
                                            'id' => 'cover_img_file_2',
                                            'class' => 'form-control'])
                                        ->label(false) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Education</h3>
                    <div id="educations-container">
                        <button class="float-left add-education-form-button">
                            <i class="ti-plus"></i> Add New Education
                        </button>
                        <br>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="button-group">
                            <div class="action-buttons">
                                <div class="upload-button">
                                    <button class="btn btn-common">Choose a cover Logo</button>
                                    <?= $form
                                        ->field($resumeModel, 'educations_cover_image')
                                        ->fileInput([
                                            'class' => 'form-control'])
                                        ->label(false) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h3>Work Experience</h3>
                    <div id="experiences-container">
                        <button class="float-left add-experience-form-button">
                            <i class="ti-plus"></i> Add New Experience
                        </button>
                        <br>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="button-group">
                            <div class="action-buttons">
                                <div class="upload-button">
                                    <button class="btn btn-common">Choose a cover Logo</button>
                                    <?= $form
                                        ->field($resumeModel, 'experiences_cover_image')
                                        ->fileInput([
                                            'class' => 'form-control'])
                                        ->label(false) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h3>Skills</h3>
                    <div id="skills-container">
                        <button class="float-left add-skill-form-button">
                            <i class="ti-plus"></i> Add New Skill
                        </button>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <?= Html::submitButton(
                            'Save',
                            [
                                'class' => 'btn btn-common',
                                'name' => 'signup-button'
                            ])
                        ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->
