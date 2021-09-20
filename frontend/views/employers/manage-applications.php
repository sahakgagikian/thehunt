<?php

/* @var $this yii\web\View */
/* @var $currentCompanyApplications array */
/* @var $currentUser User */

use common\models\User;
use yii\helpers\Url;

$this->title = $currentUser->username . ' - Manage applications';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Manage Applications</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="right-sideabr">
                    <h4>Manage Account</h4>
                    <ul class="list-item">
                        <li><a href="resume.html">My Resume</a></li>
                        <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                        <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                        <li><a class="active" href="manage-applications.php">Manage Applications</a></li>
                        <li><a href="job-alerts.html">Job Alerts</a></li>
                        <li><a href="change-password.html">Change Password</a></li>
                        <li><a href="index.html">Sing Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="job-alerts-item">
                    <h3 class="alerts-title">Manage applications</h3>
                    <?php foreach ($currentCompanyApplications as $application): ?>
                        <a href="<?= Url::to(['employers/view-application/' . $application->id]) ?>">
                            <div class="applications-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thums">
                                            <img src="<?= $currentUser->company->imagePath ?>" alt="">
                                        </div>
                                        <h3><?= $application->job->title ?></h3>
                                        <span><?= $application->candidate->username ?></span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time"><?= $application->job->working_hours ?></span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Nov 14th, 2017</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Rejected</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <br>
                    <!-- Start Pagination -->
                    <ul class="pagination">
                        <li class="active"><a href="#" class="btn-prev"><i class="lni-angle-left"></i> prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a href="#" class="btn-next">Next <i class="lni-angle-right"></i></a></li>
                    </ul>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
