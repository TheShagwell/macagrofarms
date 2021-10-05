<?php
    require_once '../admin/config/db.php';
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];
    }

?>
<?php require_once 'inc/header.php'; ?>

<!-- Begin Slider Area One -->
<div class="slider-area">
    <div class="obrien-slider arrow-style" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": true,
        "autoplay" : true,
        "fade" : true,
        "autoplaySpeed" : 7000,
        "pauseOnHover" : false,
        "pauseOnFocus" : false
        }' data-slick-responsive='[
        {"breakpoint":992, "settings": {
        "slidesToShow": 1,
        "arrows": false,
        "dots": true
        }}
        ]'>
        <div class="slide-item slide-3 bg-position slide-bg-1 animation-style-01">
            <div class="slider-content">
                <h4 class="slider-small-title">Organic Product</h4>
                <h2 class="slider-large-title">Organic Palm Kernel Oil</h2>
                <div class="slider-btn">
                    <a class="obrien-button black-btn" href="shop.php">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="slide-item slide-4 bg-position slide-bg-1 animation-style-01">
            <div class="slider-content">
                <h4 class="slider-small-title">Snail Store</h4>
                <h2 class="slider-large-title">Snails</h2>
                <div class="slider-btn">
                    <a class="obrien-button black-btn" href="shop.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area One End Here -->
<!-- Call To Action Area Start Here -->
<div class="call-to-action-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-1.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Free Home Delivery</h3>
                        <p class="desc-content">Provide free home delivery for all product over &#8358;8000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-2.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Quality Products</h3>
                        <p class="desc-content">We ensure our product quality all times</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-3.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Online Support</h3>
                        <p class="desc-content">To satisfy our customer we try to give support online 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action Area End Here -->
<!-- Banner Area Start Here -->
<div class="banner-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-custom">
                <div class="banner-image hover-style">
                    <a class="d-block" href="shop.php">
                        <img class="w-100" src="assets/images/banner/small-banner/Item1.jpg" alt="Banner Image">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-custom">
                <div class="banner-image hover-style">
                    <a class="d-block" href="shop.php">
                        <img class="w-100" src="assets/images/banner/small-banner/Item3.jpg" alt="Banner Image">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-custom">
                <div class="banner-image hover-style mb-0">
                    <a class="d-block" href="shop.php">
                        <img class="w-100" src="assets/images/banner/small-banner/Item2.jpg" alt="Banner Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->
<!-- Product Area Start Here -->
<div class="product-area mt-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Top Deal of the Week</h2>
                    <div class="desc-content">
                        <p>Get the best deal product available for you now and you can buy this product anywhere anytime
                            with just a click</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 product-wrapper col-custom">
                <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>

                    <?php
                                $top_deals = getAllLimit("products", 4);

                                if (!empty($top_deals)) {
                                    foreach ($top_deals as $top_deal) {
                                        extract($top_deal); ?>

                    <div class="single-item">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href="product-details?product=<?= $p_slug; ?>">
                                    <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                    <img src="assets/images/product/2.jpg" alt=""
                                        class="product-image-2 position-absolute w-100">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-title">
                                    <h4 class="title-2"> <a href="product-details?product=<?= $p_slug; ?>"><?= "$p_name *$p_qty"; ?> </a>
                                    </h4>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price ">&#8358;<?= $p_price; ?>.00</span>
                                    <span class="old-price"><del>&#8358;<?= $p_price; ?>.00</del></span>
                                </div>
                            </div>
                            <div class="add-action d-flex position-absolute">
                                <a data-id="<?= $id; ?>" data-user="<?= $user_id; ?>" onClick="addToCart(this)" title="Add To cart">
                                    <i class="ion-bag"></i>
                                    <span class="h6">Add to Cart</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>


                    <?php } } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Newslatter Area Start Here -->
<div class="newsletter-area mt-no-text mb-text-p">
    <div class="container container-default h-100 custom-area">
        <div class="row h-100">
            <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom">
                <div
                    class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="section-content">
                        <h4 class="title-4 text-uppercase">Special <span>Offer</span> for subscription</h4>
                        <h2 class="title-3 text-uppercase">Get instant discount on products</h2>
                        <p class="desc-content">Subscribe our newsletter and all latest news of our <br>latest product,
                            promotion and offers</p>
                    </div>
                    <div class="newsletter-form-wrap ml-auto mr-auto">
                        <form id="mc-form" class="mc-form d-flex position-relative">
                            <input type="email" id="mc-email" class="form-control email-box"
                                placeholder="Enter your email" name="EMAIL">
                            <button id="mc-submit"
                                class="btn primary-btn obrien-button newsletter-btn position-absolute"
                                type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div>
                            <!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div>
                            <!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div>
                            <!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newslatter Area End Here -->
<!-- Feature Area Start Here -->
<!-- <div class="feature-area mb-no-text">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-12 col-custom">
                        <div class="feature-content-wrapper">
                            <h2 class="title">Important to eat fruit</h2>
                            <p class="desc-content">Eating fruit provides health benefits — people who eat more fruits and vegetables as part of an overall healthy diet are likely to have a reduced risk of some chronic diseases. Fruits provide nutrients vital for health and
                                maintenance of your body.</p>
                            <p class="desc-content"> Fruits are sources of many essential nutrients that are underconsumed, including potassium, dietary fiber, vitamin C, and folate (folic acid).</p>
                            <p class="desc-content"> Most fruits are naturally low in fat, sodium, and calories. None have cholesterol.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-12 col-custom">
                        <div class="feature-image position-relative">
                            <img src="assets/images/feature/feature-2.jpg" alt="Obrien Feature">
                            <div class="popup-video position-absolute">
                                <a class="popup-vimeo" href="https://www.youtube.com/watch?v=_9VUPq3SxOc">
                                    <i class="ion-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Feature Area End Here -->
<!-- Banner Fullwidth Area Start Here -->
<div class="banner-fullwidth-area mb-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-md-5 col-lg-6 text-center col-custom">
                <div class="banner-thumb h-100 d-flex justify-content-center align-items-center">
                    <img src="assets/images/banner/thumb/1.png" style="border-radius: 10px;" alt="Banner Thumb">
                </div>
            </div>
            <div class="col-md-7 col-lg-6 text-center justify-content-center col-custom">
                <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100">
                    <h2 class="deal-head text-uppercase">Flash Deals</h2>
                    <h2 class="deal-head text-capitalize">organic palm kernel oil</h2>
                    <h3 class="deal-title text-uppercase">Hurry up and Get 25% Discount</h3>
                    <a href="countdown-product-details.php" class="obrien-button primary-btn">Shop Now</a>
                    <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2021/09/07"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Fullwidth Area End Here -->

<!-- Product Area Start Here -->
<div class="product-area mb-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Featured Products</h2>
                    <div class="desc-content">
                        <p>All featured products are now available for you and you can buy this product from here any
                            time anywhere </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-wrapper col-lg-12 col-custom">
                <div class="product-slider" data-slick-options='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'>

                    
                    <?php
                        $features = getWhereLimit("products", "p_featured", 1, 8);
                        if(!empty($features)){
                            foreach($features as $featured) { ?>
                    <div class="single-item">
                        <div class="single-product position-relative mb-30">
                            <div class="product-image">
                                <a class="d-block" href="product-details.php">
                                    <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                    <img src="assets/images/product/2.jpg" alt=""
                                        class="product-image-2 position-absolute w-100">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-title">
                                    <h4 class="title-2"> <a href="product-details?product=<?= $featured['p_slug']; ?>"><?= $featured['p_name']; ?></a>
                                    </h4>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price ">&#8358;<?= $featured['p_price']; ?></span>
                                    <span class="old-price"><del>&#8358;<?= $featured['p_price']; ?></del></span>
                                </div>
                            </div>
                            <div class="add-action d-flex position-absolute">
                            <a data-id="<?= $id; ?>" data-user="<?= $user_id; ?>" onClick="addToCart(this)" title="Add To cart">
                                    <i class="ion-bag"></i>
                                    <span class="h6">Add to Cart</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                   
                 
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Brand Logo Area Start Here -->
<div class="brand-logo-area mt-text mb-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="obrien-slider" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 481, "settings": {
                        "slidesToShow": 2
                        }}
                        ]'>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-1.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-2.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-3.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-4.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-5.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-3.png" alt="Brand Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End Here -->
<!-- Support Area Start Here -->
<div class="support-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="support-wrapper d-flex">
                    <div class="support-content">
                        <h1 class="title">Need Help ?</h1>
                        <p class="desc-content">Email our cutomer support 24/7 at <a
                                href="mailto:info@macagrofarms.com">info@macagrofarms.com</a> </p>
                    </div>
                    <div class="support-button d-flex align-items-center">
                        <a class="obrien-button primary-btn" href="contact-us.php">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support Area End Here -->
<!-- Footer Area Start Here -->

<?php require_once 'inc/footer.php'; ?>