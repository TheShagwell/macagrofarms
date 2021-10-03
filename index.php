
<?php
    require_once 'admin/config/db.php';

    if (isset($_POST['submit'])) {
        $response = Contact($_POST);

        if ($response === true) {
            echo "<script>alert('Message sent! We will reply within 24hrs')</script>";
        } else if (is_array($response)) {
            foreach ($response as $err) {
                echo "<script>alert('$err')</script>";
            }
        } else {
            echo "<script>alert('$response')</script>";
        }
    }
?>
<?php require_once 'inc/header.php'; ?>

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Macagrofarms</span>
                                    <h2><span>Agro Food</span> <br> Production </h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration in some form.</p>
                                    <a href="#" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div>
                                <!-- /.col-lg-7 text-right -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to  Macagrofarms</span>
                                    <h2><span>Farm Products</span><br> Made Easy</h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration in some form.</p>
                                    <a href="#" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div>
                                <!-- /.col-lg-7 text-right -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div>
                <!-- /.main-slider__nav -->

            </div>
            <!-- /.swiper-container thm-swiper__slider -->
        </section>
        <!-- /.main-slider -->

        <section class="service-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div>
                            <!-- /.service-one__box-content -->
                        </div>
                        <!-- /.service-one__box -->
                    </div>
                    <!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div>
                            <!-- /.service-one__box-content -->
                        </div>
                        <!-- /.service-one__box -->
                    </div>
                    <!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Organic Services</a></h3>
                            </div>
                            <!-- /.service-one__box-content -->
                        </div>
                        <!-- /.service-one__box -->
                    </div>
                    <!-- /.col-md-12 col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.service-one -->

        <section class="about-one">
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/resources/about-1-1.jpg" alt="">
                            <img src="assets/images/resources/about-1-2.jpg" alt="">
                            <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                                <span>Trusted by</span>
                                <h4>900</h4>
                            </div>
                            <!-- /.about-one__count -->
                        </div>
                        <!-- /.about-one__images -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <div class="block-title__image"></div>
                                <!-- /.block-title__image -->
                                <p>Welcome to Macagrofarms</p>
                                <h3>Better Agriculture for Better Future</h3>
                            </div>
                            <!-- /.block-title -->
                            <div class="about-one__tagline">
                                <p>We have 14+ years of agriculture farming experience & has produce more than 15,000 Organic Products Globally</p>
                            </div>
                            <!-- /.about-one__tagline -->
                            <div class="about-one__summery">
                                <p>Macagrofarms primary core mission is to produce quality food supply and improve livelihood of people with access to purchasing farm products from our store and to be delivered to your doorstep anywhere anytime bridging
                                    the gap of hunger strike and food insecurity.</p>
                            </div>
                            <!-- /.about-one__summery -->
                            <div class="about-one__icon-row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-farmer"></i>
                                            <h4><a href="about.html">Professional
                                                    Farmers</a></h4>
                                        </div>
                                        <!-- /.about-one__box -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="services.html">Organic & Farm
                                                    Products</a></h4>
                                        </div>
                                        <!-- /.about-one__box -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.about-one__icon-row -->
                            <a href="about.html" class="thm-btn">Learn More</a>
                            <!-- /.thm-btn -->
                        </div>
                        <!-- /.about-one__content -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.about-one -->

        <section class="service-two">
            <div class="service-two__bottom-curv"></div>
            <!-- /.service-two__bottom-curv -->
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div>
                    <!-- /.block-title__image -->
                    <p>Our Sales Service list</p>
                    <h3>What We’re Offering </h3>
                </div>
                <!-- /.block-title -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-3.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-tractor"></i>
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Agriculture Products</a></h3>
                                <p>We deal/sale in all kinds off agricultural products.</p>
                            </div>
                            <!-- /.service-two__card-content -->
                        </div>
                        <!-- /.service-two__card -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-2.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-organic-food"></i>
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Organic
                                        Products</a></h3>
                                <p>We sell original organic poducts .</p>
                            </div>
                            <!-- /.service-two__card-content -->
                        </div>
                        <!-- /.service-two__card -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-4.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-vegetable"></i>
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Fresh
                                        Vegetables</a></h3>
                                <p>Vegetables are worth eating, join others in purchasing it by visiting our shop</p>
                            </div>
                            <!-- /.service-two__card-content -->
                        </div>
                        <!-- /.service-two__card -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-1-3.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-dairy"></i>
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Pure Honey Product</a></h3>
                                <p>Honey has been a one most medicated purchase product </p>
                            </div>
                            <!-- /.service-two__card-content -->
                        </div>
                        <!-- /.service-two__card -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.service-two -->

        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div>
                    <!-- /.block-title__image -->
                    <p>Closed projects</p>
                    <h3>Latest Projects List</h3>
                </div>
                <!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <div class="swiper-wrapper">

                        <?php
                            $projects = getAllDesc("projects");

                            if (!empty($projects)) {
                                foreach ($projects as $project) {
                                    extract($project); 
                                    $project_slug = str_replace(" ", "-", $title); 
                                    ?>

                                    <div class="swiper-slide">
                                        <div class="projects-one__single">
                                            <img src="assets/images/projects/project-2-1.jpg" alt="">
                                            <div class="projects-one__content">
                                                <h3><?= $title; ?></h3>
                                                <a href="project-details?project=<?= $project_slug; ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                                                <!-- /.projects-one__button -->
                                            </div>
                                            <!-- /.projects-one__content -->
                                        </div>
                                        <!-- /.projects-one__single -->
                                    </div>
                        
                        <?php } } ?>
                       
                    
                    </div>
                    <!-- /.swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.projects-one -->

        <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="call-to-action__three-image">
                            <img src="assets/images/resources/cta-3-1.jpg" alt="">
                            <img src="assets/images/resources/cta-3-2.jpg" alt="">
                        </div>
                        <!-- /.call-to-action__three-image -->
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Visit our Store</h3>
                            <p class="text-white">Get all available products from our store today with SHIKINI Money! </p>
                            <a href="../Shop/index.html" class="thm-btn">Visit Store</a>
                            <!-- /.thm-btn -->
                        </div>
                        <!-- /.call-to-action__three-content -->
                    </div>
                    <!-- /.col-lg-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.call-to-action__three -->

        <section class="testimonials-one">
            <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
            <div class="container">
                <h2 class="testimonials-one__title">Testimonials</h2>
                <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- /.testimonials-one__icons -->
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.</p>
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- /.testimonials-one__icons -->
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.</p>
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- /.testimonials-one__icons -->
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.</p>
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /#testimonials-one__carousel -->

                <div id="testimonials-one__thumb" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-1.jpg" alt="">
                            </div>
                            <!-- /.testimonials-one__image -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-2.jpg" alt="">
                            </div>
                            <!-- /.testimonials-one__image -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-3.jpg" alt="">
                            </div>
                            <!-- /.testimonials-one__image -->
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /#testimonials-one__thumb.swiper-container -->

                <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Oghenekaro Damian</h4>
                                <span>Customer</span>
                            </div>
                            <!-- /.testimonials-one__meta -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Ejike C.J</h4>
                                <span>Customer</span>
                            </div>
                            <!-- /.testimonials-one__meta -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>David Chukwuemeka</h4>
                                <span>Customer</span>
                            </div>
                            <!-- /.testimonials-one__meta -->
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /#testimonials-one__meta.swiper-container -->
                <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.testimonials-one -->

        <section class="gray-boxed-wrapper home-one__boxed">
            <img src="assets/images/icons/home-1-blog-bg.png" alt="" class="home-one__boxed-bg">
            <section class="blog-home-two blog-home-one">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-lg-6">
                            <div class="block-title">
                                <div class="block-title__image"></div>
                                <!-- /.block-title__image -->
                                <p>From the blog post</p>
                                <h3>Latest News & Articles Directly from Blog</h3>
                            </div>
                            <!-- /.block-title -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <p class="block-text">These are latest news from our blog where you get to see whats happening in the farm. It's from these end also you get to get updates from our store. Don't forget to visit our store today</p>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-grid-1.jpg" alt="Best Way to Do Eco and Agriculture">
                                    <a href="blog-details.html"></a>
                                </div>
                                <!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">08 August</div>
                                    <!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                        <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                        <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </div>
                                    <!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Best Way to cultivate cassava</a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a>
                                    <!-- /.thm-btn -->
                                </div>
                                <!-- /.blog-card__content -->
                            </div>
                            <!-- /.blog-card -->
                        </div>
                        <!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-grid-2.jpg" alt="Leverage agile frameworks to provide">
                                    <a href="blog-details.html"></a>
                                </div>
                                <!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">18 August</div>
                                    <!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                        <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                        <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </div>
                                    <!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Organic Palm Kernel Oil and its important</a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a>
                                    <!-- /.thm-btn -->
                                </div>
                                <!-- /.blog-card__content -->
                            </div>
                            <!-- /.blog-card -->
                        </div>
                        <!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-grid-3.jpg" alt="Organically grow the holistic world view">
                                    <a href="blog-details.html"></a>
                                </div>
                                <!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">01 Sept</div>
                                    <!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                        <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                        <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </div>
                                    <!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Snails Farming and the way about </a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a>
                                    <!-- /.thm-btn -->
                                </div>
                                <!-- /.blog-card__content -->
                            </div>
                            <!-- /.blog-card -->
                        </div>
                        <!-- /.col-md-12 col-lg-4 -->
                    </div>
                    <!-- /.row -->
                    <hr />
                </div>
                <!-- /.container -->
            </section>
            <!-- /.blog-home-two -->
            <div class="blog-home__slogan">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="blog-home__slogan-main">
                                <i class="agrikon-icon-farm"></i>
                                <div class="blog-home__slogan-content">
                                    <h3>We Care About Our Agriculture Growth</h3>
                                    <p>Over the years, Macagrofarms is the #1 producers in all farm products ranging from organic products and others and we are highly esteemed by customers and companies, brands for serving quality products.</p>
                                </div>
                                <!-- /.blog-home__slogan-content -->
                            </div>
                            <!-- /.blog-home__slogan-main -->
                        </div>
                        <!-- /.col-lg-9 -->
                        <div class="col-lg-3">
                            <div class="blog-home__slogan-image">
                                <img src="assets/images/resources/blog-cta-1.png" alt="">
                            </div>
                            <!-- /.blog-home__slogan-image -->
                        </div>
                        <!-- /.col-lg-3 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.blog-home__slogan -->
        </section>
        <!-- /.gray-boxed-wrapper -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div>
                            <!-- /.contact-two__image-bubble-1 -->
                            <div class="contact-two__image-bubble-2"></div>
                            <!-- /.contact-two__image-bubble-2 -->
                            <div class="contact-two__image-bubble-3"></div>
                            <!-- /.contact-two__image-bubble-3 -->
                            <img src="assets/images/resources/contact-1-1.jpg" class="img-fluid" alt="">
                        </div>
                        <!-- /.contact-two__image -->
                    </div>
                    <!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <div class="block-title__image"></div>
                                <!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave Us A Message
                                </h3>
                            </div>
                            <!-- /.block-title -->
                            <div class="contact-two__summery">
                                <p>You can now send messages to us and we will reply in a few minutes. Our support line is up for 24/7</p>
                            </div>
                            <!-- /.contact-two__summery -->
                        </div>
                        <!-- /.contact-two__content -->
                    </div>
                    <!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <form action="" method="POST" class="contact-one__form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="fullname" placeholder="Full Name">
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>
                                <!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="thm-btn">Send Message</button>
                                    <!-- /.thm-btn -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                    <!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-two -->



        <div class="client-carousel client-carousel__has-border-top">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper d-flex justify-content-between">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /.thm-swiper__slider -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.client-carousel -->
      
    <?php require_once 'inc/footer.php'; ?>