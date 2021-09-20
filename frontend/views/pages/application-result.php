<?php

/* @var $this yii\web\View */
/* @var $successMessage string */
/* @var $errorMessage string */

$this->title = 'Application result';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h1>
                        <?php echo empty($errorMessage) ? $successMessage : $errorMessage; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>