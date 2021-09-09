<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'TheHunt - Job Portal';
?>
<!-- Browse Catagories Section Start -->
<section class="browse-catagories section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Browse by Catagories</h2>
            <p>As the world's #1 job site, with over 200 million unique visitors every month from over 60 different countries</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                    <div class="img-box-content">
                        <h4>Healthcare</h4>
                        <span>3420 Jobs</span>
                    </div>
                    <div class="img-box-background">
                        <img class="img-fluid" src="/frontend/web/img/catagories/img1.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                            <div class="img-box-content">
                                <h4>Education</h4>
                                <span>2379 Jobs</span>
                            </div>
                            <div class="img-box-background">
                                <img class="img-fluid" src="/frontend/web/img/catagories/img2.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                            <div class="img-box-content">
                                <h4>Business</h4>
                                <span>1560 Jobs</span>
                            </div>
                            <div class="img-box-background">
                                <img class="img-fluid" src="/frontend/web/img/catagories/img3.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                            <div class="img-box-content">
                                <h4>Finance</h4>
                                <span>2000 Jobs</span>
                            </div>
                            <div class="img-box-background">
                                <img class="img-fluid" src="/frontend/web/img/catagories/img4.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                            <div class="img-box-content">
                                <h4>Support</h4>
                                <span>3340 Jobs</span>
                            </div>
                            <div class="img-box-background">
                                <img class="img-fluid" src="/frontend/web/img/catagories/img5.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <a href="<?= Url::to(['candidates/browse-categories']) ?>" class="img-box">
                    <div class="img-box-content">
                        <h4>Law</h4>
                        <span>1200 Jobs</span>
                    </div>
                    <div class="img-box-background">
                        <img class="img-fluid" src="/frontend/web/img/catagories/img6.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-common">browse more</a>
            </div>
        </div>
    </div>
</section>
<!-- Browse Catagories Section End -->

<!-- Featured Section Start -->
<section id="featured" class="section bg-cyan">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Jobs</h2>
            <p>As the world's #1 job site, with over 200 million unique visitors every month from over 60 different countries</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Software Engineer</a></h3>
                        <p class="brand">MizTech</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Graphic Designer</a></h3>
                        <p class="brand">Hunter Inc.</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img3.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Managing Director</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img4.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Software Engineer</a></h3>
                        <p class="brand">AmazeSoft</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img5.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Graphic Designer</a></h3>
                        <p class="brand">Bingo</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="/frontend/web/img/features/img6.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Managing Director</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="<?= Url::to(['pages/job-page']) ?>" class="btn btn-common">Browse All Jobs</a>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Featured Listings Start -->
<section class="featured-lis section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Top Hiring Companies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class=" wow fadeIn" data-wow-delay="0.5s">
            <div id="new-products" class="owl-carousel">
                <div class="item">
                    <div class="product-item">
                        <div class="icon-thumb">
                            <img src="/frontend/web/img/product/img1.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="#">AmazeTech</a></h3>
                            <div class="tags">
                                <span><i class="lni-briefcase"></i> Software Company</span>
                                <span><i class="lni-map-marker"></i> New York</span>
                            </div>
                            <a href="#" class="btn btn-common">5 Open Job</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-item">
                        <div class="icon-thumb">
                            <img src="/frontend/web/img/product/img2.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="#">MagNews</a></h3>
                            <div class="tags">
                                <span><i class="lni-briefcase"></i> Software Company</span>
                                <span><i class="lni-map-marker"></i> New York</span>
                            </div>
                            <a href="#" class="btn btn-common">5 Open Job</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-item">
                        <div class="icon-thumb">
                            <img src="/frontend/web/img/product/img3.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="#">Facebook</a></h3>
                            <div class="tags">
                                <span><i class="lni-briefcase"></i> Software Company</span>
                                <span><i class="lni-map-marker"></i> New York</span>
                            </div>
                            <a href="#" class="btn btn-common">5 Open Job</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-item">
                        <div class="icon-thumb">
                            <img src="/frontend/web/img/product/img1.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="#">Play Store</a></h3>
                            <div class="tags">
                                <span><i class="lni-briefcase"></i> Software Company</span>
                                <span><i class="lni-map-marker"></i> New York</span>
                            </div>
                            <a href="#" class="btn btn-common">5 Open Job</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-item">
                        <div class="icon-thumb">
                            <img src="/frontend/web/img/product/img2.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="#">MagNews</a></h3>
                            <div class="tags">
                                <span><i class="lni-briefcase"></i> Software Company</span>
                                <span><i class="lni-map-marker"></i> New York</span>
                            </div>
                            <a href="#" class="btn btn-common">5 Open Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Listings End -->

<!-- Listings Section Start -->
<section id="job-listings" class="section bg-cyan">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Job Post</h2>
            <p>As the world's #1 job site, with over 200 million unique visitors every month from over 60 different countries</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <a class="job-listings" href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="/frontend/web/img/features/img1.png" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
                      AmazeSoft
                    </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                  <span class="btn-open">
                    7 Open Jobs
                  </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="/frontend/web/img/features/img2.png" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
                      AmazeSoft
                    </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                  <span class="btn-open">
                    7 Open Jobs
                  </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="/frontend/web/img/features/img3.png" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
                      AmazeSoft
                    </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                  <span class="btn-open">
                    7 Open Jobs
                  </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="/frontend/web/img/features/img4.png" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
                      AmazeSoft
                    </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                  <span class="btn-open">
                    7 Open Jobs
                  </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-common">Load more listing</a>
            </div>
        </div>
    </div>
</section>
<!-- Listings Section End -->

<!-- How It Work Section Start -->
<section class="how-it-works section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How It Works?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="work-process">
              <span class="process-icon">
                <i class="lni-user"></i>
              </span>
                    <h4>Create an Account</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-2">
              <span class="process-icon">
                <i class="lni-search"></i>
              </span>
                    <h4>Search Jobs</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-3">
              <span class="process-icon">
                <i class="lni-cup"></i>
              </span>
                    <h4>Apply</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Work Section End -->

<!-- Apply Us Section Start -->
<div id="apply">
    <div class="container-fulid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12 no-padding">
                <div class="recruiter item-box">
                    <div class="content-inner">
                        <h5>I'm</h5>
                        <h3>Recruiter</h3>
                        <p>Post a job to tell us about your project. We'll quickly match you with <br> the right freelancers find place best.</p>
                        <a href="#" class="btn btn-border-filled">Post a Job</a>
                    </div>
                    <div class="img-thumb">
                        <i class="lni-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 no-padding">
                <div class="jobseeker item-box">
                    <div class="content-inner">
                        <h5>I'm</h5>
                        <h3>Jobseeker!</h3>
                        <p>Post a job to tell us about your project. We'll quickly match you with <br> the right freelancers find place best.</p>
                        <a href="#" class="btn btn-border-filled">Browser Jobs</a>
                    </div>
                    <div class="img-thumb">
                        <i class="lni-leaf"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Apply Us Section End -->

<!-- Start Pricing Table Section -->
<div id="pricing" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Pricing Plan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>

        <div class="row pricing-tables">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-defult">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-rocket"></i>
                        </div>
                        <h2>Professional</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>0<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table pricing-active border-color-red">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-drop"></i>
                        </div>
                        <h2>Advance</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>20<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-green">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <h2>Premium</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>40<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Pricing Table Section -->

<!-- Counter Section Start -->
<section id="counter" class="section bg-gray">
    <div class="container">
        <div class="row">
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni-home"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">800</span></h3>
                        <p>Jobs Posted</p>
                    </div>
                </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni-briefcase"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">80</span></h3>
                        <p>All Companies</p>
                    </div>
                </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni-pencil-alt"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">900</span></h3>
                        <p>Resumes</p>
                    </div>
                </div>
            </div>
            <!-- End counter -->
            <!-- Start counter -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni-save"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">1200</span></h3>
                        <p>Applications</p>
                    </div>
                </div>
            </div>
            <!-- End counter -->
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Blog Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Blog Post</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">Tips to write an impressive resume online for beginner</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">Let's explore 5 cool new features in JobBoard theme</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">How to convince recruiters and get your dream job</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
        </div>
    </div>
</section>
<!-- blog Section End -->

<!-- Subcribe Section Start -->
<div id="subscribe" class="section bg-cyan">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="subscribe-form">
                    <div class="form-wrapper">
                        <div class="sub-title">
                            <h3>Subscribe Our Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et metus dolor sit amet,.</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-12 form-line">
                                    <div class="form-group form-search">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                        <button type="submit" class="btn btn-common btn-search">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="img-sub">
                    <img class="img-fluid" src="/frontend/web/img/sub.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subcribe Section End -->

<!-- How It Work Section Start -->
<section class="how-it-works section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How It Works?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process">
              <span class="process-icon">
                <i class="lni-user"></i>
              </span>
                    <h4>Create an Account</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-2">
              <span class="process-icon">
                <i class="lni-search"></i>
              </span>
                    <h4>Search Jobs</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-3">
              <span class="process-icon">
                <i class="lni-cup"></i>
              </span>
                    <h4>Apply</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Work Section End -->

<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Latest Jobs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">UX Designer</a></h3>
                        <p class="brand">MizTech</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">UI Designer</a></h3>
                        <p class="brand">Hunter Inc.</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img3.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Web Developer</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img4.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">UX Designer</a></h3>
                        <p class="brand">AmazeSoft</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img5.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Digital Marketer</a></h3>
                        <p class="brand">Bingo</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="/frontend/web/img/features/img6.png" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="<?= Url::to(['pages/job-details']) ?>">Web Developer</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni-map-marker"></i> New York</span>
                            <span><i class="lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                    <div class="save-icon">
                        <a href="#"><i class="lni-heart-filled"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="<?= Url::to(['pages/job-page']) ?>" class="btn btn-common">Browse All Jobs</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->

<!-- Testimonial Section Start -->
<section id="testimonial" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Clients Review</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div id="testimonials" class="touch-slider owl-carousel">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="author">
                                <div class="img-thumb">
                                    <img src="/frontend/web/img/testimonial/img1.png" alt="">
                                </div>
                            </div>
                            <div class="content-inner">
                                <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                <div class="author-info">
                                    <h2><a href="#">Jessica</a></h2>
                                    <span>Senior Accountant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="author">
                                <div class="img-thumb">
                                    <img src="/frontend/web/img/testimonial/img2.png" alt="">
                                </div>
                            </div>
                            <div class="content-inner">
                                <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                <div class="author-info">
                                    <h2><a href="#">John Doe</a></h2>
                                    <span>Project Menager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="author">
                                <div class="img-thumb">
                                    <img src="/frontend/web/img/testimonial/img3.png" alt="">
                                </div>
                            </div>
                            <div class="content-inner">
                                <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                <div class="author-info">
                                    <h2><a href="#">Helen</a></h2>
                                    <span>Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Start Pricing Table Section -->
<div id="pricing" class="section bg-gray">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Pricing Plan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>

        <div class="row pricing-tables">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-defult">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-rocket"></i>
                        </div>
                        <h2>Professional</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>0<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table pricing-active border-color-red">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-drop"></i>
                        </div>
                        <h2>Advance</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>20<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-green">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <h2>Premium</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>40<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Pricing Table Section -->

<!-- Blog Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Blog Post</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">Tips to write an impressive resume online for beginner</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">Let's explore 5 cool new features in JobBoard theme</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?= Url::to(['blog/single-post']) ?>">
                            <img src="/frontend/web/img/blog/img3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="<?= Url::to(['blog/single-post']) ?>">How to convince recruiters and get your dream job</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.</p>
                    </div>
                    <a class="readmore" href="#">Read More</a>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
        </div>
    </div>
</section>
<!-- blog Section End -->

<!-- download Section Start -->
<section id="download" class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-xs-12">
                <div class="download-wrapper">
                    <div>
                        <div class="download-text">
                            <h4>Download Our Best Apps</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et metus effici turac fringilla lorem facilisis, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="app-button">
                            <a href="#" class="btn btn-border"><i class="lni-MizTech"></i>Download <br> <span>From MizTech Store</span></a>
                            <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> Download <br> <span>From Play Store</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-xs-12">
                <div class="download-thumb">
                    <img class="img-fluid" src="/frontend/web/img/app.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download Section End -->
