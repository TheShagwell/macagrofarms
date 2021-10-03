
<?php 
    require_once '../admin/config/db.php';

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

        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Contact Us</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Contact Us Area Start Here -->
        <div class="contact-us-area">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-custom">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Our Location</h4>
                                <p>Delta State, Nigeria</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-custom">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-iphone"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Contact us Anytime</h4>
                                <p>Mobile:
                                    <a href="tel:+234(0)903597986">+234 (0)903597986</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-custom text-align-center">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Support Overall 24/7</h4>
                                <p>info@macagrofarms.com </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-custom">
                        <form method="post" action="" class="contact-form">
                            <div class="comment-box mt-5">
                                <h5 class="text-uppercase">Get in Touch</h5>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area name" type="text" name="fullname" id="con_name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area email" type="email" name="email" id="con_email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area email" type="number" name="phone" id="con_content" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom">
                                        <div class="input-item mb-4">
                                            <textarea cols="30" rows="5" class="border rounded-0 w-100 custom-textarea input-area" name="message" id="con_message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom mt-40">
                                        <button type="submit" id="submit" name="submit" class="btn obrien-button primary-btn rounded-0 mb-0">Send A Message</button>
                                    </div>
                                    <p class="col-12 col-custom form-message mb-0"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Area End Here -->
        <!-- Google Maps -->

        <!-- Google Maps End -->
        <!-- Support Area Start Here -->
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                            <div class="support-content">
                                <h1 class="title">Need Help ?</h1>
                                <p class="desc-content">Email our cutomer support 24/7 at <a href="mailto:info@macagrofarms.com">info@macagrofarms.com</a> </p>
                            </div>
                            <div class="support-button d-flex align-items-center">
                                <a class="obrien-button primary-btn" href="contact-us.html">Contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
       
        <?php require_once 'inc/footer.php'; ?>