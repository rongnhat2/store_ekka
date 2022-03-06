<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Ekka - @yield('title')</title>

    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <link rel="stylesheet" href="{{ asset("customer/assets/css/vendor/ecicons.min.css") }}" />

    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/animate.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/swiper-bundle.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/jquery-ui.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/countdownTimer.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/slick.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/plugins/nouislider.css") }}" />

    <link rel="stylesheet" href="{{ asset("customer/assets/css/demo1.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("customer/assets/css/responsive.css") }}" />

    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset("customer/assets/css/backgrounds/bg-4.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/custom.css") }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown ">
                                <?php if ($customer_data['is_login']): ?>
                                    <a title="My Account" href="{{ route("customer.view.profile") }}">
                                        <i class="far fa-user"></i><?php echo $customer_data['name'] ?>
                                    </a>
                                <?php else: ?>
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="far fa-user"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register">Đăng kí</a></li>
                                        <li><a class="dropdown-item" href="login">Đăng nhập</a></li>
                                    </ul>
                                <?php endif ?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="/">
                                    <img src="{{ asset("customer/assets/images/logo/logo.png") }}" alt="Site Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <div class="header-search">
                                <div class="ec-btn-group-form" action="#">
                                    <input class="form-control product-search-field" placeholder="Tìm kiếm..." type="text">
                                    <button class="submit header-search-button" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <div class="ec-header-user dropdown">
                                    <?php if ($customer_data['is_login']): ?>
                                        <a title="My Account" href="{{ route("customer.view.profile") }}" class="d-flex align-items-center">
                                            <i class="far fa-user m-r-10"></i><?php echo $customer_data['name'] ?>
                                        </a>
                                    <?php else: ?>
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-user"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="dropdown-item" href="register">Đăng kí</a></li>
                                            <li><a class="dropdown-item" href="login">Đăng nhập</a></li>
                                        </ul>
                                    <?php endif ?>
                                </div>
                                <a href="/cart" class="ec-header-btn  ">
                                    <div class="header-icon"><i class="fas fa-shopping-cart"></i></div>
                                    <span class="ec-header-count cart-count-lable cart-count"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col">
                        <div class="header-logo">
                            <a href="/"><img src="{{ asset("customer/assets/images/logo/logo.png") }}" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="/">Trang chủ</a></li>
                                <li><a href="/category?tag=0">Tất cả sản phẩm</a></li>
                                <li class="dropdown"><a href="javascript:void(0)">Danh mục</a>
                                    <ul class="sub-menu category-nav-list"> 
                                    </ul>
                                </li>
                                <li><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="/category?status=1">Đang giảm giá</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title"> Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/category?tag=0">Tất cả sản phẩm</a></li>
                        <li><a href="javascript:void(0)">Danh mục</a>
                            <ul class="sub-menu category-nav-list"> 
                            </ul>
                        </li>
                        <li><span class="main-label-note-new" data-toggle="tooltip"
                                title="NEW"></span><a href="/category?status=1">Đang giảm giá</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header> 

    @yield('body')

    <footer class="ec-footer section-space-mt">
        <div class="footer-container"> 
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="assets/images/logo/footer-logo.png"
                                            alt=""><img class="dark-footer-logo" src="assets/images/logo/dark-logo.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Liên hệ</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"> 124 minh khai, minh khai , hai bà trưng , hn</li>
                                        <li class="ec-footer-link">0915822772</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info"> 
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account"> 
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-service"> 
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <div class="col text-left footer-bottom-left">
                            <div class="footer-bottom-social">
                                <span class="social-text text-upper">Theo dõi chúng tôi:</span>
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                        href="#">Vu Khanh Ha<span>.</span></a>. All Rights Reserved</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    @yield('sub_layout')

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="cart" />
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->
 

    <!-- Vendor JS -->

    <script src="{{ asset("customer/assets/js/vendor/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/vendor/popper.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/vendor/bootstrap.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/vendor/jquery-migrate-3.3.0.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/vendor/modernizr-3.11.2.min.js") }}"></script>

    <!--Plugins JS-->
    <script src="{{ asset("customer/assets/js/plugins/swiper-bundle.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/countdownTimer.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/scrollup.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/nouislider.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/jquery.zoom.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/slick.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/infiniteslidev2.js") }}"></script>
    <script src="{{ asset("customer/assets/js/vendor/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/plugins/jquery.sticky-sidebar.js") }}"></script>
    
    <!-- Main Js -->
    <script src="{{ asset("customer/assets/js/vendor/index.js") }}"></script>
    <script src="{{ asset("customer/assets/js/main.js") }}"></script>
    <script src="{{ asset("customer/assets/js/api.js") }}"></script>
    <script src="https://kit.fontawesome.com/d8162761f2.js"></script>
    <script src="{{ asset("customer/assets/js/pagination.js") }}"></script>
    <script src="{{ asset("customer/assets/js/layout.js") }}"></script>
    @yield('js')
</body>
</html>