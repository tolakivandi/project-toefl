@extends('templates.master')
@section('content')

<!-- main-area -->
<main class="main-area fix">

<!-- banner-area -->
<section class="banner-area-two banner-bg-two tg-motion-effects" data-background="assets/img/banner/banner_bg02.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content-two">
                    <h3 class="title" data-aos="fade-right" data-aos-delay="400">
                        Learning is
                        <span class="position-relative">
                            <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565" fill="currentcolor" />
                            </svg>
                            What You
                        </span>
                        Make of it. Make it Yours at SkillGro.
                    </h3>
                    <div class="banner__btn-two" data-aos="fade-right" data-aos-delay="600">
                        <a href="/contact" class="btn arrow-btn">Start Free Trial <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                        <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="play-btn popup-video"><i class="fas fa-play"></i> Watch Our <br> Class Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-8">
                <div class="banner__images-two tg-svg">
                    <img src="assets/img/banner/h2_banner_img.png" alt="img" class="main-img">
                    <div class="shape big-shape" data-aos="fade-up" data-aos-delay="600">
                        <img src="assets/img/banner/h2_banner_shape01.svg" alt="shape" class="injectable tg-motion-effects1">
                    </div>
                    <span class="svg-icon" id="banner-svg" data-svg-icon="assets/img/banner/h2_banner_shape02.svg"></span>
                    <div class="about__enrolled" data-aos="fade-right" data-aos-delay="200">
                        <p class="title"><span>36K+</span> Enrolled Students</p>
                        <img src="assets/img/others/student_grp.png" alt="img">
                    </div>
                    <div class="banner__student" data-aos="fade-left" data-aos-delay="200">
                        <div class="icon">
                            <img src="assets/img/banner/h2_banner_icon.svg" alt="img" class="injectable">
                        </div>
                        <div class="content">
                            <span>Total Students</span>
                            <h4 class="title">15K</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/img/banner/h2_banner_shape03.svg" alt="shape" class="line-shape-two" data-aos="fade-right"
    data-aos-delay="1600">
</section>
<!-- banner-area-end -->


<!-- course-area -->
<section class="courses-area section-py-120" data-background="assets/img/bg/courses_bg.jpg">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Top Class Courses</span>
                        <h2 class="title">Explore Our World's Best Courses</h2>
                        <p class="desc">When known printer took a galley of type scrambl edmake</p>
                    </div>
                    <div class="courses__nav">
                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button"
                                    role="tab" aria-controls="all-tab-pane" aria-selected="true">
                                    All Courses
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button"
                                    role="tab" aria-controls="design-tab-pane" aria-selected="false">
                                    Design
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button"
                                    role="tab" aria-controls="business-tab-pane" aria-selected="false">
                                    Business
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="development-tab" data-bs-toggle="tab" data-bs-target="#development-tab-pane" type="button"
                                    role="tab" aria-controls="development-tab-pane" aria-selected="false">
                                    Development
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="courseTabContent">
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author001.png" alt="img">David Millar</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$10.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Wilson</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.5 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>60</li>
                                        <li><i class="flaticon-clock"></i>70h 45m</li>
                                        <li><i class="flaticon-mortarboard"></i>202</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="price">$20.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author003.png" alt="img">Warren</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>08</li>
                                        <li><i class="flaticon-clock"></i>18h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>66</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$15.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training & Investing Course</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author004.png" alt="img">Robert Fox</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.2 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Hawkins</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.7 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>10</li>
                                        <li><i class="flaticon-clock"></i>13h 10m</li>
                                        <li><i class="flaticon-mortarboard"></i>99</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$10.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Wilson</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.5 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>60</li>
                                        <li><i class="flaticon-clock"></i>70h 45m</li>
                                        <li><i class="flaticon-mortarboard"></i>202</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author001.png" alt="img">David Millar</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="price">$20.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author003.png" alt="img">Warren</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>08</li>
                                        <li><i class="flaticon-clock"></i>18h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>66</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$15.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training & Investing Course</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author004.png" alt="img">Robert Fox</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.2 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Hawkins</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.7 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>10</li>
                                        <li><i class="flaticon-clock"></i>13h 10m</li>
                                        <li><i class="flaticon-mortarboard"></i>99</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="business-tab-pane" role="tabpanel" aria-labelledby="business-tab" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="price">$20.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author003.png" alt="img">Warren</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>08</li>
                                        <li><i class="flaticon-clock"></i>18h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>66</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author001.png" alt="img">David Millar</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$10.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Wilson</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.5 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>60</li>
                                        <li><i class="flaticon-clock"></i>70h 45m</li>
                                        <li><i class="flaticon-mortarboard"></i>202</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$15.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training & Investing Course</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author004.png" alt="img">Robert Fox</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.2 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Hawkins</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.7 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>10</li>
                                        <li><i class="flaticon-clock"></i>13h 10m</li>
                                        <li><i class="flaticon-mortarboard"></i>99</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="development-tab-pane" role="tabpanel" aria-labelledby="development-tab" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$15.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training & Investing Course</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author004.png" alt="img">Robert Fox</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.2 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author001.png" alt="img">David Millar</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>05</li>
                                        <li><i class="flaticon-clock"></i>11h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="price"><del>$20.00</del>$10.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Wilson</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.5 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>60</li>
                                        <li><i class="flaticon-clock"></i>70h 45m</li>
                                        <li><i class="flaticon-mortarboard"></i>202</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="price">$20.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author003.png" alt="img">Warren</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>08</li>
                                        <li><i class="flaticon-clock"></i>18h 20m</li>
                                        <li><i class="flaticon-mortarboard"></i>66</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="courses__item courses__item-two shine__animate-item">
                                <div class="courses__item-thumb courses__item-thumb-two">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content courses__item-content-two">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="price"><del>$29.00</del>$9.00</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                    <div class="courses__item-content-bottom">
                                        <div class="author-two">
                                            <a href="/detail_tim"><img src="assets/img/courses/course_author002.png" alt="img">Hawkins</a>
                                        </div>
                                        <div class="avg-rating">
                                            <i class="fas fa-star"></i> (4.7 Reviews)
                                        </div>
                                    </div>
                                </div>
                                <div class="courses__item-bottom-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-book"></i>10</li>
                                        <li><i class="flaticon-clock"></i>13h 10m</li>
                                        <li><i class="flaticon-mortarboard"></i>99</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-courses-btn mt-30">
            <div class="tg-button-wrap justify-content-center">
                <a href="/courses" class="btn arrow-btn">See All Courses <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
            </div>
        </div>
    </div>
</section>
<!-- course-area-end -->

<!-- work-area -->
<section class="work__area section-py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about__images work__images">
                    <img src="assets/img/others/about_img.png" alt="img" class="main-img">
                    <img src="assets/img/others/about_shape.svg" alt="img" class="shape alltuchtopdown">
                    <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="popup-video">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                            <path d="M0.19043 26.3132V1.69421C0.190288 1.40603 0.245303 1.12259 0.350273 0.870694C0.455242 0.6188 0.606687 0.406797 0.79027 0.254768C0.973854 0.10274 1.1835 0.0157243 1.39936 0.00193865C1.61521 -0.011847 1.83014 0.0480663 2.02378 0.176003L20.4856 12.3292C20.6973 12.4694 20.8754 12.6856 20.9999 12.9535C21.1245 13.2214 21.1904 13.5304 21.1904 13.8456C21.1904 14.1608 21.1245 14.4697 20.9999 14.7376C20.8754 15.0055 20.6973 15.2217 20.4856 15.3619L2.02378 27.824C1.83056 27.9517 1.61615 28.0116 1.40076 27.9981C1.18536 27.9847 0.97607 27.8983 0.792638 27.7472C0.609205 27.596 0.457661 27.385 0.352299 27.1342C0.246938 26.8833 0.191236 26.6008 0.19043 26.3132Z" fill="currentcolor" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="work__content">
                    <div class="section__title mb-20">
                        <span class="sub-title">Free Workshop</span>
                        <h2 class="title">Join Our Free Workshops</h2>
                    </div>
                    <p>Edhen an unknown printer took a galley of type and scrambled it to make a type specimen bookas survived not only five centuries.Edhen an unknown printer took a galley of type and scrambled.</p>
                    <div class="work__list-wrap">
                        <div class="work__list-box">
                            <div class="work__list-box-top">
                                <div class="icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <h4 class="title">Smooth Virtual Live Classes</h4>
                            </div>
                            <p>Edhen an unknown printer Rtook galley of type scrambled.</p>
                        </div>
                        <div class="work__list-box">
                            <div class="work__list-box-top">
                                <div class="icon">
                                    <i class="flaticon-mortarboard"></i>
                                </div>
                                <h4 class="title">99% Graduation Complete</h4>
                            </div>
                            <p>Edhen an unknown printer Rtook galley of type scrambled.</p>
                        </div>
                    </div>
                    <div class="tg-button-wrap">
                        <a href="/contact" class="btn arrow-btn">Quick Join Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-area-end -->


<!-- instructor-area-two -->
<section class="instructor__area-four">
    <div class="container">
        <div class="instructor__item-wrap-two">
            <div class="row">
                <div class="col-xl-6">
                    <div class="instructor__item-two tg-svg">
                        <div class="instructor__thumb-two">
                            <img src="assets/img/instructor/instructor_two01.png" alt="img">
                            <div class="shape-one">
                                <img src="assets/img/instructor/instructor_shape01.svg" alt="img" class="injectable">
                            </div>
                            <div class="shape-two">
                                <span class="svg-icon" id="instructor-svg" data-svg-icon="assets/img/instructor/instructor_shape02.svg"></span>
                            </div>
                        </div>
                        <div class="instructor__content-two">
                            <h3 class="title"><a href="/contact">Become a Instructor</a></h3>
                            <p>To take a trivial example, which of us undertakes physical exercise yes is this happen here.</p>
                            <div class="tg-button-wrap">
                                <a href="/contact" class="btn arrow-btn">Apply Now <img src="assets/img/icons/right_arrow.svg" alt="img"  class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="instructor__item-two tg-svg">
                        <div class="instructor__thumb-two">
                            <img src="assets/img/instructor/instructor_two02.png" alt="img">
                            <div class="shape-one">
                                <img src="assets/img/instructor/instructor_shape01.svg" alt="img" class="injectable">
                            </div>
                            <div class="shape-two">
                                <span class="svg-icon" id="instructor-svg-two" data-svg-icon="assets/img/instructor/instructor_shape02.svg"></span>
                            </div>
                        </div>
                        <div class="instructor__content-two">
                            <h3 class="title"><a href="/contact">Become a Student</a></h3>
                            <p>Join millions of people from around the world learning together. Online learning.</p>
                            <div class="tg-button-wrap">
                                <a href="/contact" class="btn arrow-btn">Apply Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instructor-area-two-end -->

</main>
<!-- main-area-end -->

@endsection