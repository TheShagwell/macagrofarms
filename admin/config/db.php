
<?php
session_start();

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'macagrofarms');

$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

require_once 'helpers.php';
require_once 'functions/admin.php';
require_once 'functions/users.php';

// if ($link) {
//     echo 'Connected to DATABASE';
// } else {
//     echo 'Failed to connect to DATABASE';
// }



