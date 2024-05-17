@extends('layouts.template')

@section('title', 'Beranda')

@section('main')

    <!-- START INDEX-20 BANNER SLIDER -->
    <section class="rv-20-banner_section swiper">
        <div class="swiper-wrapper">
            <div class="rv-20-banner_slide swiper-slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
                            <div class="rv-20-banner_content">
                                <span class="rv-20-banner_content_sub_heading rv-text-anime wow fadeInUp" data-wow-delay="0.3s"><span></span> Kedai Panganmu</span>
                                <h1 class="rv-20-banner_content_heading rv-text-anime wow fadeInUp" data-wow-delay="0.3s">Berakhlak #Bangga<br>Melayani<br>Bangsa</h1>

                                <div class="rv-20-banner_button_area wow fadeInUp" data-wow-delay="0.8s">
                                    <a href="#" class="rv-20-banner_content_btn">Explore More</a>
                                    <a href="#" class="rv-20-banner_content_play_btn"><i class="fas fa-play"></i> Play Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="rv-20-banner_slide rv-20-banner_slide-2 swiper-slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
                            <div class="rv-20-banner_content">
                                <span class="rv-20-banner_content_sub_heading rv-text-anime wow fadeInUp" data-wow-delay="0.3s"><span></span> A Dream Garden Home</span>
                                <h1 class="rv-20-banner_content_heading rv-text-anime wow fadeInUp" data-wow-delay="0.3s">Elevate your outdoor oasis.</h1>

                                <div class="rv-20-banner_button_area wow fadeInUp" data-wow-delay="0.8s">
                                    <a href="#" class="rv-20-banner_content_btn">Explore More</a>
                                    <a href="#" class="rv-20-banner_content_play_btn"><i class="fas fa-play"></i> Play Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="rv-20-banner_slide_button_area">
            <div class="rv-20-banner_slide_button_prev "> <i class="fas fa-arrow-left"></i> </div>
            <div class="rv-20-banner_slide_button_next "> <i class="fas fa-arrow-right"></i> </div>
        </div>
    </section>
    <!-- END INDEX-20 BANNER SLIDER -->


    <!-- START INDEX-20 SERVICE SECTION -->
    <section class="rv-20-service_section">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-down">
                <div class="col-md-6">
                    <div class="rv-20-service_section_heading">
                        <p class="rv-20-service_sub_title rv-text-anime"> <span></span> Gardening Services</p>
                        <h2 class="rv-20-service_section_title rv-text-anime">Loving your Garden & Landscape.</h2>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-4 col-sm-10 col-md-6">
                    <div class="rv-20-single_service">
                        <div class="rv-20-single_service_iamge">
                            <img src="{{ asset('assets/img/services/home-6-service-1.png') }}" alt="image">
                        </div>
                        <div class="rv-20-single_service_content_main">
                            <div class="visible-part">
                                <div class="rv-20-single_service_content_top">
                                    <div class="rv-20-single_service_icon">
                                        <img src="{{ asset('assets/img/services/home-6-service-icon-1.png') }}" alt="image">
                                    </div>
                                </div>

                                <div class="rv-20-single_service_content_title">
                                    <h4>Sprinkling and Discharge</h4>
                                </div>
                            </div>
                            <div class="hidden-part">
                                <ul class="rv-20-single_service_list">
                                    <li> <i class="fal fa-arrow-to-right"></i>Landscape Design</li>
                                    <li> <i class="fas fa-check"></i>Irrigation Management</li>
                                    <li> <i class="fas fa-check"></i>Plant Care</li>
                                    <li> <i class="fas fa-check"></i>Outdoor Lighting</li>
                                </ul>
                                <a href="service-details.html" class="rv-20-service_btn"> <span class="rv-20-service_btn_txt">Read More</span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                            <h4 class="rv-20-service_drp_txt">plant care</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-10 col-md-6">
                    <div class="rv-20-single_service">
                        <div class="rv-20-single_service_iamge">
                            <img src="{{ asset('assets/img/services/home-6-service-2.png') }}" alt="image">
                        </div>
                        <div class="rv-20-single_service_content_main">
                            <div class="visible-part">
                                <div class="rv-20-single_service_content_top">
                                    <div class="rv-20-single_service_icon">
                                        <img src="{{ asset('assets/img/services/home-6-service-icon-2.png') }}" alt="image">
                                    </div>
                                </div>

                                <div class="rv-20-single_service_content_title">
                                    <h4>Commercial Grounds keeping</h4>
                                </div>
                            </div>

                            <div class="hidden-part">
                                <ul class="rv-20-single_service_list">
                                    <li> <i class="fas fa-check"></i>Landscape Design</li>
                                    <li> <i class="fas fa-check"></i>Irrigation Management</li>
                                    <li> <i class="fas fa-check"></i>Plant Care</li>
                                    <li> <i class="fas fa-check"></i>Outdoor Lighting</li>
                                </ul>
                                <a href="service-details.html" class="rv-20-service_btn"> <span class="rv-20-service_btn_txt">Read More</span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                            <h4 class="rv-20-service_drp_txt">Garden Care</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-10 col-md-6">
                    <div class="rv-20-single_service">
                        <div class="rv-20-single_service_iamge">
                            <img src="{{ asset('assets/img/services/home-6-service-3.png') }}" alt="image">
                        </div>
                        <div class="rv-20-single_service_content_main">
                            <div class="visible-part">
                                <div class="rv-20-single_service_content_top">
                                    <div class="rv-20-single_service_icon">
                                        <img src="{{ asset('assets/img/services/home-6-service-icon-3.png') }}" alt="image">
                                    </div>
                                </div>

                                <div class="rv-20-single_service_content_title">
                                    <h4>Garden Reawakening</h4>
                                </div>
                            </div>
                            <div class="hidden-part">
                                <ul class="rv-20-single_service_list">
                                    <li> <i class="fas fa-check"></i>Landscape Design</li>
                                    <li> <i class="fas fa-check"></i>Irrigation Management</li>
                                    <li> <i class="fas fa-check"></i>Plant Care</li>
                                    <li> <i class="fas fa-check"></i>Outdoor Lighting</li>
                                </ul>
                                <a href="service-details.html" class="rv-20-service_btn"> <span class="rv-20-service_btn_txt">Read More</span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                            <h4 class="rv-20-service_drp_txt">Beauty full</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="service-sh-1"><img src="{{ asset('assets/img/services/home-6-service-4.png') }}" alt="image"></span>
        <span class="service-sh-2"><img src="{{ asset('assets/img/services/home-6-service-5.png') }}" alt="image"></span>
    </section>
    <!-- END INDEX-20 SERVICE SECTION -->


    <!-- END INDEX-20 ABOUT SECTION -->
    <section class="rv-20-about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-lg-6 col-xl-5">
                    <div class="rv-20-about_image">
                        <img data-aos="fade-down" src="{{ asset('assets/img/about/home-6-about-1.png') }}" alt="image">

                        <img data-aos="fade-up" src="{{ asset('assets/img/about/home-6-about-2.png') }}" alt="image">
                        <div class="rv-20-about_experience_txt">
                            <h3>23+</h3>
                            <p>Year of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="rv-20-about_section_content" data-aos="fade-up">
                        <div class="rv-20-about_section_heading">
                            <p class="rv-20-about_sub_title rv-text-anime"> <span></span> About Gardening</p>
                            <h2 class="rv-20-about_section_title rv-text-anime">Flawless Garden Nature's Handiwork.</h2>
                        </div>
                        <div class="rv-20-about_content_top_actions">
                            <div class="rv-20-about_content_single_top_actions">
                                <div class="rv-20-about_content_single_top_actions_left">
                                    <h3>Our Goals</h3>
                                    <p>Denim aliquot poseurs locus..!</p>
                                </div>
                                <div class="rv-20-about_content_single_top_actions_icon">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="rv-20-about_content_single_top_actions">
                                <div class="rv-20-about_content_single_top_actions_left">
                                    <h3>Our Goals</h3>
                                    <p>Denim aliquot poseurs locus..!</p>
                                </div>
                                <div class="rv-20-about_content_single_top_actions_icon">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="rv-20-about_list">
                            <ul>
                                <li>
                                    <h4><i class="far fa-chevron-double-right"></i>Gardens</h4>
                                    <p>Suspends potent Cu abitur vestibulum poseurs sagittal trips.</p>
                                </li>

                                <li>
                                    <h4><i class="far fa-chevron-double-right"></i>Gardens</h4>
                                    <p>Suspends potent Cu abitur vestibulum poseurs sagittal trips.</p>
                                </li>
                                <li>
                                    <h4><i class="far fa-chevron-double-right"></i>Gardens</h4>
                                    <p>Suspends potent Cu abitur vestibulum poseurs sagittal trips.</p>
                                </li>
                                <li>
                                    <h4><i class="far fa-chevron-double-right"></i>Gardens</h4>
                                    <p>Suspends potent Cu abitur vestibulum poseurs sagittal trips.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="about-sh-6"> <img src="{{ asset('assets/img/about/home-6-about-3.png') }}" alt="image"></span>
    </section>
    <!-- END INDEX-20 ABOUT SECTION -->


    <!-- START INDEX-20 VIDEO SECTION -->
    <section class="rv-20-video_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7 col-sm-7">
                    <div class="rv-20-video_section_heading" data-aos="fade-up">
                        <p class="rv-20-video_sub_title rv-text-anime"> <span></span> More Information</p>
                        <h2 class="rv-20-video_section_title rv-text-anime">Uncomplicated Garden Care Services by Us.</h2>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-5">
                    <div class="rv-20-video_button" data-aos="fade-up">
                        <a href="https://www.youtube.com/embed/ruX4Le0kBng?si=lGo94ITFx_3PWjDx" class="video_btn my-video-links" data-vbtype="video" data-autoplay="true"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INDEX-20 VIDEO SECTION -->


    <!-- START INDEX-20 TESTIMONIAL SECTION -->
    <section class="rv-20-testimonial_section" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rv-20-testimonial owl-carousel">
                        <div class="rv-20-single_testimonial">
                            <div class="rv-20-single_testimonial_image">
                                <img src="{{ asset('assets/img/testimonial/home-6-1.png') }}" alt="image">
                            </div>
                            <div class="rv-20-single_testimonial_content">
                                <div class="rv-20-single_testimonial_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="rv-20-single_testimonial_text_area">“Morbi consectetur elementum purus mattis cursus purus metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia Quisque amet velit amet dui hendrerit ultricies id ipsum Mauris sit amet Suspends potent vestibulu lacinia est”</p>
                                <div class="rv-20-single_testimonial_bottom">
                                    <div class="rv-20-testimonial_author_meta">
                                        <h3 class="rv-20-testimonial_author_name"><a href="#">Douglas Lyphe</a></h3>
                                        <p class="rv-20-testimonial_author_designation">Director, Client Experience</p>
                                    </div>
                                    <div class="rv-20-single_testimonial_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rv-20-single_testimonial">
                            <div class="rv-20-single_testimonial_image">
                                <img src="{{ asset('assets/img/testimonial/home-6-1.png') }}" alt="image">
                            </div>
                            <div class="rv-20-single_testimonial_content">
                                <div class="rv-20-single_testimonial_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="rv-20-single_testimonial_text_area">“Morbi consectetur elementum purus mattis cursus purus metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia Quisque amet velit amet dui hendrerit ultricies id ipsum Mauris sit amet Suspends potent vestibulu lacinia est”</p>
                                <div class="rv-20-single_testimonial_bottom">
                                    <div class="rv-20-testimonial_author_meta">
                                        <h3 class="rv-20-testimonial_author_name"><a href="#">Douglas Lyphe</a></h3>
                                        <p class="rv-20-testimonial_author_designation">Director, Client Experience</p>
                                    </div>
                                    <div class="rv-20-single_testimonial_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rv-20-single_testimonial">
                            <div class="rv-20-single_testimonial_image">
                                <img src="{{ asset('assets/img/testimonial/home-6-1.png') }}" alt="image">
                            </div>
                            <div class="rv-20-single_testimonial_content">
                                <div class="rv-20-single_testimonial_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="rv-20-single_testimonial_text_area">“Morbi consectetur elementum purus mattis cursus purus metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia Quisque amet velit amet dui hendrerit ultricies id ipsum Mauris sit amet Suspends potent vestibulu lacinia est”</p>
                                <div class="rv-20-single_testimonial_bottom">
                                    <div class="rv-20-testimonial_author_meta">
                                        <h3 class="rv-20-testimonial_author_name"><a href="#">Douglas Lyphe</a></h3>
                                        <p class="rv-20-testimonial_author_designation">Director, Client Experience</p>
                                    </div>
                                    <div class="rv-20-single_testimonial_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INDEX-20 TESTIMONIAL SECTION -->


    <!-- START INDEX-20 PRICE SECTION -->
    <section class="rv-20-price_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="rv-20-price_section_heading" data-aos="fade-down">
                        <p class="rv-20-price_sub_title rv-text-anime"> <span></span> Pricing Plan</p>
                        <h2 class="rv-20-price_section_title rv-text-anime">Limited-Time Promotions</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_pricing_plan">
                        <div class="rv-20-pricing_plan_header">
                            <h3 class="rv-20-pricing_plan_header_title">Basic Plan</h3>
                            <p class="rv-20-pricing_plan_header_desc">Denim aliquot abitur poseurs locus..!</p>
                        </div>
                        <h4 class="rv-20-pricing_plan_price"> $59<sub>/MONTH</sub></h4>

                        <ul>
                            <li><i class="fal fa-arrow-to-right"></i>Check the health of plants</li>
                            <li><i class="fal fa-arrow-to-right"></i>Water properly</li>
                            <li><i class="fal fa-arrow-to-right"></i>Treat your soil</li>
                            <li><i class="fal fa-arrow-to-right"></i>Destroy the weeds</li>
                            <li><i class="fal fa-arrow-to-right"></i>Try raised beds</li>

                            <li>
                                <span class="rv-20-single_pricing_bg"> <img src="assets/img/price/home-6-1.png" alt="image"></span>
                            </li>
                        </ul>
                        <a class="rv-20-pricing_plan_btn" href="#">Start Today</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_pricing_plan">
                        <div class="rv-20-pricing_plan_header">
                            <h3 class="rv-20-pricing_plan_header_title">Standard Plan</h3>
                            <p class="rv-20-pricing_plan_header_desc">Denim aliquot abitur poseurs locus..!</p>
                        </div>
                        <h4 class="rv-20-pricing_plan_price"> $79<sub>/MONTH</sub></h4>

                        <ul>
                            <li><i class="fal fa-arrow-to-right"></i>Free Landscape Design</li>
                            <li><i class="fal fa-arrow-to-right"></i>Destroy the weeds</li>
                            <li><i class="fal fa-arrow-to-right"></i>Water properly</li>
                            <li><i class="fal fa-arrow-to-right"></i>Treat your soil</li>
                            <li><i class="fal fa-arrow-to-right"></i>Try raised beds</li>

                            <li>
                                <span class="rv-20-single_pricing_bg"> <img src="assets/img/price/home-6-1.png" alt="image"></span>
                            </li>
                        </ul>
                        <a class="rv-20-pricing_plan_btn" href="#">Start Today</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_pricing_plan">
                        <div class="rv-20-pricing_plan_header">
                            <h3 class="rv-20-pricing_plan_header_title">Ultimate Plan</h3>
                            <p class="rv-20-pricing_plan_header_desc">Denim aliquot abitur poseurs locus..!</p>
                        </div>
                        <h4 class="rv-20-pricing_plan_price"> $99<sub>/MONTH</sub></h4>

                        <ul>
                            <li><i class="fal fa-arrow-to-right"></i>Treat your soil</li>
                            <li><i class="fal fa-arrow-to-right"></i>Check the health of plants</li>
                            <li><i class="fal fa-arrow-to-right"></i>Water properly</li>
                            <li><i class="fal fa-arrow-to-right"></i>Destroy the weeds</li>
                            <li><i class="fal fa-arrow-to-right"></i>Try raised beds</li>

                            <li>
                                <span class="rv-20-single_pricing_bg"> <img src="assets/img/price/home-6-1.png" alt="image"></span>
                            </li>
                        </ul>
                        <a class="rv-20-pricing_plan_btn" href="#">Start Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START INDEX-20 PRICE SECTION -->


    <!-- START INDEX-20 PORTFOLIO SECTION -->
    <section class="rv-20-portfolio_section" data-aos="fade-up">
        <div class="row rv-20-ins_gp">

            <div class="rv-20-portfolio_slide swiper">
                <div class="swiper-wrapper">

                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-1.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-2.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-3.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-4.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-3.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-4.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-2.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-single_portfolio swiper-slide">
                        <div class="rv-20-single_portfolio_image">
                            <img src="{{ asset('assets/img/team/home-6-portfolio-1.png') }}" alt="image">

                            <div class="rv-20-portfolio_content">
                                <a class="rv-20-portfolio_content_icon" href="#"> <i class="fal fa-plus"></i></a>
                                <div class="rv-20-portfolio_content_txt">
                                    <p>Rubbish Removal</p>
                                    <h3>Tree Cleaning</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INDEX-20 PORTFOLIO SECTION -->


    <!-- START INDEX-20 TEAM SECTION -->
    <section class="rv-20-team_main_area_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rv-20-team_section_top">
                        <div class="rv-20-team_section_heading" data-aos="fade-down">
                            <p class="rv-20-team_sub_title rv-text-anime"> <span></span> Team Members</p>
                            <h2 class="rv-20-team_section_title rv-text-anime">Learn Who Nurtures Our Greenspaces.</h2>
                        </div>
                        <div class="rv-20-team_button_area" data-aos="fade-down">
                            <a href="#" class="rv-20-team_btn">View All Member</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-8 col-lg-4">
                    <div class="rv-20-single_team " data-aos="fade-up">
                        <div class="rv-20-single_team_image">
                            <img src="{{ asset('assets/img/team/home-6-teem-1.png') }}" alt="image">
                            <div class="rv-20-team_member_socials">
                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                            </div>
                        </div>
                        <div class="rv-20-team_member_info">
                            <i class="fas fa-share-alt"></i>
                            <span class="rv-20-team_member_designation">Garden Experts</span>
                            <h4 class="rv-20-team_member_name"><a href="#">Desmond Eagle</a></h4>
                            <h5 class="rv-20-team_drp_txt">LANDSCAPER</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-lg-4">
                    <div class="rv-20-single_team " data-aos="fade-up">
                        <div class="rv-20-single_team_image">
                            <img src="{{ asset('assets/img/team/home-6-teem-2.png') }}" alt="image">
                            <div class="rv-20-team_member_socials">
                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                            </div>
                        </div>
                        <div class="rv-20-team_member_info">
                            <i class="fas fa-share-alt"></i>
                            <span class="rv-20-team_member_designation">Garden Experts</span>
                            <h4 class="rv-20-team_member_name"><a href="#">Desmond Eagle</a></h4>
                            <h5 class="rv-20-team_drp_txt">LANDSCAPER</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-lg-4">
                    <div class="rv-20-single_team " data-aos="fade-up">
                        <div class="rv-20-single_team_image">
                            <img src="{{ asset('assets/img/team/home-6-teem-3.png') }}" alt="image">
                            <div class="rv-20-team_member_socials">
                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                            </div>
                        </div>
                        <div class="rv-20-team_member_info">
                            <i class="fas fa-share-alt"></i>
                            <span class="rv-20-team_member_designation">Garden Experts</span>
                            <h4 class="rv-20-team_member_name"><a href="#">Desmond Eagle</a></h4>
                            <h5 class="rv-20-team_drp_txt">LANDSCAPER</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END INDEX-20 TEEM SECTION -->


    <!-- START INDEX-20 CONTACT SECTION -->
    <section class="rv-20-contact_main_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="rv-20-contact_image" data-aos="fade-up">
                        <img src="{{ asset('assets/img/contact/home-6-1.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="rv-20-contact_form_area" data-aos="fade-up">
                        <div class="rv-20-contact_section_heading">
                            <p class="rv-20-contact_sub_title rv-text-anime"> <span></span>Get in Touch</p>
                            <h2 class="rv-20-contact_section_title rv-text-anime">Seeking a Home Gardener? Reach Out To Us.</h2>
                        </div>
                        <form action="#" class="rv-20-contact_form">
                            <div class="row rv-20-form_row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row rv-20-form_row">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Choose Services">
                                </div>
                            </div>
                            <textarea placeholder="Your Message"></textarea>
                            <div class="rv-20-contact_form_button">
                                <button>Send Message <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <span class="home-6-sh-1"> <img src="{{ asset('assets/img/contact/home-6-sh-1.png') }}" alt="image"></span>
        <span class="home-6-sh-2"> <img src="{{ asset('assets/img/contact/home-6-sh-2.png') }}" alt="image"></span>
    </section>
    <!-- END INDEX-20 CONTACT SECTION -->


    <!-- START INDEX-20 BLOG SECTION -->
    <section class="rv-20-blog_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="rv-20-blog_section_heading" data-aos="fade-down">
                        <p class="rv-20-blog_sub_title rv-text-anime"> <span></span> Blogs and News</p>
                        <h2 class="rv-20-blog_section_title rv-text-anime">Latest News & Article</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="{{ asset('assets/img/blog/home-6-blog-1.png') }}" alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Blossom & Bloom: Exploring The Garden World.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="{{ asset('assets/img/blog/home-6-blog-2.png') }}" alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Breathing Easier with Home Air-Purifying Plants.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rv-20-single_blog" data-aos="fade-up">
                        <div class="rv-20-blog_image">
                            <img src="{{ asset('assets/img/blog/home-6-blog-3.png') }}" alt="image">

                            <p class="rv-20-single_blog_date"> <i class="fal fa-calendar-alt"></i>June 24, 2023</p>
                        </div>
                        <h4 class="rv-20-single_blog_content_title">
                            <a href="#">Harvest Haven Nurturing your Green Spaces.</a>
                        </h4>
                        <p class="rv-20-single_blog_content_desc">Enim aliquam, vehicula sem at, luctus risus estibulum ultrices molestie.
                        </p>
                        <a href="#" class="rv-20-single_blog_btn">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INDEX-20 BLOG SECTION -->

@endsection