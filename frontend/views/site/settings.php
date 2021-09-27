<?php

/* @var $this yii\web\View */
/* @var $model User */
/* @var $timezoneList array */
/* @var $currentUsersTimezone string */

use common\models\User;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Settings';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Settings</h3>
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
            <div class="col-12">
                <div class="page-login-form box">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group">
                        <?= $form->field($model, 'timezone')->widget(Select2::class, [
                            'data' => array_combine($timezoneList, $timezoneList),
                            'model' => $model,
                            'value' => [$currentUsersTimezone],
                        ]) ?>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-common log-btn mt-3',]) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->
