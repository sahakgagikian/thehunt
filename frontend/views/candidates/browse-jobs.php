<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $allJobs array */

$this->title = 'Browse jobs';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Browse Job</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Job Browse Section Start -->
<section class="job-browse section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="wrap-search-filter row">
                    <div class="col-lg-5 col-md-5 col-xs-12">
                        <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                    </div>
                    <div class="col-lg-5 col-md-5 col-xs-12">
                        <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12">
                        <button type="submit" class="btn btn-common float-right">Filter</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
                <?php foreach ($allJobs as $job): ?>
                    <a class="job-listings" href="<?= Url::to(['pages/job-details/' . $job->id]) ?>">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="job-company-logo">
                                    <img src="<?= $job->company->imageUrl ?>" style="width: 50px; height: 50px" alt="">
                                </div>
                                <div class="job-details">
                                    <h3><?= $job['title'] ?></h3>
                                    <span class="company-neme"><?= $job->company->username ?></span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                                <span class="btn-open"><?= $job['open_jobs_count'] ?> Open Jobs</span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <div class="location">
                                    <i class="lni-map-marker"></i> <?= $job['location'] ?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <span class="btn-full-time"><?= $job['working_hours'] ?></span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <span class="btn-apply">Apply Now</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
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
</section>
<!-- Job Browse Section End -->
