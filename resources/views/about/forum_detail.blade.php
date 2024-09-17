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
                    <h3 class="title">Reach Your Dream Scholarship</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/komunitas">Komunitas</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Reach Your Dream Scholarship</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- forum-details-area -->
    <section class="forum__details-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="forum__details-content-wrap">
                        <div class="forum__details-content">
                            <!-- Forum Title -->
                            <div class="forum__details-header mb-4" style="text-align: center; padding-bottom: 20px; border-bottom: 2px solid #eee;">
                                <h2 class="title" style="font-size: 28px; font-weight: bold; color: #333;">Reach Your Dream Scholarship with GoldMate</h2>
                                <p class="forum-info" style="font-size: 14px; color: #777;">Posted on: 12 Oct 2023 | 120 Participants</p>
                            </div>

                            <!-- Forum Overview -->
                            <div class="forum__details-overview mt-4">
                                <h4 class="title-two" style="font-size: 20px; font-weight: bold; color: #555;">About GoldMate Scholarship</h4>
                                <p style="font-size: 16px; color: #666;">GoldMate is here to help you achieve your dreams! With our comprehensive guidance and expert advice, you’ll be on the right track to securing scholarships for a brighter future. Whether you’re preparing for university or looking for ways to fund your education, GoldMate offers tailored resources to make the journey easier. Let’s get started on building a successful path to your dreams!</p>
                            </div>
                            
                            <!-- Author Info -->
                            <div class="blog__post-author mt-5">
                                <div class="blog__post-author-thumb">
                                    <a href="#"><img src="assets/img/blog/author.png" alt="img"></a>
                                </div>
                                <div class="blog__post-author-content">
                                    <span class="designation">Author</span>
                                    <h5 class="name">Brooklyn Simmons</h5>
                                    <p>Brooklyn Simmons is an experienced educator and test prep expert, dedicated to helping students achieve their academic goals through practical tips and insightful guidance.</p>
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <div class="blog-post-comment mt-5">
                                <div class="comment-wrap">
                                    <div class="comment-wrap-title">
                                        <h4 class="title">02 Comments</h4>
                                    </div>
                                    <div class="latest-comments">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comment01.png" alt="img">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h6 class="name">Jessica Rose</h6>
                                                            <span class="date">20 July, 2024</span>
                                                        </div>
                                                        <p>This guide is incredibly helpful! The tips are practical, and I feel more confident about my upcoming TOEFL exam.</p>
                                                        <div class="comment-reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comment02.png" alt="img">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h6 class="name">Parker Willy</h6>
                                                            <span class="date">20 July, 2024</span>
                                                        </div>
                                                        <p>I appreciate the detailed strategies for the IELTS exam. It's exactly what I needed to improve my score.</p>
                                                        <div class="comment-reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-respond mt-5">
                                    <h4 class="comment-reply-title mb-4">Post a Comment</h4>
                                    <form action="#" class="comment-form">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <textarea class="form-control" rows="4" placeholder="Comment"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-two arrow-btn">Post Comment <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <aside class="forum__sidebar">
                        <!-- Forum Info Section -->
                        <div class="forum__details-sidebar p-4 mb-4" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            <h5 class="title" style="font-size: 18px; font-weight: bold; color: #333;">Forum Info</h5>
                            <ul class="list-wrap mt-3" style="list-style: none; padding: 0;">
                                <li class="mb-2">
                                    <img src="assets/img/icons/calendar.svg" alt="icon" style="width: 18px; margin-right: 10px;">
                                    <span style="font-size: 14px; color: #777;">Posted on: 12 Oct 2023</span>
                                </li>
                                <li class="mb-2">
                                    <img src="assets/img/icons/user.svg" alt="icon" style="width: 18px; margin-right: 10px;">
                                    <span style="font-size: 14px; color: #777;">120 Participants</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Social Share Section -->
                        <div class="forum__details-sidebar p-4" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            <h5 class="title" style="font-size: 18px; font-weight: bold; color: #333;">Share this forum</h5>
                            <ul class="list-wrap mt-3" style="list-style: none; padding: 0;">
                                <li style="display: inline; margin-right: 10px;"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li style="display: inline; margin-right: 10px;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li style="display: inline; margin-right: 10px;"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- forum-details-area-end -->

</main>
<!-- main-area-end -->

@endsection
