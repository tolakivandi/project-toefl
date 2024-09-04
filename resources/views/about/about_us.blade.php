@extends('templates.master')
@section('content')

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">About Us</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">About Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about-area-three section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about__images-three tg-svg">
                            <img src="assets/img/others/inner_about_img.png" alt="img">
                            <span class="svg-icon" id="about-svg" data-svg-icon="assets/img/others/inner_about_shape.svg"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">Get to Know Us Better</span>
                                <h2 class="title">
                                    Making Your Scholarship Dreams Come True
                                </h2>
                            </div>
                            <p class="desc">GoldMate is dedicated to helping students achieve their dreams of getting scholarships through effective and quality guidance.</p>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">World-Class Instructors</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Access Classes Anytime, Anywhere</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Flexible Course Plans</p>
                                </li>
                            </ul>
                            <div class="tg-button-wrap">
                                <a href="contact.html" class="btn arrow-btn">Start Free Trial <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- team-area -->
        
                <!-- instructor-area -->
        <section class="instructor__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="instructor__content-wrap">
                            <div class="section__title mb-15">
                                <span class="sub-title">Meet Our Team</span>
                                <h2 class="title">Our Top Class & Expert Instructors in One Place</h2>
                            </div>
                            <p>Our team is composed of experienced educators and consultants who are passionate about helping students achieve their academic goals.</p>
                            <div class="tg-button-wrap">
                                <a href="/instructors" class="btn arrow-btn">See All Instructors <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="instructor__item-wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="instructor-datails.html"><img src="assets/img/instructor/instructor01.png" alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Mark Jukarberg</a></h2>
                                            <span class="designation">UX Design Lead</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="instructor-datails.html"><img src="assets/img/instructor/instructor02.png" alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Olivia Mia</a></h2>
                                            <span class="designation">Web Design</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="instructor-datails.html"><img src="assets/img/instructor/instructor03.png" alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">William Hope</a></h2>
                                            <span class="designation">Digital Marketing</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class "fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="instructor-datails.html"><img src="assets/img/instructor/instructor04.png" alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Sophia Ava</a></h2>
                                            <span class="designation">Web Development</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-end -->

        <!-- features-area -->
<section class="features__area-three section-pt-120 section-pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-8">
                <div class="section__title text-center mb-40">
                    <span class="sub-title">Why GoldMate?</span>
                    <h2 class="title">Our Advantages Compared to Other Platforms</h2>
                    <p>GoldMate offers specially designed programs to help students achieve their dream scholarships, with effective methods and experienced instructors.</p>
                </div>
            </div>
        </div>
        <div class="features__item-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="features__item-two">
                        <div class="features__content-two">
                            <div class="content-top">
                                <div class="features__icon-two">
                                    <img src="assets/img/icons/h2_features_icon01.svg" alt="img" class="injectable">
                                </div>
                                <h2 class="title">Expert Instructors</h2>
                            </div>
                            <p>GoldMate has experienced and expert instructors in their respective fields.</p>
                        </div>
                        <div class="features__item-shape">
                            <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features__item-two">
                        <div class="features__content-two">
                            <div class="content-top">
                                <div class="features__icon-two">
                                    <img src="assets/img/icons/h2_features_icon02.svg" alt="img" class="injectable">
                                </div>
                                <h2 class="title">Effective Courses</h2>
                            </div>
                            <p>Our programs are designed to help students understand the material in the most effective way.</p>
                        </div>
                        <div class="features__item-shape">
                            <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features__item-two">
                        <div class="features__content-two">
                            <div class="content-top">
                                <div class="features__icon-two">
                                    <img src="assets/img/icons/h2_features_icon03.svg" alt="img" class="injectable">
                                </div>
                                <h2 class="title">Official Certificates</h2>
                            </div>
                            <p>Students will receive recognized certificates after completing the course.</p>
                        </div>
                        <div class="features__item-shape">
                            <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
