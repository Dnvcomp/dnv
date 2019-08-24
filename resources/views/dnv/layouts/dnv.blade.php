<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dnvcomp - Web разработка</title>
    <meta name="description" content="Dnvcomp-Web developers">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset(env('DNV')) }}/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(env('DNV')) }}/assets/img/icon.png">
    <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/main.css">
</head>
<body>
<!-- Main Wrapper Start -->
<div class="wrapper">
    <!-- Header Start -->
    <header class="header">
        <div class="header__inner fixed-header">
            <!-- Header top -->
            @yield('headerTop')
            <!-- Header top end-->
            <!-- Header navigation -->
            @yield('navigation')
            <!-- Header navigation end -->
        </div>
    </header>
    <!-- Header End -->
    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- Slider area Start -->
        @yield('slider')
        <!-- Slider area End -->
        <!-- About -->
        <div class="inner-page-content mt--9pt4">
            <div class="container">
                <div class="row mb--10pt">
                    <!-- content -->
                    @yield('content')
                    <!-- / content -->

                    <!-- Block right 1 -->
                    <div class="col-lg-3">
                        <div class="blog-sidebar pl--15 pl-lg--0">
                            <div class="bl-widget author">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="{{ asset(env('DNV')) }}/assets/img/others/team-04.jpg" alt="Author image">
                                    </div>
                                    <div class="info">
                                        <h5 class="mb--5">Mikola D</h5>
                                        <p class="degne">PHP developer</p>
                                        <p class="mb--25">An Affrotable world wide business service It is</p>
                                        <div class="autor-meta">
                                            <span>Articles <strong>84</strong></span>
                                            <span>Comments <strong>490</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block right 2 -->
                            <div class="bl-widget quote mt--50">
                                <div class="inner">
                                    <div class="post-quote">
                                        <div class="quote-info">
                                            <i class="fa fa-quote-right"></i>
                                            <div class="info">
                                                <h6 class="mb--0">CLEM OJAK</h6>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- / Block right 2 -->
                        </div>
                    </div>
                    <!-- / Block right 1 -->
                </div>
            </div>
        </div>
        <!-- / About -->
    </main>
    <!-- / Main Content Wrapper -->

    <!-- Footer -->
    <footer class="footer bg-color" data-bg-color="#F6F7FA">
        <div class="footer-top border-bottom pt--70 pb--65 pb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-md--35">
                        <div class="footer-widget">
                            <div class="textwidget mb--21">
                                <figure class="footer-logo">
                                    <img src="{{ asset(env('DNV')) }}/assets/img/logo/logo.png" alt="Logo">
                                </figure>
                            </div>
                        </div>
                        <div class="footer-widget">
                            <div class="newsletter-form-widget">
                                <p>Subscribe to our Newsletter. And get all update for next time</p>
                                <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" method="post" name="mc-embedded-subscribe-form" class="newsletter-form mc-form">
                                    <input type="email" name="newsletter_email" class="newsletter-form__input" placeholder="Enter Your Email">
                                    <button type="submit" class="newsletter-form__btn">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 offset-md-1 mb-md--35 mb-sm--25">
                        <div class="footer-widget">
                            <h3 class="widget-title mb--35 mb-sm--20">Pages</h3>
                            <div class="footer-widget">
                                <ul class="footer-menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="our-projects.html">Project</a></li>
                                    <li><a href="blog.html">News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title mb--35 mb-sm--20">Services</h3>
                            <div class="footer-widget">
                                <ul class="footer-menu">
                                    <li><a href="#">Accumulation</a></li>
                                    <li><a href="#">Taxation</a></li>
                                    <li><a href="#">Risk Management</a></li>
                                    <li><a href="#">Estate Planning</a></li>
                                    <li><a href="#">Business Planning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5">
                        <div class="footer-widget">
                            <h3 class="widget-title mb--35 mb-sm--20">Legal</h3>
                            <div class="footer-widget">
                                <ul class="footer-menu">
                                    <li><a href="#">Terms of Services</a></li>
                                    <li><a href="#">Security Policy</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ptb--17">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text">Contixs &copy; 2019 all rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- OffCanvas Menu Start -->
    <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="" class="btn-close">
                <img src="{{ asset(env('DNV')) }}/assets/img/icons/icon-cross.png" alt="Cross">
            </a>
            <nav class="offcanvas-navigation">
                <ul class="offcanvas-menu">
                    <li class="menu-item-has-children active">
                        <a href="#">
                            <span class="mm-text">Home</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">
                                    <span class="mm-text">Homepage 01</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-02.html">
                                    <span class="mm-text">Homepage 02</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.html">
                            <span class="mm-text">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="services.html">
                            <span class="mm-text">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="our-projects.html">
                            <span class="mm-text">Projects</span>
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">
                            <span class="mm-text">Blog</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-01-column.html">Blog 01 column</a>
                                    </li>
                                    <li>
                                        <a href="blog-02-columns.html">Blog 02 columns</a>
                                    </li>
                                    <li>
                                        <a href="blog-03-columns.html">Blog 03 columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog Details</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-details-audio.html">Audio Blog Details</a>
                                    </li>
                                    <li>
                                        <a href="blog-details-gallery.html">Gallery Blog Details</a>
                                    </li>
                                    <li>
                                        <a href="blog-details-image.html">image Blog Details</a>
                                    </li>
                                    <li>
                                        <a href="blog-details-video.html">Video Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="contact.html">
                            <span class="mm-text">Contact Us</span>
                        </a>
                    </li>
                </ul>
                <div class="site-info vertical">
                    <div class="site-info__item">
                        <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                        <a href="mailto:Support@contixs.com">Support@contixs.com</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->

    <!-- Global Overlay Start -->
    <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
    <!-- Global Overlay End -->
</div>
<!-- Main Wrapper End -->


<!-- ************************* JS Files ************************* -->

<!-- jQuery JS -->
<script src="{{ asset(env('DNV')) }}/assets/js/vendor.js"></script>

<!-- Main JS -->
<script src="{{ asset(env('DNV')) }}/assets/js/main.js"></script>
</body>

</html>