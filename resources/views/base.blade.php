<!DOCTYPE html>
<html lang="en" class="side-panel">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accura Lens</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Accura Lens">
    <meta name="author" content="cybernetics.me">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/demos/demo-product-landing.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('/assets/css/skins/skin-product-landing.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
    <div class="side-panel-wrapper">
        <button class="hamburguer-btn side-panel-close side-panel-toggle active" data-set-active="false">
            <span class="close">
                <span></span>
                <span></span>
            </span>
        </button>
        <div class="pt-5">
            <div class="output">

            </div>

            <a href="{{ route('index') }}" class="btn w-100  btn-secondary border-0 text-2-5 font-weight-semi-bold btn-px-4 btn-py-3 my-3">Contact Us</a>

            <h4 class="text-color-primary text-4 pt-3">Follow Us</h4>
            <ul class="social-icons social-icons-clean social-icons-medium">
                <li class="social-icons-facebook">
                    <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="social-icons-x">
                    <a href="http://www.x.com/" target="_blank" title="X">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                </li>
                <li class="social-icons-instagram">
                    <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-icons-linkedin">
                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="body">
        <header id="header" class="header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body header-border-bottom overflow-visible">
                <div class="header-container container">
                    <div class="header-row py-3">
                        <div class="header-column flex-row w-auto">
                            <div class="header-logo">
                                <a href="{{ route('index') }}">
                                    <h1>ACCURA</h1>
                                </a>
                            </div>
                        </div>
                        <div class="header-column w-100 ps-lg-5">
                            <div class="header-nav w-100 p-0">
                                <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 justify-content-start w-100">
                                    <div class="header-nav-main header-nav-main-arrows header-nav-main-effect-2 header-nav-main-sub-effect-1 w-100">
                                        <nav class="collapse w-100">
                                            <ul class="nav nav-pills flex-column flex-lg-row w-100" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item active" data-hash data-hash-offset="0" data-hash-offset-lg="70" href="#intro">Intro</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="70" href="#features">Features</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="70" href="#tour">Tour</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="70" href="#specifications">Specifications</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="#products">Products</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-column flex-row w-auto">
                            <button class="btn header-btn-collapse-nav ms-3" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield("container")

        <footer id="footer" class="bg-transparent border-0 mt-0">
            <div class="container py-5">
                <div class="row text-center text-lg-start pt-4">
                    <div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
                        <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">CUSTOMER SERVICE</h4>
                        <ul class="list list-unstyled d-flex flex-column flex-sm-row justify-content-sm-center justify-content-lg-start mb-0">
                            <li class="line-height-3 mb-0">
                                <a href="#" class="text-decoration-none text-color-hover-primary">Help & FAQs</a>
                            </li>
                            <li class="line-height-3 border border-top-0 border-bottom-0 px-sm-3 mx-sm-3 mt-2 mt-sm-0 mb-0">
                                <a href="#" class="text-decoration-none text-color-hover-primary">Order Tracking</a>
                            </li>
                            <li class="line-height-3 mt-2 mt-sm-0 mb-0">
                                <a href="#" class="text-decoration-none text-color-hover-primary">Shipping & Delivery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-xl-2 offset-xl-2 mb-4 mb-lg-0">
                        <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">SOCIAL MEDIA</h4>
                        <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">PAYMENT METHODS</h4>
                        <div class="payment-cc payment-cc-no-hover-effect text-color-dark justify-content-center justify-content-lg-start">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-stripe"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-apple-pay"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright bg-transparent">
                <div class="container py-2">
                    <hr class="bg-dark opacity-1 m-0">
                    <div class="row">
                        <div class="col text-center py-4">
                            <p class="mb-0">Accura Lens © Copyright {{ date('Y') }}. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Vendor -->
    <script src="{{ asset('/assets/vendor/plugins/js/plugins.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('/assets/js/theme.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('/assets/js/demos/demo-product-landing.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('/assets/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('/assets/js/examples/examples.image360.js') }}"></script>
    <script src="{{ asset('/assets/js/examples/examples.gallery.js') }}"></script>

</body>

</html>