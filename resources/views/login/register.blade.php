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
                            <h3 class="title">Student SingUp</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">SingUp</span>
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

        <!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title">Create Your Account</h2>
                            <p>Hey there! Ready to join the party? We just need a few details from you to get <br> started. Let's do this!</p>
                            <div class="account__social">
                                <a href="#" class="account__social-btn">
                                    <img src="assets/img/icons/google.svg" alt="img">
                                    Continue with google
                                </a>
                            </div>
                            <div class="account__divider">
                                <span>or</span>
                            </div>
                            <form action="#" class="account__form">
                                <div class="row gutter-20">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="fast-name">First Name</label>
                                            <input type="text" id="fast-name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="last-name">Last name</label>
                                            <input type="text" id="last-name" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="email">
                                </div>
                                <div class="form-grp">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" placeholder="password">
                                </div>
                                <div class="form-grp">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" id="confirm-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Sign Up<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                            <div class="account__switch">
                                <p>Already have an account?<a href="/log">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
