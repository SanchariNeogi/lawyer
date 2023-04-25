<?php
include "database/config.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Blog 3 Column - Advokat</title>
    <?php include "Fcssfile.php"; ?>
</head>

<body>

    <!-- Preloader area start here   -->
    <div id="loading" class="image-preloader">
        <div class="loader"><img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt=""></div>
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
                                <a class="light" href="<?php echo HTTP_BASE; ?>"><img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt="logo"></a>
                                <a class="dark" href="<?php echo HTTP_BASE; ?>"><img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt="logo"></a>
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
                                                            <a href="cart.html"><img src="<?php echo HTTP_BASE; ?>images/shop/1.jpg" alt="Product Image"></a>
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
                                                            <a href="cart.html"><img src="<?php echo HTTP_BASE; ?>images/shop/2.jpg" alt="Product Image"></a>
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
                    <a href="<?php echo HTTP_BASE; ?>"><img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
                </div>
                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                        <li><i class="fa fa-phone"></i>+123445789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
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

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg1">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">FAQs </h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="<?php echo HTTP_BASE; ?>">Home</a></li>
                    <li>FAQs </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- FAQs Section Start -->
    <div class="rs-faq inner pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 md-mb-20">
                    <div class="panel-group margin-remove accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Are application fee waivers available?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        How to use keyword planner?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                                        which is not good for me?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                                        How to use picking tools?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
                                        How to keyword is trending?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
                                        Is it to paid keyword?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseTwo">
                                        How long are my test scores valid?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel-group margin-remove" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        Are application fee waivers available?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        How to use keyword planner?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        which is not good for me?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEleven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                        How to use picking tools?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwelve">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                        How to keyword is trending?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThirteen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen" aria-expanded="true">
                                        Is it to paid keyword?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFourteen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                        How long are my test scores valid?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFifteen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                                        How long are my test scores valid?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Section End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-one md-mb-50">
                        <div class="about-widget">
                            <a href="<?php echo HTTP_BASE; ?>">
                                <img src="<?php echo HTTP_BASE; ?>images/brass_tacks_logo.png" alt="Footer Logo">
                            </a>
                            <div class="footer-info">
                                <p class="footer-desc">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
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
                        <div class="desc mb-24">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</div>
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
                                    <img src="<?php echo HTTP_BASE; ?>images/Latest_News/img_3.png" alt="">
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
                                    <img src="<?php echo HTTP_BASE; ?>images/Latest_News/img_1.png" alt="">
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
                        <p class="desc">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
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
    <script src="<?php echo HTTP_BASE ?>js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="<?php echo HTTP_BASE ?>js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo HTTP_BASE ?>js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="<?php echo HTTP_BASE ?>js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="<?php echo HTTP_BASE ?>js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="<?php echo HTTP_BASE ?>js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="<?php echo HTTP_BASE ?>js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="<?php echo HTTP_BASE ?>js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="<?php echo HTTP_BASE ?>js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="<?php echo HTTP_BASE ?>js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="<?php echo HTTP_BASE ?>js/skill.bars.jquery.js"></script>
    <script src="<?php echo HTTP_BASE ?>js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="<?php echo HTTP_BASE ?>js/waypoints.min.js"></script>
    <!-- video js -->
    <script src="<?php echo HTTP_BASE ?>js/jquery.mb.YTPlayer.min.js"></script>
    <!-- magnific popup js -->
    <script src="<?php echo HTTP_BASE ?>js/jquery.magnific-popup.min.js"></script>
    <!-- Nivo slider js -->
    <script src="<?php echo HTTP_BASE ?>inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- plugins js -->
    <script src="<?php echo HTTP_BASE ?>js/plugins.js"></script>
    <!-- contact form js -->
    <script src="<?php echo HTTP_BASE ?>js/contact.form.js"></script>
    <!-- main js -->
    <script src="<?php echo HTTP_BASE ?>js/main.js"></script>
</body>

</html>