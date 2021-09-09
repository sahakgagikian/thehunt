<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'TheHunt - Job Portal';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Manage Resumes</h3>
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
                        <li><a href="../../../backend/web/index.php">My Resume</a></li>
                        <li><a href="../../../backend/web/index.php">Bookmarked Jobs</a></li>
                        <li><a href="../../../backend/web/index.php">Notifications <span class="notinumber">2</span></a></li>
                        <li><a href="../../../backend/web/index.php">Manage Applications</a></li>
                        <li><a class="active" href="<?= Url::to(['resume/manage-resumes']) ?>">Manage Resume</a></li>
                        <li><a href="../candidates/job-alerts.php">Job Alerts</a></li>
                        <li><a href="../../../backend/web/index.php">Change Password</a></li>
                        <li><a href="../../../backend/web/index.php">Sing Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="job-alerts-item candidates">
                    <h3 class="alerts-title">Manage Resumes</h3>
                    <div class="manager-resumes-item">
                        <div class="manager-content">
                            <a href="../../../backend/web/index.php"><img class="resume-thumb" src="assets/img/jobs/avatar-1.jpg" alt=""></a>
                            <div class="manager-info">
                                <div class="manager-name">
                                    <h4><a href="#">Zane Joyner</a></h4>
                                    <h5>Front-end developer</h5>
                                </div>
                                <div class="manager-meta">
                                    <span class="location"><i class="lni-map-marker"></i> Cupertino, CA, USA</span>
                                    <span class="rate"><i class="lni-alarm-clock"></i> $55 per hour</span>
                                </div>
                            </div>
                        </div>
                        <div class="update-date">
                            <p class="status">
                                <strong>Updated on:</strong> Fab 22, 2020
                            </p>
                            <div class="action-btn">
                                <a class="btn btn-xs btn-gray" href="#">Hide</a>
                                <a class="btn btn-xs btn-gray" href="#">Edit</a>
                                <a class="btn btn-xs btn-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="manager-resumes-item">
                        <div class="manager-content">
                            <a href="../../../backend/web/index.php"><img class="resume-thumb" src="assets/img/jobs/avatar-1.jpg" alt=""></a>
                            <div class="manager-info">
                                <div class="manager-name">
                                    <h4><a href="#">Zane Joyner</a></h4>
                                    <h5>Front-end developer</h5>
                                </div>
                                <div class="manager-meta">
                                    <span class="location"><i class="lni-map-marker"></i> Cupertino, CA, USA</span>
                                    <span class="rate"><i class="lni-alarm-clock"></i> $55 per hour</span>
                                </div>
                            </div>
                        </div>
                        <div class="update-date">
                            <p class="status">
                                <strong>Updated on:</strong> Fab 22, 2020
                            </p>
                            <div class="action-btn">
                                <a class="btn btn-xs btn-gray" href="#">Hide</a>
                                <a class="btn btn-xs btn-gray" href="#">Edit</a>
                                <a class="btn btn-xs btn-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="manager-resumes-item">
                        <div class="manager-content">
                            <a href="../../../backend/web/index.php"><img class="resume-thumb" src="assets/img/jobs/avatar-1.jpg" alt=""></a>
                            <div class="manager-info">
                                <div class="manager-name">
                                    <h4><a href="#">Zane Joyner</a></h4>
                                    <h5>Front-end developer</h5>
                                </div>
                                <div class="manager-meta">
                                    <span class="location"><i class="lni-map-marker"></i> Cupertino, CA, USA</span>
                                    <span class="rate"><i class="lni-alarm-clock"></i> $55 per hour</span>
                                </div>
                            </div>
                        </div>
                        <div class="update-date">
                            <p class="status">
                                <strong>Updated on:</strong> Fab 22, 2020
                            </p>
                            <div class="action-btn">
                                <a class="btn btn-xs btn-gray" href="#">Hide</a>
                                <a class="btn btn-xs btn-gray" href="#">Edit</a>
                                <a class="btn btn-xs btn-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="manager-resumes-item">
                        <div class="manager-content">
                            <a href="../../../backend/web/index.php"><img class="resume-thumb" src="assets/img/jobs/avatar-1.jpg" alt=""></a>
                            <div class="manager-info">
                                <div class="manager-name">
                                    <h4><a href="#">Zane Joyner</a></h4>
                                    <h5>Front-end developer</h5>
                                </div>
                                <div class="manager-meta">
                                    <span class="location"><i class="lni-map-marker"></i> Cupertino, CA, USA</span>
                                    <span class="rate"><i class="lni-alarm-clock"></i> $55 per hour</span>
                                </div>
                            </div>
                        </div>
                        <div class="update-date">
                            <p class="status">
                                <strong>Updated on:</strong> Fab 22, 2020
                            </p>
                            <div class="action-btn">
                                <a class="btn btn-xs btn-gray" href="#">Hide</a>
                                <a class="btn btn-xs btn-gray" href="#">Edit</a>
                                <a class="btn btn-xs btn-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-common btn-sm" href="add-resume.php">Add new resume</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
