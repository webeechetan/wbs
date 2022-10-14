<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#282828" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:site_name" content="webeesocial">
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.webeesocial.com">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="webeesocial">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="https://www.webeesocial.com/preview.png">

    <!-- FAVICON FILES -->
    <link href="{{ asset('frontend') }}/images/Favicon.png" rel="apple-touch-icon">
    <link href="{{ asset('frontend') }}/images/Favicon.png" rel="shortcut icon">

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/app.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="page-loaded">
    <!-- end transition-overlay -->
    <div class="navigation-menu">
        <div class="inner">
            <div class="side-menu">
                <ul>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="our-services.php">Our Services</a></li>
                    <li><a href="our-work.php">Our Work</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="get-in-touch.php">Get In Touch</a></li>
                    <li><a href="work-with-us.php">Work With Us</a></li>
                </ul>
            </div>
            <!-- end side-menu -->
            <div class="sides sides-img">
                <figure>
                    <img src="{{ asset('frontend') }}/images/sidebar-img.jpg" width="100%" alt="Team Image">
                </figure>
            </div>
            <!-- end sides -->
            <div class="sides">
                <div class="titles">
                    <p class="mb-0">WeBeeSocial is a full-scale Digital Marketing Agency based in India and with satellite offices in UAE and Canada. We mix our years of experience and knowledge to create solutions for our clients which are not only performance driven, but also creative.  We are running kick-ass digital campaigns for our clients, even as you read this!</p>
                </div>
                <address class="mb-4">
                    <img src="{{ asset('frontend') }}/images/icon-map-marker.svg" width="18" alt="Location"> <span>New Delhi, India | North York, Toronto | Dubai, UAE</span>
                </address>
                <div class="row">
                    <div class="col-lg-6">
                        <address class="mb-4">
                            <h6>For Business Enquiries:</h6>
                            <a href="mailto:saurav.k@webeesocial.com"><img src="{{ asset('frontend') }}/images/icon-mail.svg" width="18" alt="Email"> <span>saurav.k@webeesocial.com</span></a>
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address class="mb-4">
                            <h6>For Jobs Enquiries:</h6>
                            <a href="mailto:hr@webeesocial.com"><img src="{{ asset('frontend') }}/images/icon-mail.svg" width="18" alt="Email"> <span>hr@webeesocial.com</span></a>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <address class="mb-0"><img src="{{ asset('frontend') }}/images/icon-support.svg" width="18" alt="Suport"> Contact us <a href="get-in-touch" class="btn-link text-underline"><span>here</span></a></address>
                    </div>
                    <div class="col-lg-6">
                        <address class="mb-0">
                            <h6>Follow us:</h6>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/webeesocial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/webeesocial" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/webeesocial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/webeesocial/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCDT0KsuN4ytOlEwX_tZxAqA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://www.behance.net/webeesocial/" target="_blank"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </address>
                    </div>
                </div>
            </div>
            <!-- end sides -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end navigation-menu -->
    <aside class="left-side">
        <div class="logo">
            <img src="{{ asset('frontend') }}/images/webeesocial_icon.svg" alt="Image">
        </div>
        <ul>
            <li><a href="https://www.instagram.com/webeesocial/">Instagram</a></li>
            <li><a href="https://www.linkedin.com/company/webeesocial/">Linkedin</a></li>
            <li><a href="https://www.youtube.com/channel/UCDT0KsuN4ytOlEwX_tZxAqA">Youtube</a></li>
        </ul>
        <a href="#top" class="gotop"><img src="{{ asset('frontend') }}/images/icon-gotop.svg" alt="Image"></a>
    </aside>
    <!-- end left-side -->
    <header class="header">
        <nav class="navbar">
            <div class="inner">
                <div class="logo"> <a href="{{ route('home') }}"><img src="{{ asset('frontend') }}/images/logo-tm.png" alt="Webeesocial Logo"></a> </div>
                <!-- end phone -->
                <div class="main-menu">
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="{{ route('our-work') }}">Our Work</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('get-in-touch') }}">Get In Touch</a></li>
                        <li><a href="{{ route('work-with-us') }}">Work With Us</a></li>
                    </ul>
                </div>
                <!-- end main-menu -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="burger">
                        <svg id="burger-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <title>Show / Hide Navigation</title>
                            <rect class="burger-svg__base" width="50" height="50" />
                            <g class="burger-svg__bars">
                                <rect class="burger-svg__bar burger-svg__bar-1" x="14" y="18" width="22" height="2" />
                                <rect class="burger-svg__bar burger-svg__bar-2" x="14" y="24" width="22" height="2" />
                                <rect class="burger-svg__bar burger-svg__bar-3" x="14" y="30" width="22" height="2" />
                            </g>
                        </svg>
                    </div>
                    <!-- end burger -->
                </div>
                <!-- end hamburger-menu -->
            </div>
            <!-- end inner -->
        </nav>
        <!-- end navbar -->
    </header>
    <!-- end header -->
    <main>
    @yield('content')
    <!-- end footer bottom -->
    </main>
<!-- end work-with-us -->
<!-- Footer -->
<footer class="footer sec-space pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <figure class="logo mb-3"><img src="{{ asset('') }}/frontend/images/logo-white.png" alt="Webeesocial Logo"></figure>
                <p>We are a full service creative digital marketing agency based in New Delhi. We combine our years of experience in creating integrated marketing solutions with creative output to generate a rich digital experience for businesses. We live by our motto – “We create super-rich experiences online!”</p>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-4 col-md-6">
                <div class="titles">
                    <h6>Our Offices</h6>
                </div>
                <address class="icon-list"><img src="{{ asset('') }}/frontend/images/icon-map-white-marker.svg" alt="Location"> <span>Sector 22, Dwarka, New Delhi 110075</span></address>
                <address class="icon-list"><img src="{{ asset('') }}/frontend/images/icon-map-white-marker.svg" alt="Location"> <span>Saket District Centre, District Centre, Sector 6, Pushp Vihar, New Delhi, Delhi 110017</span></address>
                <address class="icon-list"><img src="{{ asset('') }}/frontend/images/icon-map-white-marker.svg" alt="Location"> <span>AE Clover Bay Tower, Marasi Drive, Business Bay, Dubai, UAE P. O. Box - 391483</span></address>
                <address class="icon-list"><img src="{{ asset('') }}/frontend/images/icon-map-white-marker.svg" alt="Location"> <span>CA North York, ON M3A 2Y7, Canada</span></address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="titles">
                    <h6>Connect With Us</h6>
                </div>
                <address>Contact us <a href="get-in-touch" class="text-link"><b>here</b></a></address>
                <address class="mb-4">
                    <div class="titles mb-0">
                        <h6 class="mb-2">Write to us</h6>
                    </div>
                    <a href="mailto:saurav.k@webeesocial.com">saurav.k@webeesocial.com</a>
                </address>
                <address class="mb-4">
                    <div class="titles mb-0">
                        <h6 class="mb-2">Follow us:</h6>
                    </div>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/webeesocial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/webeesocial" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/webeesocial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/webeesocial/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCDT0KsuN4ytOlEwX_tZxAqA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.behance.net/webeesocial/" target="_blank"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </address>
                <img src="{{ asset('') }}/frontend/images/Google-partners-logo.jpg" width="200" alt="Google Partner Logo">
            </div>
            <!-- end col-3 -->
            <div class="col-12">
                <div class="sub-footer">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mb-4 mb-lg-0">
                            <ul class="mb-2">
                                <li><a href="{{ asset('') }}/our-services">Our Services</a></li>
                                <li><a href="{{ asset('') }}/our-work">Our Work</a></li>
                                <li><a href="{{ asset('') }}/blog">Blog</a></li>
                                <li><a href="{{ asset('') }}/get-in-touch">Get in touch</a></li>
                                <li><a href="{{ asset('') }}/terms-conditions">Terms & Conditions</a></li>
                                <li><a href="{{ asset('') }}/privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <span>© 2022 Webeesocial - All rights Reserved</span>
                        </div>
                    </div>
                </div>
                <!-- end sub-footer -->
            </div>
            <!-- end col-12 -->
        </div>
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->
<audio id="hamburger-hover" src="audio/link.mp3" preload="auto"></audio>

<!-- JS FILES -->
<script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/js/isotope.min.js"></script>
<script src="{{ asset('frontend') }}/js/swiper.min.js"></script>
<script src="{{ asset('frontend') }}/js/TweenMax.min.js"></script>
<script src="{{ asset('frontend') }}/js/odometer.min.js"></script>
<script src="{{ asset('frontend') }}/js/fancybox.min.js"></script>
<script src="{{ asset('frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('frontend') }}/js/scripts.js"></script>

</body>

</html>