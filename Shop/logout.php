
<?php

require_once '../admin/config/db.php';
blockCRS($_SESSION['user'], 'login');

session_destroy();
redirect('login');