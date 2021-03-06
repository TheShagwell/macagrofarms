<?php

    require_once 'config/db.php';

    if (isset($_POST['submit'])) {
        $response = login($_POST);

        if ($response === true) {
            redirect('index');
        } else {
            echo "<script>alert('Login failed')</script>";
        }

        if (is_array($response)) {
            foreach ($response as $err) {
                echo "<script>alert('$err')</script>";
            }
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Macagrofarms Store | Login Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/img/macagroFavicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/login-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>

<body class="login">

    <form class="form-login" action="" method="POST">
        <div class="row">

            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/Macagrofarm-white-logo.png" class="theme-logo img-fluid">
            </div>

            <div class="col-md-12">

                <label for="inputEmail" class="sr-only">Email address</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" value="<?php if (isset($_COOKIE['admin_email'])) : echo $_COOKIE['admin_email']; endif; ?>" aria-describedby="inputEmail" required>
                </div>

                <label for="inputPassword" class="sr-only">Password</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" name="password" id="inputPassword" class="form-control" value="<?php if (isset($_COOKIE['admin_password'])) : echo $_COOKIE['admin_password']; endif; ?>" placeholder="Password" aria-describedby="inputPassword" required>
                </div>

                <div class="checkbox d-flex justify-content-center mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                </div>

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" name="submit" type="submit">Login</button>

                <div class="forgot-pass text-center">
                    <a href="recovery.html">Forgot Password ?</a>
                </div>

            </div>

        </div>
    </form>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>