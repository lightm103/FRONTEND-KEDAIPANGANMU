@extends('layouts.template')

@section('title', 'Beranda')

@section('custom-css')

    <style>
        .rv-20-banner_section .rv-20-banner_slide::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            opacity: .8;

        }

        .rv-20-blog_section {
            background-color: #f7f7f7;
        }
    </style>
@endsection
@section('main')

    <!-- START INDEX-20 BANNER SLIDER -->
    <section class="rv-20-banner_section swiper">
        <div class="swiper-wrapper">
            <div class="rv-20-banner_slide swiper-slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
                            <div class="rv-20-banner_content">
                                <span class="rv-20-banner_content_sub_heading rv-text-anime wow fadeInUp"
                                    data-wow-delay="0.3s"><span></span> Kedai Panganmu</span>
                                <h1 class="rv-20-banner_content_heading rv-text-anime wow fadeInUp" data-wow-delay="0.3s">
                                    Berakhlak #Bangga<br>Melayani<br>Bangsa</h1>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

     
    </section>
    <!-- END INDEX-20 BANNER SLIDER -->


    <section class="rv-1-about rv-section-spacing aos-init aos-animate" data-aos="fade-up">
        <div class="container position-relative">
            <div class="row rv-1-about-row g-0 justify-content-between align-items-end">
                <div class="col-xl-5 col-lg-6">
                    <div class="rv-1-about__img reveal"
                        style="opacity: 1; visibility: inherit; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <img src="https://jagadtani.com/uploads/news/2021/05/memahami-masalah-petani-indonesia-66007b034185e8f.jpg"
                            alt="Image"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="rv-1-about__txt">
                        <div class="rv-1-section__heading aos-init aos-animate" data-aos="fade-up">

                            <h2 class="rv-1-section__title rv-text-anime">
                                KEBIJAKAN DAN SINERGITAS STABILISASI
                                PASOKAN DAN HARGA PANGAN
                                DI PROVINSI MALUKU UTARA
                            </h2>
                        </div>

                        <ul class="rv-1-about__pills aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <li class="rv-1-about__pill">Jagung</li>
                            <li class="rv-1-about__pill">Beras</li>
                            <li class="rv-1-about__pill">Ayam Potong</li>
                            <li class="rv-1-about__pill">KAcang Kedelai</li>
                        </ul>

                        <p class="rv-1-about__descr aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">It
                            KEDAI SPHP adalah akronim kata dari Kebijakan dan Sinergitas Stabilisasi
                            Pasokan dan Harga Pangan di Provinsi Maluku Utara yang merupakan
                            ide gagasan dari Reformer Dhenny Tjan, SH, M.Si/NDH. 23
                        </p>

                    </div>
                </div>
            </div>

            <div class="rv-1-about__vectors">
                <img src="assets/img/rv-1-vector-6.png" alt="vector" class="rv-1-about__vector rv-1-about__vector-1">
                <img src="assets/img/rv-1-vector-7.png" alt="vector" class="rv-1-about__vector rv-1-about__vector-2">
                <img src="assets/img/rv-1-vector-8.png" alt="vector" class="rv-1-about__vector rv-1-about__vector-3">
            </div>
        </div>
    </section>

    <section class="rv-14-cta rv-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h2 class="rv-1-section__title rv-text-anime">
                        TUJUAN
                    </h2>
                    <h4>Tujuan Proyek Perubahan “KEDAI SPHP”</h4>

                   <div class="card">
                    <div class="card-body">
                        <img src="assets\img\content\tujuan.png" class="img-fluid mr-3" alt="" srcset="">
                    </div>
                   </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-1-about__txt">
                        <div class="rv-1-section__heading aos-init aos-animate" data-aos="fade-up">

                            <h3 class="rv-1-section__title rv-text-anime">
                                TUJUAN JK.PENDEK
                            </h3>
                            <ul>
                                <li>1. Tersediannya Peraturan Gubernur Tentang Stabilisasi Pasokan dan
                                    Harga Pangan &nbsp;&nbsp; di Provinsi Maluku Utara.</li>
                                <li>2. Tersediannya Sistem Integrasi Terpadu dalam rangka Monitoring dan
                                    Pemantauan &nbsp;&nbsp;&nbsp;&nbsp;“Early Warning System”</li>
                                <li>3. Terlaksananya Gerakan Sinergitas Stabilisasi Pasokan dan harga
                                    pangan di Kota &nbsp;&nbsp;&nbsp;&nbsp;Ternate dan Kabupaten Halmahera Tengah.
                                    Peresmian KEDAI SPHP dan &nbsp;&nbsp;&nbsp;&nbsp;Pengoperasian pelaksanaan Fasilitasi
                                    Distribusi Pangan</li>
                            </ul>
                        </div>
                       
                        <div class="rv-1-section__heading aos-init aos-animate mt-5" data-aos="fade-up">

                            <h3 class="rv-1-section__title rv-text-anime">
                                TUJUAN JK. MENENGAH
                            </h3>
                            <ul>
                                <li>1. Tersosialisasinya Peraturan Gubernur Tentang  Stabilisasi Pasokan
                                    dan Harga Pangan di Provinsi Maluku Utara. di 10 Kabupaten/Kota</li>
                                <li>2. Tersosialisasi Sistem Integrasi Pemantauan dan Monitoring “Early
                                    Warning System”</li>
                                <li>3. Terlaksananya Gerakan Sinergitas Stabilisasi Pasokan dan  harga
                                    pangan  di Maluku Utara</li>
                            </ul>
                        </div>
                        <div class="rv-1-section__heading aos-init aos-animate mt-5" data-aos="fade-up">

                            <h3 class="rv-1-section__title rv-text-anime">
                                TUJUAN JK. PANJANG
                            </h3>
                            <ul>
                                <li>1. Tersediannya Peraturan Stabilisasi Pasokan dan Harga Pangan.</li>
                                <li>2. Terselengaranya Festival KEDAI SPHP melalui Pameran
                                    Diversifikasi Pangan Lokal sebagai sebagai pemenuhan gizi anak
                                    dan remaja dalam upaya penurunan pervalensi stunting di
                                    Maluku Utara.</li>
                                <li>3. Terlaksananya Gerakan Sinergitas Stabilisasi Pasokan dan  harga
                                    pangan  di Maluku Utara</li>
                            </ul>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rv-20-blog_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="rv-20-blog_section_heading aos-init aos-animate" data-aos="fade-down">


                        <h2 class="rv-20-blog_section_title rv-text-anime">
                            ARTIKEL TERBARU
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog aos-init aos-animate" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="https://mediatani.co/wp-content/uploads/2022/01/Ilustrasi-pemuda-yang-berprofesi-sebagai-petani.jpg"
                                alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Blossom &amp; Bloom: Exploring The Garden World.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum
                            ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog aos-init aos-animate" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="https://img.lovepik.com/photo/20211208/medium/lovepik-farmer-farming-in-wheat-field-picture_501611486.jpg"
                                alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Breathing Easier with Home Air-Purifying Plants.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum
                            ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog aos-init aos-animate" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="https://storage.googleapis.com/finansialku_media/wordpress_media/2017/12/Marketplace-Pertanian-01-Petani-Indonesia-Finansialku.jpg"
                                alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Harvest Haven Nurturing your Green Spaces.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum
                            ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
