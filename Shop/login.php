
<?php
    require_once '../admin/config/db.php';

    if (isset($_POST['submit'])) {
        $response = loginUser($_POST);

        if ($response === true) {
            redirect('my-account');
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
                            <h3 class="title-3">Login</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Area Start Here -->
        <div class="login-register-area mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                        <div class="login-register-wrapper">
                            <div class="section-content text-center mb-5">
                                <h2 class="title-4 mb-2">Login</h2>
                                <p class="desc-content">Please login using account detail below.</p>
                            </div>
                            <form action="" method="post">
                                <div class="single-input-item mb-3">
                                    <input type="email" value="<?php if (isset($_COOKIE['user_email'])) : echo $_COOKIE['user_email']; endif; ?>" name="email" placeholder="Email">
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="password" value="<?php if (isset($_COOKIE['user_password'])) : echo $_COOKIE['user_password']; endif; ?>" name="password" placeholder="Enter your Password">
                                </div>
                                <div class="single-input-item mb-3">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="forget-pwd mb-3">Forget Password?</a> -->
                                    </div>
                                </div>
                                <div class="single-input-item mb-3">
                                    <button type="submit" name="submit" class="btn obrien-button-2 primary-color">Login</button>
                                </div>
                                <div class="single-input-item text-left">
                                    <a href="register">Create Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End Here -->
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