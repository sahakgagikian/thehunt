<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Home';
?>
<!-- Find Job Section Start -->
<div class="container" style="margin-top: 150px">
    <div class="row space-100">
        <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
                <h2 class="head-title">Find the  <br> job that fits your life</h2>
                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non.</p>
                <div class="job-search-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Job Title or Company Name">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-xs-12">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select>
                                                <option value="none">Locations</option>
                                                <option value="none">New York</option>
                                                <option value="none">California</option>
                                                <option value="none">Washington</option>
                                                <option value="none">Birmingham</option>
                                                <option value="none">Chicago</option>
                                                <option value="none">Phoenix</option>
                                            </select>
                                        </label>
                                    </div>
                                    <i class="lni-map-marker"></i>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12">
                                <button type="submit" class="button"><i class="lni-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="intro-img">
                <img src="/frontend/web/img/intro.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Find Job Section End -->

<!-- Category Section Start -->
<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Browse Categories</h2>
            <p>Most popular categories of portal, sorted by popularity</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-1">
                        <i class="lni-home"></i>
                    </div>
                    <h3>Finance</h3>
                    <p>(4286 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-2">
                        <i class="lni-world"></i>
                    </div>
                    <h3>Sale/Marketing</h3>
                    <p>(2000 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-3">
                        <i class="lni-book"></i>
                    </div>
                    <h3>Education/Training</h3>
                    <p>(1450 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-4">
                        <i class="lni-display"></i>
                    </div>
                    <h3>Technologies</h3>
                    <p>(5100 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-5">
                        <i class="lni-brush"></i>
                    </div>
                    <h3>Art/Design</h3>
                    <p>(5079 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-6">
                        <i class="lni-heart"></i>
                    </div>
                    <h3>Healthcare</h3>
                    <p>(3235 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-7">
                        <i class="lni-funnel"></i>
                    </div>
                    <h3>Science</h3>
                    <p>(1800 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="<?= Url::to(['pages/job-details']) ?>">
                    <div class="icon bg-color-8">
                        <i class="lni-cup"></i>
                    </div>
                    <h3>Food Services</h3>
                    <p>(4286 jobs)</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Category Section End -->

<!-- Featured Section Start -->
<section id="featured" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Jobs</h2>
            <p>Hand-picked jobs featured depending on popularity and benifits</p>
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

<!-- Browse jobs Section Start -->
<div id="browse-jobs" class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-wrapper">
                    <div>
                        <h3>7,000+ Browse Jobs</h3>
                        <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                        <a class="btn btn-common" href="#">Search jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="img-thumb">
                    <img class="img-fluid" src="/frontend/web/img/search.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Browse jobs Section End -->

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
