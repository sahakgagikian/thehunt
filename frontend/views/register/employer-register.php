<?php

/* @var $this yii\web\View */

/* @var $model CandidateSignupForm */

use frontend\models\CandidateSignupForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Register as employer';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Create Your account</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Content section Start -->
<section id="content" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="page-login-form box">
                    <h3>Create Your account</h3>

                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'options' => [
                            'class' => 'login-form',
                        ],
                        'enableClientValidation' => true,
                    ]); ?>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="lni-user"></i>
                            <?= $form
                                ->field($model, 'username')
                                ->textInput([
                                    'class' => 'form-control',
                                    'placeholder' => 'Username'])
                                ->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="lni-envelope"></i>
                            <?= $form
                                ->field($model, 'email')
                                ->textInput([
                                    'class' => 'form-control',
                                    'placeholder' => 'Email Address'])
                                ->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="lni-files"></i>
                            <?= $form
                                ->field($model, 'logo')
                                ->fileInput([
                                    'class' => 'form-control',
                                    'style' => 'padding-top: 8px'])
                                ->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="lni-lock"></i>
                            <?= $form
                                ->field($model, 'password')
                                ->passwordInput([
                                    'class' => 'form-control',
                                    'placeholder' => 'Password'])
                                ->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton(
                            'Register',
                            [
                                'class' => 'btn btn-common log-btn mt-3',
                                'name' => 'signup-button'
                            ])
                        ?>
                    </div>
                    <p class="text-center">Already have an account?<a href="<?= Url::to(['log/login']) ?>"> Sign In</a></p>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->
