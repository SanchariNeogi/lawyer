<!DOCTYPE html>
<?php
include "database/config.php";
?>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Blog 3 Column - Advokat</title>
    <?php include "Fcssfile.php"; ?>
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="defult-home">

    <!-- Preloader area start here   -->
    <div id="loading" class="image-preloader">
        <div class="loader"><img src="images/brass_tacks_logo.png" alt=""></div>
    </div>
    <!--End preloader here -->

    <!--Full width header Start-->
    <div class="full-width-header header-transparent">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container-fluid">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@btbs.in">info@btbs.in</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+91 9836375353">+91 9836375353</a></li>
                                <li><i class="fa fa-clock-o"></i> 9:00 AM - 05:00 PM</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="get-btn"><a href="#">Free Consultation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-area">
                                <a class="light" href="index.html"><img src="images/brass_tacks_logo.png" alt="logo"></a>
                                <a class="dark" href="index.html"><img src="images/brass_tacks_logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <?php include "menu.php"; ?>
                                </div> <!-- //.main-menu -->
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="icon-bar cart-inner mini-cart-active">
                                            <a class="cart-icon">
                                                <span class="cart-count">2</span>
                                                <i class="flaticon-shopping-bag-1"></i>
                                            </a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <ul class="cart-icon-product-list">
                                                    <li class="display-flex">
                                                        <div class="icon-cart">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="cart.html">Law Book</a><br>
                                                            <span class="quantity">1 × $30.00</span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="cart.html"><img src="images/shop/1.jpg" alt="Product Image"></a>
                                                        </div>
                                                    </li>
                                                    <li class="display-flex">
                                                        <div class="icon-cart">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="cart.html">Spirit Level</a><br>
                                                            <span class="quantity">1 × $30.00</span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="cart.html"><img src="images/shop/2.jpg" alt="Product Image"></a>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="total-price text-center">
                                                    <span class="subtotal">Subtotal:</span>
                                                    <span class="current-price">$85.00</span>
                                                </div>

                                                <div class="cart-btn text-center">
                                                    <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                    <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
                <div class="canvas-logo">
                    <a href="index.html"><img src="images/brass_tacks_logo.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                        ‘Content here, content here’, making it look like readable English.</p>
                </div>
                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                        <li><i class="fa fa-phone"></i>+123445789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                        </li>
                        <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider1">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    <img src="images/slider/s_a.jpg" alt="" title="#slide-1" />
                    <img src="images/slider/s_b.jpg" alt="" title="#slide-2" />
                </div>
                <!-- Slide 1 -->
                <div id="slide-1" class="slider-direction">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <div class="sl-sub-title">Need Any Help</div>
                                        <h1 class="sl-title white-color">We Fight Right</h1>
                                        <div class="sl-desc margin-0">
                                            We denounce with righteous indignation and dislike men who are <br>beguiled
                                            and demoralized by the charms of pleasure.
                                        </div>
                                    </div>
                                    <div class="slider-bottom">
                                        <ul>
                                            <li><a href="#" class="readon">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden-md">
                                <div class="sl-ly-img">
                                    <img src="<?= HTTP_BASE ?>images/slider/ly2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Slide 2 -->
                <div id="slide-2" class="slider-direction">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <div class="sl-sub-title">Award Winning</div>
                                        <h1 class="sl-title white-color">Leading Law Firm</h1>
                                        <div class="sl-desc margin-0">
                                            We denounce with righteous indignation and dislike men who are <br>beguiled
                                            and demoralized by the charms of pleasure.
                                        </div>
                                    </div>
                                    <div class="slider-bottom">
                                        <ul>
                                            <li><a href="#" class="readon">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden-md">
                                <div class="sl-ly-img">
                                    <img src="<?= HTTP_BASE ?>images/slider/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Services Start -->
        <div id="rs-services" class="rs-services style1 long-gap md-pt-80">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-12">
                        <div class="service-inner">
                            <div class="service-box">
                                <div class="image-part">
                                    <img src="images/services/icons/1.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">100% Success Rate</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary,
                                        with some citing the 15th century.</div>
                                </div>
                            </div>
                            <div class="service-box dark-bg">
                                <div class="image-part">
                                    <img src="images/services/icons/2.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Expert Legal Services</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary,
                                        with some citing the 15th century.</div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="image-part">
                                    <img src="images/services/icons/3.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Highly Recommend</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary,
                                        with some citing the 15th century.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-78">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-5 md-mb-30">
                        <img src="images/about/image.png" alt="" class="aboutus_pic_custom">
                    </div>
                    <div class="col-lg-7 pl-45 md-pl-15">
                        <div class="sec-title mb-24">
                            <div class="sub-title primary">About Us</div>
                            <h2 class="title mb-0">Welcome to Brass Tacks Business Services</h2>
                        </div>
                        <p class="des mb-36">Our objective is to help small and mid-sized corporates achieve their growth plans by offering them
                            solutions on regulatory compliance, financial advisory, business development and knowledge
                            sharing. We offer customers varied consultancy services from compliance, financing, strategic
                            planning and business development to cater to their requirements.</p>
                        <p class="des">The firm has been started in 2022 by a former banker with diversified experience in different areas
                            and network in various professional fields. Basis the knowledge and practical experience gathered
                            the team aims to serve and support the clients.</p>
                        <div class="info mt-25">
                            <div class="signature">
                                <img class="mb-25" src="<?php echo HTTP_BASE; ?>images/about/signature.png" alt="">
                            </div>
                            <p class="designation">CEO & Founder of BTBS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Our Practice Areas Start -->
        <div class="rs-our-practice style1 title-bg pt-114 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-49 xs-mb-31">
                    <h2 class="title white-color mb-0">Customer Objective</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Corporate security</a></h4> -->
                                <div class="desc">Native necessary compliance and regulatory matters realted to Banking
                                    and FEMA</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Bankruptcy law</a></h4> -->
                                <div class="desc">
                                    Grow your business while we manage your compliance needs
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/3.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Education law</a></h4> -->
                                <div class="desc">
                                    Mitigate risk of penalties regulatory oversight and other growth barriers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/4.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Family law</a></h4> -->
                                <div class="desc">
                                    Develop knowledge on banking regulations expanding your ease of doing business
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/5.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Personal injury</a></h4> -->
                                <div class="desc">
                                    Strengthen your core buniess while we support scale and future innovations
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="images/practice/icons/6.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Real estate law</a></h4> -->
                                <div class="desc">
                                    Lorem Ispum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-area text-center pt-30">
                    <a href="javascript:void('0')" id="consult_now" onclick="scrolltop()" class="readon">Consult Now</a>
                </div>
            </div>
        </div>
        <!-- Our Practice Areas END -->

        <!-- Our Case Result Start -->
        <div class="rs-case-result style1 pt-114 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-51 xs-mb-31">
                    <div class="sub-title primary">Our Success</div>
                    <h2 class="title mb-0">Our Cases Result</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="item">
                        <img src="<?php echo HTTP_BASE; ?>images/Our_Case/trade_regulatory_support_case.png" alt="">
                        <div class="result-contents">
                            <h3 class="title"><a href="<?php echo HTTP_BASE . 'caseresultone/'; ?>">Trade Regulatory Support Case</a></h3>
                            <!-- <div class="categories"><a href="#">Risk Breach</a></div> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo HTTP_BASE; ?>images/Our_Case/financial_advisory_2.png" alt="">
                        <div class="result-contents">
                            <h3 class="title"><a href="<?php echo HTTP_BASE . 'caseresulttwo/' ?>">Financial Advisory</a></h3>
                            <!-- <div class="categories"><a href="#">Risk Breach</a></div> -->
                        </div>
                    </div>
                    <!-- <div class="item">
                        <img src="images/Our_Case/img_3.png" alt="">
                        <div class="result-contents">
                            <h3 class="title"><a href="#">International Law</a></h3> -->
                    <!-- <div class="categories"><a href="#">Risk Breach</a></div> -->
                    <!-- </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Our Case Result END -->

        <!------why get down start-------->
        <div class="rs-our-practice style1 title-bg pt-114 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-49 xs-mb-31">
                    <h2 class="title white-color mb-0"> WHY GET DOWN TO BRASS TACKS?</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="<?php echo HTTP_BASE; ?>images/practice/icons/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Corporate security</a></h4> -->
                                <div class="desc">
                                    Founded by a former baner with over 15 years of experience in Commercial Banking.
                                    Cross Border transactions, FX and Trade
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="<?php echo HTTP_BASE; ?>images/practice/icons/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Bankruptcy law</a></h4> -->
                                <div class="desc">
                                    Built and managed on a network of professionals across functional areas- CAs,
                                    Lawyers, CS, Marketing and BDM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="<?php echo HTTP_BASE; ?>images/practice/icons/3.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Education law</a></h4> -->
                                <div class="desc">
                                    Developed expertise in varied fields from early stage incorporation, regulatory
                                    compliance, business development and raising finance.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="<?php echo HTTP_BASE; ?>images/practice/icons/4.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Family law</a></h4> -->
                                <div class="desc">
                                    Experience with dealing with regulators and financial institutions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="<?php echo HTTP_BASE; ?>images/practice/icons/5.png" alt="">
                            </div>
                            <div class="content-part">
                                <!-- <h4 class="title"><a href="#">Personal injury</a></h4> -->
                                <div class="desc">
                                    Exposure to dealing with clients in varied geographical markets
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-area text-center pt-30">
                    <!-- <a href="#contact-form" class="readon">Consult Now</a> -->
                    <a href="javascript:void('0')" id="consult_now1" onclick="scrolltop()" class="readon">Consult Now</a>
                </div>
            </div>
        </div>
        <!------why get down end-------->


        <!-- our area of expertise Start -->
        <div class="conatiner-fluid mt-3">
            <h2 class=" text-center ">Our Area Of Expertise</h2>
            <div class="expertise_div">
                <div class="div_one">
                    <img src="<?php echo HTTP_BASE; ?>images/Our_Areas_of_expertise/risk_management_consultancy.png" alt="">
                    <div class="top_part">
                        <p>Risk Management Consultancy</p>
                        <a href="#">
                            <div class="side_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div_one">
                    <img src="<?php echo HTTP_BASE; ?>images/Our_Areas_of_expertise/financial_advisory.png" alt="">
                    <div class="top_part">
                        <p>Financial Advisory</p>
                        <a href="#">
                            <div class="side_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div_one">
                    <img src="<?php echo HTTP_BASE; ?>images/Our_Areas_of_expertise/business_development.png" alt="">
                    <div class="top_part">
                        <p>Business Development</p>
                        <a href="#">
                            <div class="side_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- our area of expertise End -->

        <!-- Faq Section Start -->
        <div class="rs-faq style1 pt-120 pb-50 md-pt-72 md-pb-80" id='form_view'>
            <div class="container padding-0 md-pr-15 md-pl-15">
                <div class="content-wrap title-bg">
                    <div class="row md-col-padding">
                        <div class="col-lg-6 pr-0">
                            <div class="faq-part">
                                <div class="sec-title mb-45 xs-mb-31">
                                    <div class="sub-title primary">Any Questions ?</div>
                                    <h2 class="title white-color mb-0">Frequently Asked Questions</h2>
                                </div>
                                <div id="accordion" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Q. 1 : Why
                                                should I trust your firm for my case?</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">We denounce with righteous indignation and dislike
                                                men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Q.
                                                2 : What types of cases does your law firm handle?</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">We denounce with righteous indignation and dislike
                                                men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Q. 3 : What are your opening hours?</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">We denounce with righteous indignation and dislike
                                                men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">Q. 4 : Do you charge for consultations?</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">We denounce with righteous indignation and dislike
                                                men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-0">
                            <div class="free-consultation">
                                <div class="sec-title mb-45 xs-mb-31">
                                    <div class="sub-title primary">Schedule For</div>
                                    <h2 class="title white-color mb-0">Free Consultation</h2>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-field">
                                                <input type="text" placeholder="Your Name" id="name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-field">
                                                <input type="email" placeholder="Your Email" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-field">
                                                <input type="text" placeholder="Phone" id="phone_number" name="phone_number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select-option">
                                                <select name="topics" id="topics">
                                                    <option value="Business Law">Business Law</option>
                                                    <option value="Traffic Law">Traffic Law</option>
                                                    <option value="Criminal Law">Criminal Law</option>
                                                    <option value="Family Law">Family Law</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-field">
                                                <textarea placeholder="Your Message" id="message" name="message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn submit-btn mt-30">
                                        <button class="readon upper" type="submit">Submit request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Section End -->


        <!-- Blog Section Start -->
        <div class="rs-blog style1 pt-50 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-51 xs-mb-31">
                    <div class="sub-title primary">Blog Post</div>
                    <h2 class="title mb-0">Latest Blog Post</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <?php
                    $query_manage_gallery = "SELECT * FROM blogs order by id  DESC";
                    $rec = mysqli_query($con, $query_manage_gallery);
                    //echo $numrows = mysqli_num_rows($rec);
                    $i = 1;
                    //print_r($rec);
                    while ($d1 = mysqli_fetch_array($rec)) {
                        $images = $d1['images'];
                    ?>
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="<?php echo HTTP_BASE . '/blogs/' . $images; ?>" alt=" Blog Image">
                                <div class="blog-date">June 15, 2019</div>
                            </div>
                            <div class="text-bottom">
                                <h4 class="title"><a href="#"><?php echo $d1['blog_name']; ?></a></h4>
                                <ul class="blog-meta">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Traffic Tikets</a></li>
                                </ul>
                                <div class="blog-desc"></div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_1.png" alt="Blog Image">
                            <div class="blog-date">June 15, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Family Law Needs Customers</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Traffic Tikets</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_2.png" alt="Blog Image">
                            <div class="blog-date">June 15, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Know About Property Law</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Featured</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_3.png" alt="Blog Image">
                            <div class="blog-date">June 17, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">International Blog Law</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Traffic Tikets</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_3.png" alt="Blog Image">
                            <div class="blog-date">June 18, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Library Law Blog Provides</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Traffic Tikets</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_1.png" alt="Blog Image">
                            <div class="blog-date">June 19, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Traffic Tikets provides Law</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Featured</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_2.png" alt="Blog Image">
                            <div class="blog-date">May 10, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Business Needs Customers Law</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Featured</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog/img_3.png" alt="Blog Image">
                            <div class="blog-date">June 15, 2019</div>
                        </div>
                        <div class="text-bottom">
                            <h4 class="title"><a href="#">Best Education Law and Training</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Traffic Tikets</a></li>
                            </ul>
                            <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was...</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Testimonia Section Start -->
        <div class="rs-testimonia bg1 pt-120 pb-274 md-pt-84 md-pb-80">
            <div class="container">
                <div class="testimonials-inner">
                    <div class="slider-for">
                        <div class="item">
                            <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to
                                those who failness fallness just in their duty through weakness.</p>
                            <ul class="ratings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <div class="author-info">
                                <h4 class="name">John Alen</h4>
                                <span class="designation">SEO of Codeless</span>
                            </div>
                        </div>
                        <div class="item">
                            <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to
                                those who failness fallness just in their duty through weakness.</p>
                            <ul class="ratings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <div class="author-info">
                                <h4 class="name">Leana Mendis</h4>
                                <span class="designation">Lawyer</span>
                            </div>
                        </div>
                        <div class="item">
                            <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to
                                those who failness fallness just in their duty through weakness.</p>
                            <ul class="ratings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <div class="author-info">
                                <h4 class="name">Micle Shwan</h4>
                                <span class="designation">Designer</span>
                            </div>
                        </div>
                        <div class="item">
                            <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to
                                those who failness fallness just in their duty through weakness.</p>
                            <ul class="ratings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <div class="author-info">
                                <h4 class="name">Israt Jahan</h4>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="item">
                            <img src="<?php echo HTTP_BASE; ?>images/Lawyer/img_1.png" alt="image" draggable="false" />
                        </div>
                        <div class="item">
                            <img src="<?php echo HTTP_BASE; ?>images/Lawyer/img_2.png" alt="image" draggable="false" />
                        </div>
                        <div class="item">
                            <img src="<?php echo HTTP_BASE; ?>images/Lawyer/img_3.png" alt="image" draggable="false" />
                        </div>
                        <div class="item">
                            <img src="<?php echo HTTP_BASE; ?>images/Lawyer/img_1.png" alt="image" draggable="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonia Section End -->

        <!-- Counter Up Section Start Here-->
        <div id="rs-counter" class="rs-counter style1 md-pt-80">
            <div class="container padding-0 md-pl-pr-15">
                <div class="counter-wrap secondary-bg mt--154 md-mt-0">
                    <div class="row">
                        <!-- COUNTER-LIST START -->
                        <div class="col-lg-3 col-sm-6 md-mb-30">
                            <div class="rs-counter-list">
                                <div class="icon-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/counter/icons/1.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <div class="rs-count">1820</div>
                                    <h4 class="title">Case Closed</h4>
                                </div>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->
                        <!-- COUNTER-LIST START -->
                        <div class="col-lg-3 col-sm-6 md-mb-30">
                            <div class="rs-counter-list">
                                <div class="icon-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/counter/icons/2.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <div class="rs-count">1505</div>
                                    <h4 class="title">Expert Attorneys</h4>
                                </div>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->
                        <!-- COUNTER-LIST START -->
                        <div class="col-lg-3 col-sm-6 xs-mb-30">
                            <div class="rs-counter-list">
                                <div class="icon-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/counter/icons/3.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <div class="rs-count">2025</div>
                                    <h4 class="title">Trusted Clients</h4>
                                </div>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->
                        <!-- COUNTER-LIST START -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="rs-counter-list">
                                <div class="icon-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/counter/icons/4.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <div class="rs-count">1010</div>
                                    <h4 class="title">Successful Case</h4>
                                </div>
                            </div>
                        </div>
                        <!-- COUNTER-LIST END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Down Section End Here-->

    </div>

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer mt-5">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-one md-mb-50">
                        <div class="about-widget">
                            <a href="index.html">
                                <img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt="Footer Logo">
                            </a>
                            <div class="footer-info">
                                <p class="footer-desc">We denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms.</p>
                                <p class="footer-desc">Righteous indignation and dislike men who are so the charms.</p>
                            </div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-two md-mb-50">
                        <h5 class="footer-title">Quick Contact Info</h5>
                        <div class="desc mb-24">We denounce with righteous indignation and dislike men who are so
                            beguiled and demoralized by the charms.</div>
                        <ul class="footer-address">
                            <li><i class="fa fa-globe"></i><span>Brass Tacks Business Services
                                    Flat no. 3 A
                                    8 B Wood Street
                                    Kolkata – 700016</span></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+91 9836375353">+91 9836375353</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@btbs.in">info@btbs.in</a></li>
                            <li><i class="fa fa-clock-o"></i>Mon – Fri: 09:00 AM - 05:00 PM</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-three md-mb-50">
                        <h5 class="footer-title">Latest News</h5>
                        <div class="footer-news">
                            <div class="news-item">
                                <div class="image-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/Latest_News/img_1.png" alt="">
                                </div>
                                <div class="content-part">
                                    <a class="title" href="#">Best Education Law and Training</a>
                                    <span class="date">June 15, 2019</span>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="image-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/Latest_News/img_2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <a class="title" href="#">Flexible working Hours</a>
                                    <span class="date">June 15, 2019</span>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="image-part">
                                    <img src="<?php echo HTTP_BASE; ?>images/Latest_News/img_3.png" alt="">
                                </div>
                                <div class="content-part">
                                    <a class="title" href="#">The Top Law Students</a>
                                    <span class="date">June 15, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-four">
                        <h5 class="footer-title">Subscribe to Our Newsletter</h5>
                        <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled and
                            demoralized by the charms.</p>
                        <p class="desc">Righteous indignation and dislike men who are so the charms.</p>
                        <form class="footer-newsletter">
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>&copy; 2020 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="js/skill.bars.jquery.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="js/waypoints.min.js"></script>
    <!-- video js -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- magnific popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Nivo slider js -->
    <script src="inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- contact form js -->
    <script src="js/contact.form.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
    <script>
        function scrolltop() {
            $(document).ready(function() {
                $('html, body').animate({
                    scrollTop: $("#form_view").offset().top
                }, 2000);
            });
        }
        // $(document).ready(function() {
        //     $("#consult_now").on('click', function() {

        //         $('html, body').animate({
        //             scrollTop: $("#form_view").offset().top
        //         }, 2000);
        //     });
        // });
    </script>
</body>

</html>