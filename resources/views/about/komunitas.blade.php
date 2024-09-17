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
                            <h3 class="title">Komunitas</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Komunitas</span>
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

<!-- forum-area -->
<section class="forum__area section-py-120" style="background-color: #f9f9f9;">
    <div class="container">
        <h3 class="title text-center mb-5" style="color: #333; font-weight: 700;">Forum Diskusi</h3>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="forum__post-item card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                    <div class="forum__post-thumb" style="overflow: hidden; border-radius: 10px 10px 0 0;">
                        <a href="/forum_detail">
                            <img src="assets/img/events/event_thumb01.jpg" class="card-img-top img-fluid" alt="Tips Mempersiapkan TOEFL" style="transition: transform 0.3s ease;">
                        </a>
                    </div>
                    <div class="forum__post-content card-body text-center">
                        <h4 class="title"><a href="/forum_detail" class="stretched-link" style="color: #007bff; font-weight: 600;">Tips Mempersiapkan TOEFL</a></h4>
                        <p class="card-text" style="color: #666;">Bergabunglah untuk berbagi pengalaman atau mengajukan pertanyaan terkait persiapan TOEFL.</p>
                        <div class="forum__post-meta" style="color: #999;">
                            <span><i class="fas fa-comments"></i> 15 Diskusi</span>
                            <span><i class="fas fa-users"></i> 100 Anggota</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="forum__post-item card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                    <div class="forum__post-thumb" style="overflow: hidden; border-radius: 10px 10px 0 0;">
                        <a href="/forum_detail">
                            <img src="assets/img/events/event_thumb02.jpg" class="card-img-top img-fluid" alt="Cara Meningkatkan Skor IELTS" style="transition: transform 0.3s ease;">
                        </a>
                    </div>
                    <div class="forum__post-content card-body text-center">
                        <h4 class="title"><a href="/forum_detail" class="stretched-link" style="color: #007bff; font-weight: 600;">Cara Meningkatkan Skor IELTS</a></h4>
                        <p class="card-text" style="color: #666;">Bagikan strategi dan tips untuk meningkatkan skor IELTS.</p>
                        <div class="forum__post-meta" style="color: #999;">
                            <span><i class="fas fa-comments"></i> 10 Diskusi</span>
                            <span><i class="fas fa-users"></i> 80 Anggota</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="forum__post-item card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                    <div class="forum__post-thumb" style="overflow: hidden; border-radius: 10px 10px 0 0;">
                        <a href="/forum_detail">
                            <img src="assets/img/events/event_thumb03.jpg" class="card-img-top img-fluid" alt="Pengalaman Mendapatkan Beasiswa Luar Negeri" style="transition: transform 0.3s ease;">
                        </a>
                    </div>
                    <div class="forum__post-content card-body text-center">
                        <h4 class="title"><a href="/forum_detail" class="stretched-link" style="color: #007bff; font-weight: 600;">Pengalaman Mendapatkan Beasiswa Luar Negeri</a></h4>
                        <p class="card-text" style="color: #666;">Diskusi terbuka mengenai proses aplikasi beasiswa luar negeri.</p>
                        <div class="forum__post-meta" style="color: #999;">
                            <span><i class="fas fa-comments"></i> 20 Diskusi</span>
                            <span><i class="fas fa-users"></i> 120 Anggota</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forum Posting Area -->
<div class="forum__post-create mt-5 p-5" style="background-color: #f4f8fb; border-radius: 10px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
    <h4 class="title text-center mb-4" style="color: #333; font-weight: 700; font-size: 24px;">Buat Diskusi Baru</h4>
    <form action="#" class="form-row justify-content-center">
        <div class="form-group col-lg-8 mb-4">
            <input type="text" class="form-control" placeholder="Judul Diskusi" style="border-radius: 10px; padding: 20px; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="form-group col-lg-8 mb-4">
            <textarea class="form-control" rows="6" placeholder="Tuliskan topik diskusi Anda..." style="border-radius: 10px; padding: 20px; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></textarea>
        </div>
        <div class="form-group col-lg-8 text-right">
            <button type="submit" class="btn btn-primary" style="padding: 12px 40px; font-size: 16px; font-weight: 600; background-color: #007bff; border-color: #007bff; border-radius: 50px; transition: all 0.3s ease;">Kirim Diskusi</button>
        </div>
    </form>
</div>

<!-- Custom CSS -->
<style>
    .form-control {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        box-shadow: 0 6px 15px rgba(0, 123, 255, 0.3);
        transform: translateY(-2px);
    }
</style>

    </div>
</section>
<!-- forum-area-end -->



<!-- event-area -->
<section class="event__area section-py-120 bg-light">
    <div class="container">
        <h3 class="title text-center">Event Mendatang GoldMate</h3>
        <p class="text-center mb-5">Ikuti beragam event edukatif yang diselenggarakan oleh GoldMate untuk mendukung perkembangan akademik dan karier Anda. Mulai dari webinar hingga workshop, kami hadir untuk membantu siswa dan profesional dalam mencapai tujuan pendidikan dan profesional mereka.</p>
        
        <div class="event__inner-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb01.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">25 June, 2024</span>
                            <h2 class="title"><a href="/event_detail">The Accessible Target Sizes Cheatsheet</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb02.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">25 June, 2024</span>
                            <h2 class="title"><a href="/event_detail">Creating Futures Through Technology</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>Tokyo, Japan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb03.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">25 June, 2024</span>
                            <h2 class="title"><a href="/event_detail">How Technology Can Improve Reading</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>Colorado, USA</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb04.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">10 July, 2024</span>
                            <h2 class="title"><a href="/event_detail">Maximizing IELTS Scores</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>Sydney, Australia</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb05.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">15 August, 2024</span>
                            <h2 class="title"><a href="/event_detail">Scholarship Application Workshop</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>Berlin, Germany</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="event__item">
                        <div class="event__item-thumb">
                            <a href="/event_detail" class="shine__animate-link"><img src="assets/img/events/event_thumb06.jpg" alt="img"></a>
                        </div>
                        <div class="event__item-content text-center">
                            <span class="date">1 September, 2024</span>
                            <h2 class="title"><a href="/event_detail">Effective Study Techniques</a></h2>
                            <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>New York, USA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event-area-end -->


</main>
<!-- main-area-end -->



@endsection