
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Macagrofarms Store | Online Shopping Bringing Organic Farm Products to your location</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Macagrofarms is #1 farm product store that offers the best farm products to your niche">
    <meta name="keywords" content="Farm Store, Best Farm Store ever, Sign up page fore macagro farms, Nigeria Farm Product">
    <meta name="title" content="Macagrofarms Store | Online Shopping for Farm Products, Organic Farm Products &amp; More!">
    <meta property="og:title" content="Macagrofarms Store | Online Shopping for Farm Products, Organic Farm Products &amp; More!">
    <meta property="og:type" content="products">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/macagro favicon.png">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <!-- Toaster CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>

    <div class="home-wrapper home-2">
        <!-- Header Area Start Here -->
        <header class="main-header-area ">
            <!-- Header Top Area Start Here -->
            <div class="header-top-area header-top-2">
                <div class="container container-default-2 custom-area">
                    <div class="row">
                        <div class="col-12 col-custom header-top-wrapper text-center">
                            <div class="short-desc text-dark">
                                <p>Get 35% off for new product </p>
                            </div>
                            <div class="header-top-button">
                                <a href="shop-fullwidth.html">Shop Now</a>
                            </div>
                            <span class="top-close-button">X</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Main Header Area Start -->
            <div class="main-header">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo d-flex align-items-center">
                                        <a href="index">
                                            <img class="img-full" src="assets/images/logo/Macagrofarms Official Logo2.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="index">
                                                    <span class="menu-text"> Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop">
                                                    <span class="menu-text">Shop</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about-us">
                                                    <span class="menu-text"> About</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us">
                                                    <span class="menu-text">Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                            <li class="login-register-wrap d-none d-xl-flex">
                                                <?php
                                                    if (isset($_SESSION['user'])) { ?>
                                                        <span><a href="logout">Logout</a></span>
                                                    <?php } else { ?>
                                                        <span><a href="login">Login</a></span>
                                                        <span><a href="register">Register</a></span>
                                                <?php } ?>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="cart" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <?php
                                                        if (isset($_SESSION['user'])) { 
                                                            $totalCart = getCartTotal("cart", "user_id", $_SESSION['user']); ?>
                                                            <span class="cart-item_count"><?= $totalCart; ?></span>
                                                    <?php } ?>
                                                </a>

                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header Area End -->
            <!-- Sticky Header Start Here-->
            <div class="main-header header-sticky">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo">
                                        <a href="index">
                                            <img class="img-full" src="assets/images/logo/Macagrofarms Official Logo.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="index">
                                                    <span class="menu-text"> Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop">
                                                    <span class="menu-text">Shop</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about-us">
                                                    <span class="menu-text"> About</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us">
                                                    <span class="menu-text">Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                        <li class="login-register-wrap d-none d-xl-flex">
                                                <?php
                                                    if (isset($_SESSION['user'])) { ?>
                                                        <span><a href="logout">Logout</a></span>
                                                    <?php } else { ?>
                                                        <span><a href="login">Login</a></span>
                                                        <span><a href="register">Register</a></span>
                                                <?php } ?>
                                            </li>

                                            <li class="minicart-wrap">
                                            <a href="cart" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <?php
                                                        if (isset($_SESSION['user'])) { 
                                                            $totalCart = getCartTotal("cart", "user_id", $_SESSION['user']); ?>
                                                            <span class="cart-item_count"><?= $totalCart; ?></span>
                                                    <?php } ?>
                                                </a>
                                                
                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#mobileMenu">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Header End Here -->
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="index">Home</a></li>
                                    <li class="menu-item-has-children"><a href="shop">Shop</a></li>
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="contact-us">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="my-account">My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="login">Login</a></li>
                                            <li><a href="Register">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <!-- <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="">(1245) 2456 012</a>
                                    </li> -->
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info@macagrofarms">info@macagrofarms</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <!--  -->
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        <!-- Header Area End Here -->