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
                <h1 class="breadcrumbs-title white-color">Blog </h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="<?php echo HTTP_BASE; ?>">Home</a></li>
                    <li>Blog </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Blog Section Start -->
    <div class="rs-blog inner modify gray-bg pt-120 pb-90 md-pt-80 md-pb-50">
        <div class="container">
            <div class="row">

                <?php
                $query_manage_gallery = "SELECT * FROM blogs order by id  DESC";
                $rec = mysqli_query($con, $query_manage_gallery);
                //echo $numrows = mysqli_num_rows($rec);
                $i = 1;
                //print_r($rec);
                while ($d1 = mysqli_fetch_array($rec)) {
                    $images = $d1['images'];
                ?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="<?php echo HTTP_BASE . '/blogs/' . $images; ?>" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#"><?php echo $d1['blog_name']; ?></a></h3>

                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/2.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">Flexible working Hours</a></h3>
                                <ul class="blog-meta">
                                    <li>June 11, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Attorneys</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/3.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">The Top Law Students</a></h3>
                                <ul class="blog-meta">
                                    <li>June 12, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Family</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/4.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">Clean Sources for Fast</a></h3>
                                <ul class="blog-meta">
                                    <li>June 13, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Firm</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/5.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">Variety Of Different Cases</a></h3>
                                <ul class="blog-meta">
                                    <li>June 14, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Injury</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/6.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">Solutions For Legal Problems</a></h3>
                                <ul class="blog-meta">
                                    <li>June 15, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Criminal</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog/inner/6.jpg" alt="Blog Image">
                            </div>
                            <div class="text-bottom">
                                <h3 class="title2"><a href="#">Solutions For Legal Ali</a></h3>
                                <ul class="blog-meta">
                                    <li>June 15, 2019</li>
                                    <li>Admin</li>
                                    <li><a href="#">Criminal</a></li>
                                </ul>
                                <div class="blog-desc">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</div>
                                <div class="blog-btn mt-17"><a href="#" class="readon2">Read More</a></div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

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