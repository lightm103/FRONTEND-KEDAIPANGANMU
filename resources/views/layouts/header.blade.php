<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codebasket.xyz/template/organiyo/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2024 08:52:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Kedai Panganmu</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel='stylesheet' href="{{ asset('assets/vendor/icofont/icofont.min.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('custom-css')
</head>

<body>
    <!-- OVERLAY -->
    <div class="rv-overlay"></div>
    <!-- OVERLAY -->

    <!-- SEARCH FORM -->
    <div class="rv-search-modal">
        <form action="#">
            <input type="search" name="search" id="rv-search-modal-input" placeholder="Search Here">
            <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
        </form>

        <button class="rv-search-modal-close-btn"><i class="fa-regular fa-xmark"></i></button>
    </div>
    <!-- SEARCH FORM -->


    <!-- HEADER SECTION STARTS HERE -->
    <header class="rv-1-header rv-inner-header p-0">
        <div hidden class="rv-20-header-top">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-lg-6">
                        <div class="rv-8-header-top__txt rv-7-header-top__actions mb-0">
                            <div class="rv-8-header-socials rv-10-header-socials">
                                <h6>Follow Us:</h6>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rv-7-header-top__actions rv-20-header-top__actions justify-content-center justify-content-lg-end">
                            <button class="rv-search-modal-open-btn"><i class="fa-regular fa-magnifying-glass"></i> Search...</button>
                            <h6 class="rv-8-header-contact-info rv-8-header-contact-numb"><i class="fa-solid fa-sharp fa-phone"></i> <a href="tel:1237775643">(123) 777 - 5643</a></h6>
                            <h6 class="rv-8-header-contact-info rv-8-header-contact-email"><i class="fa-solid fa-envelope"></i><a href="mailto:example@gmail.com">example@gmail.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rv-20-header-bottom to-be-fixed">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-4 col-xxs-6">
                        <div class="rv-1-logo">
                            <a href="index.html">
                                <!--img src="{{ asset('assets/img/rv-20-logo.png') }}" alt="logo" class="logo"-->
                                <img src="{{ asset('logo.jpeg') }}" alt="logo" class="logo">
                                {{--
                                <img src="{{ asset('logo.jpeg') }}" alt="logo" class="logo" style="width: 30%; margin-right: 10px;">
                                <b class="text-black" style="font-size:20px;">Kedai Panganmu</b>
                                --}}
                            </a>
                        </div>
                    </div>

                    <!-- nav menu -->
                    <div class="col-md-11 order-2 order-lg-1">
                        <div class="rv-1-header-nav__sidebar">
                            <div class="sidebar-heading d-lg-none d-flex align-items-center justify-content-between">
                                <a href="index.html" class="logo-container"><img src="assets/img/rv-20-logo.png" alt="logo"></a>
                                <button class="rv-3-def-btn rv-1-header-mobile-menu-btn rv-20-mobile-menu-btn sidebar-close-btn"><i class="fa-regular fa-xmark"></i></button>
                            </div>

                            <div class="rv-1-header__nav rv-20-header__nav">
                                <ul class="justify-content-center">
                                    <li>
                                        <a href="{{ route('beranda') }}">Beranda</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('tentang_kami') }}">Tentang Kami</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a></li>
                                            <li><a href="{{ route('tugas_pokok_dan_fungsi') }}">Tugas Pokok dan Fungsi</a></li>
                                            <li><a href="{{ route('sekretariat') }}">Sekretariat</a></li>
                                            <li><a href="{{ route('bidang_2') }}">Bidang 2</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('visi_dan_misi') }}">Visi dan Misi</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('strategi_marketing') }}">Strategi Marketing</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('profil_reformer') }}">Profil Reformer</a></li>
                                            <li><a href="{{ route('proper') }}">Proper</a></li>
                                            <li><a href="{{ route('rpp_salawaku') }}">RPP Salawaku</a></li>
                                            <li><a href="{{ route('ppt') }}">PPT</a></li>
                                            <li><a href="{{ route('timeline') }}">Timeline</a></li>
                                            <li><a href="{{ route('nilai_sikap_perilaku') }}">Nilai, Sikap, Perilaku</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('data_kabupaten_kota') }}">Data Kabupaten/Kota</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('panel') }}">Panel Harga Pangan</a></li>
                                            <li><a href="{{ route('fsva_ternate') }}">FSVA Peta Kerawanan Pangan</a></li>
                                            <li><a href="{{ route('neraca_ternate') }}">Neraca Bahan Makanan</a></li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('publikasi_dan_informasi') }}">Publikasi dan Informasi</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pub_kedai_pangan') }}">Kegiatan Kedai Pangan</a></li>
                                            <li><a href="{{ route('pub_dinas_pangan') }}">Kegiatan di Dinas Pangan</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('hasil') }}">Hasil</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('hasil_dokumen') }}">Dokumen</a></li>
                                            <li><a href="{{ route('hasil_video') }}">Video</a></li>
                                            <li><a href="{{ route('hasil_foto') }}">Foto</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{--
                    <div class="col-lg-2 col-8 col-xxs-6 text-end order-1 order-lg-2">
                        <div class="d-flex justify-content-end">
                            <div class="rv-inner-header-right-btns rv-15-header-right-btns rv-20-header-bottom-right-btns">
                                <a href="#" class="d-sm-inline-block d-none">Get a Quote</a>
                            </div>
                            <button class="rv-1-header-mobile-menu-btn rv-3-def-btn rv-20-mobile-menu-btn d-lg-none d-inline-block" id="rv-1-header-mobile-menu-btn"><i class="fa-regular fa-bars"></i></button>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION ENDS HERE -->




    