<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codebasket.xyz/template/organiyo/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2024 08:52:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Kedai Panganmu</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
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
                    <div class="col-lg-3 col-4 col-xxs-6">
                        <div class="rv-1-logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/rv-20-logo.png') }}" alt="logo" class="logo">
                            </a>
                        </div>
                    </div>

                    <!-- nav menu -->
                    <div class="col-md-6 order-2 order-lg-1">
                        <div class="rv-1-header-nav__sidebar">
                            <div class="sidebar-heading d-lg-none d-flex align-items-center justify-content-between">
                                <a href="index.html" class="logo-container"><img src="assets/img/rv-20-logo.png" alt="logo"></a>
                                <button class="rv-3-def-btn rv-1-header-mobile-menu-btn rv-20-mobile-menu-btn sidebar-close-btn"><i class="fa-regular fa-xmark"></i></button>
                            </div>

                            <div class="rv-1-header__nav rv-20-header__nav">
                                <ul class="justify-content-center">
                                    <li>
                                        <a href="#">Home</a>

                                        <ul class="sub-menu">
                                            <li><a href="index.html">Gardening</a></li>
                                            <li><a href="index-2.html">Herbal Tea</a></li>
                                            <li><a href="index-3.html">ECO</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="about.html">About</a>
                                    </li>

                                    <li>
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="team.html">Team Members</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-sidebar.html">Shop with Sidebar</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-8 col-xxs-6 text-end order-1 order-lg-2">
                        <div class="d-flex justify-content-end">
                            <div class="rv-inner-header-right-btns rv-15-header-right-btns rv-20-header-bottom-right-btns">
                                <a href="#" class="d-sm-inline-block d-none">Get a Quote</a>
                            </div>
                            <button class="rv-1-header-mobile-menu-btn rv-3-def-btn rv-20-mobile-menu-btn d-lg-none d-inline-block" id="rv-1-header-mobile-menu-btn"><i class="fa-regular fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION ENDS HERE -->