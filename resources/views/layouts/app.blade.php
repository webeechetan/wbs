<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#282828" />
    <title>WeBeeSocial | Creative Agency New Delhi | Digital Marketing Company</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="WeBeeSocial is a creative digital marketing agency in Delhi, India. We offer SEO, Performance and Social Media Marketing, Website design &amp; development services.">
    <meta name="keywords" content="WeBeeSocial is a creative digital marketing agency in Delhi, India. We offer SEO, Performance and Social Media Marketing, Website design &amp; development services.">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="WeBeeSocial is a creative digital marketing agency in Delhi, India. We offer SEO, Performance and Social Media Marketing, Website design &amp; development services.">
    <meta property="og:image" content="https://www.webeesocial.com/preview.png">
    <meta property="og:site_name" content="agensy">
    <meta property="og:title" content="agensy">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.webeesocial.com">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@agensy">
    <meta name="twitter:creator" content="@agensy">
    <meta name="twitter:title" content="agensy">
    <meta name="twitter:description" content="WeBeeSocial | Creative Agency New Delhi | Digital Marketing Company">
    <meta name="twitter:image" content="https://www.webeesocial.com/preview.png">

    <!-- FAVICON FILES -->
    <link href="{{ asset('frontend') }}/images/Favicon.png" rel="apple-touch-icon">
    <link href="{{ asset('frontend') }}/images/Favicon.png" rel="shortcut icon">

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
                    <li><a href="get-in-touch.php">Get in touch</a></li>
                    <li><a href="work-with-us.php">Work with us</a></li>
                </ul>
            </div>
            <!-- end side-menu -->
            <div class="sides">
                <figure>
                    <img src="{{ asset('frontend') }}/images/sidebar-img.jpg" width="100%" alt="Team Image">
                </figure>
            </div>
            <!-- end sides -->
            <div class="sides">
                <div class="titles">
                    <p>WeBeeSocial is a full-scale Digital Marketing Agency based in India and with satellite offices in UAE and Canada. We mix our years of experience and knowledge to create solutions for our clients which are not only performance driven, but also creative.  We are running kick-ass digital campaigns for our clients, even as you read this!</p>
                </div>
                <address>
                    <img src="{{ asset('frontend') }}/images/icon-map-marker.svg" width="18" alt="Location"> <span>New Delhi, India | North York, Toronto | Dubai, UAE</span></address>
                <address>
                    <a href="mailto:roshni.hr@webeesocial.com"><img src="{{ asset('frontend') }}/images/icon-mail.svg" width="18" alt="Email"> <span>hr@webeesocial.com</span></a>
                </address>
                <address>
                    <a href="get-in-touch"><img src="{{ asset('frontend') }}/images/icon-support.svg" width="18" alt="Suport"> <span>Contact Us</span></a>
                </address>
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
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Youtube</a></li>
        </ul>
        <a href="#top" class="gotop"><img src="{{ asset('frontend') }}/images/icon-gotop.svg" alt="Image"></a>
    </aside>
    <!-- end left-side -->
    <header class="header">
        <nav class="navbar">
            <div class="inner">
                <div class="logo"> <a href="index.php"><img src="{{ asset('frontend') }}/images/webeesocial_logo.svg" alt="Image"></a> </div>
                <!-- end phone -->
                <div class="main-menu">
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="{{ route('our-work') }}">Our Work</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('get-in-touch') }}">Get in touch</a></li>
                        <li><a href="{{ route('work-with-us') }}">Work with us</a></li>
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
<footer class="footer bg-light-grey sec-space pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp">
                <figure class="logo mb-3"><img src="{{ asset('frontend') }}/images/logo.png" alt="Webeesocial Logo"></figure>
                <p>We are a full service creative digital marketing agency based in New Delhi. We combine our years of experience in creating integrated marketing solutions with creative output to generate a rich digital experience for businesses. We live by our motto – “We create super-rich experiences online!”</p>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="titles">
                    <h6>Our Offices</h6>
                </div>
                <address>Sector 22, Dwarka, New Delhi 110075</address>
                <address>Saket District Centre, District Centre, Sector 6, Pushp Vihar, New Delhi, Delhi 110017</address>
                <address>AE Clover Bay Tower, Marasi Drive, Business Bay, Dubai, UAE P. O. Box - 391483</address>
                <address>CA North York, ON M3A 2Y7, Canada</address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="titles">
                    <h6>Connect With Us</h6>
                </div>
                <address>Contact us <a href="get-in-touch" class="text-link text-primary">here</a></address>
                <address><a href="mailto:saurav.k@webeesocial.com">saurav.k@webeesocial.com</a></address>
                <img src="{{ asset('frontend') }}/images/Google-partners-logo.jpg" alt="Google Partner Logo">
            </div>
            <!-- end col-3 -->
            <div class="col-12 wow fadeInUp">
                <div class="sub-footer">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mb-4 mb-lg-0">
                            <ul class="mb-2">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Our Work</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Get in touch</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Work with us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
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