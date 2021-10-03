
<?php

    require_once 'config/db.php';

    //blockCRS($_SESSION['admin'], '../index');

    if (isset($_POST['register'])) {
        $response = add($_POST);

        if ($response === true) {
            echo "Registration was successful";
        } else {
            echo "Registration failed";
        }

        if (is_array($response)) {
            foreach ($respone as $err) {
                echo "$err";
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
    <title>Macagrofarms Store | Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/img/macagroFavicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/register-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>

<body class="register">

    <form class="form-register" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/Macagrofarm-white-logo.png" class="theme-logo img-fluid">
            </div>

            <div class="col-md-12">

                <label for="username" class="sr-only">Username</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-username"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-describedby="username" required>
                </div>

                <label for="inputEmail" class="sr-only">Email address</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-email-fill-2"></i> </span>
                    </div>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" aria-describedby="inputEmail" required>
                </div>

                <label for="inputPassword" class="sr-only">Password</label>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" aria-describedby="inputPassword" required>
                </div>

                <label for="inputPassword" class="sr-only">Confirm password</label>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Confirm password" name="cpass" aria-describedby="inputPassword" required>
                </div>

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" name="register" type="submit">Register</button>

                <div class="forgot-pass text-center">
                    <a href="recovery">Forgot Password ?</a>
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