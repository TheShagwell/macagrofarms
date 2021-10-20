
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

        <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/all-page-header-bg.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Contact Us</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Contact</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <div class="block-title__image"></div>
                                <!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave A Message</h3>
                            </div>
                            <!-- /.block-title -->
                            <div class="contact-one__summery">
                                <p>You can now send messages to us and we will reply in a few minutes. Our support line is up for 24/7</p>
                            </div>
                            <!-- /.contact-one__summery -->
                            <div class="contact-one__social">
                                <a href="https://www.facebook.com/macagrofarms"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.linkedin.com/macagrofarms"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/macagrofarms"><i class="fab fa-instagram"></i></a>
                            </div>
                            <!-- /.contact-one__social -->
                        </div>
                        <!-- /.contact-one__content -->
                    </div>
                    <!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                        <form action="" method="POST" class="contact-one__form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="fullname" placeholder="Full Name">
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                                <!-- /.col-lg-12 -->
                               
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>
                                <!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="thm-btn">Send a Message</button>
                                    <!-- /.thm-btn -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-one -->

        <section class="contact-infos" style="padding: 50px;">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>About Company</h3>
                                <p>Macagrofarms is #1 Agro-tech leading in 100% Organic farm production nationwide.</p>
                            </div>
                            <!-- /.contact-infos__single -->
                        </div>
                        <!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Visit Company</h3>
                                <p>Egbeleku Town, Off Adeje Town, Near Warri, Delta State.</p>
                            </div>
                            <!-- /.contact-infos__single -->
                        </div>
                        <!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Call or Email</h3>
                                <p>
                                    <a href="mailto:info@macagrofarms.com">info@macagrofarms.com</a><br>
                                    <a href="tel:+234(0)9032597986">+234(0)9032597986</a>
                                </p>
                            </div>
                            <!-- /.contact-infos__single -->
                        </div>
                        <!-- /.col-sm-12 col-md-12 col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.inner-container -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-infos -->

       
        <!-- /.google-map -->
   <?php require_once 'inc/footer.php'; ?>