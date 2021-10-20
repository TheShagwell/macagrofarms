
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
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/Banner-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Macagrofarms</span>
                                    <h2><span>Agro Food</span> <br> Production </h2>
                                    <p>The Farm our pride to feed the nation. Check all our farm products here</p>
                                    <a href="Shop/shop" class="thm-btn">Discover More</a>
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
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/Banner-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline text-dark">Welcome to  Macagrofarms</span>
                                    <h2 class="text-dark"><span>Products</span><br> Made Easy</h2>
                                    <p class="text-dark">You can now purchase any farm products on the go. Visit our store today</p>
                                    <a href="Shop/shop" class="thm-btn">Visit Store</a>
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
                            <img src="assets/images/services/MacPlants.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="services">Agriculture Leader</a></h3>
                            </div>
                            <!-- /.service-one__box-content -->
                        </div>
                        <!-- /.service-one__box -->
                    </div>
                    <!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/Certiied.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="services">Quality Standards</a></h3>
                            </div>
                            <!-- /.service-one__box-content -->
                        </div>
                        <!-- /.service-one__box -->
                    </div>
                    <!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/MPKO.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="services">Organic Product</a></h3>
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
                            <img src="assets/images/resources/macagrofarms.jpg" alt="">
                            <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                                <span>Trusted by</span>
                                <h4>320</h4>
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
                                            <h4><a href="about">Professional
                                                    Farmers</a></h4>
                                        </div>
                                        <!-- /.about-one__box -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="/Shop/shop">Organic & Farm
                                                    Products</a></h4>
                                        </div>
                                        <!-- /.about-one__box -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.about-one__icon-row -->
                         
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
                                <img src="assets/images/services/Snail.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                <img src="assets/images/services/Vector 62.png" alt="fish_farming" height="45px">
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="/Shop/shop">Macagro Food Processing Machines</a></h3>
                                <p>Providing high quality machines for food processing.</p>
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
                                <h3><a href="/Shop/shop">Macagro
                                        Farm Products</a></h3>
                                <p>Dealers of Poultry, Fruits, Organic Products etc. Order from the store now. We deliver nationwide</p>
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
                                <h3><a href="/Shop/shop">
                                        Macagro Farm Fruit Products</a></h3>
                                <p>We currently producing fresh fruits from the farm well packaged to deliver nationwide</p>
                            </div>
                            <!-- /.service-two__card-content -->
                        </div>
                        <!-- /.service-two__card -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/fish_farm.jpg" alt="">
                            </div>
                            <!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                <img src="assets/images/services/fish_farming.png" alt="fish_farming" height="45px">
                                </div>
                                <!-- /.service-two__card-icon -->
                                <h3><a href="/Shop/shop">Fish Farming</a></h3>
                                <p>You can now buy catfish in bulk from the store. We deliver it in good condition. Place Your Order Now;</p>
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
                            <img src="assets/images/resources/macagro_lady.jpg" alt="">
                            <img src="assets/images/resources/macagro_plantain.jpg" alt="">
                        </div>
                        <!-- /.call-to-action__three-image -->
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Visit our Store</h3>
                            <p class="text-white">Get all available products from our store today with SHIKINI Money! </p>
                            <a href="/Shop/index.php" class="thm-btn">Visit Store</a>
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
                            <p>Well, when i heard about macagrofarms from a friend who bought their products, i was amazed on how they delivered the catfish product without any issues and its very cheap. The truth is that i just bought that catfish to prepare Banga Soup</p>
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
                            <p>Wow, i got my palm kernel oil i ordered and i can tell you it has a fantastic taste. I can tell you the product has helped me so far skin and health wise. Reduces BP</p>
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
                                <img src="assets/images/resources/customer2.jpg" alt="">
                            </div>
                            <!-- /.testimonials-one__image -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/customer1.jpg" alt="">
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
                                <h4>Kelvin, E - Warri</h4>
                                <span>Customer</span>
                            </div>
                            <!-- /.testimonials-one__meta -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="test    imonials-one__meta">
                                <h4>Kite, O - Lagos</h4>
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
            
          
            <div class="blog-home__slogan">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="blog-home__slogan-main">
                                <i class="agrikon-icon-farm"></i>
                                <div class="blog-home__slogan-content">
                                    <h3>We Care About Our Agriculture Growth</h3>
                                    <p>Over the years, Macagrofarms are producers and suppliers of 100% organic farm products delivered to our unique new and old customers nationwide. Visit our store today and place your favourite farm products order today!</p>
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


    <?php require_once 'inc/footer.php'; ?>