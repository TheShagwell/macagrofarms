
<?php

function sanitize($input) {
    return htmlentities(htmlspecialchars(strip_tags(trim($input))));
}

function redirect($url) {
    header("Location: " . $url);
}

function blockCRS($user, $url) {
    if (!isset($user)) {
        redirect($url);
    }
}

function executeQuery($query) {
    global $link;

    $fQuery = $query;
    $fExecute = mysqli_query($link, $fQuery);

    if (mysqli_num_rows($fExecute) > 0) {
        return $fExecute;
    } else {
        return false;
    }
}

function validateQuery($query) {
    global $link;

    $fExecute = mysqli_query($link, $query);
    if ($fExecute) {
        return true;
    } else {
        return false;
    }
}

function checkDuplicate($table, $data, $incoming_data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $data = '$incoming_data'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return true;
    } else {
        return false;
    }
}

function checkCartDuplicate($table, $data, $incoming_data, $data2, $incoming_data2) {
    global $link;

    $query = "SELECT * FROM $table WHERE $data = '$incoming_data' AND $data2 = '$incoming_data2'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return true;
    } else {
        return false;
    }
}

function encrypt($data) {
    $data = sha1(md5($data));
    return $data . "mgf";
}

function decrypt($oldData, $newData) {
    $newData = sha1(md5($newData));
    $newData = $newData . "mgf";

    if ($newData != $oldData) {
        return false;
    } else {
        return true;
    }
}

function getAll($table) {
    global $link;

    $query = "SELECT * FROM $table ORDER BY id DESC";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function getAllDesc($table) {
    global $link;

    $query = "SELECT * FROM $table ORDER BY id DESC";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function getAllLimit($table, $limit) {
    global $link;

    $query = "SELECT * FROM $table ORDER BY id DESC LIMIT $limit";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

/**
 * Deprecated
 */
function getWhere($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        $rows = mysqli_fetch_assoc($execute);
        return $rows;
    } else {
        return false;
    }
}

function getWhereLimit($table, $col, $data, $limit) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data' ORDER BY id DESC LIMIT $limit";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function getTotalNum($table) {
    global $link;

    $query = "SELECT * FROM $table";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return mysqli_num_rows($execute);
    } else {
        return false;
    }
}

function getTotalNumWhere($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return mysqli_num_rows($execute);
    } else {
        return false;
    }
}

function getWhereCorrected($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function getCart($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data' AND status = 1";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function getCartTotal($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data' AND status = 1";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return mysqli_num_rows($execute);
    } else {
        return false;
    }
}

function getPlaced($table, $col, $data) {
    global $link;

    $query = "SELECT * FROM $table WHERE $col = '$data' AND status = 0";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return $execute;
    } else {
        return false;
    }
}

function sendMail($to, $username, $email) {
    $to = $to;
    $subject = "Logged In";

    $message = "
    <html>
    <body>
    <h3>Hello $username,</h3>
    <p>You just logged in to your account as $email</p>
    <p>If you did'nt initiate this login, please click on the link below!</p>
    <button style='padding: 10px'>Click to log user out</button>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <hello@macagrofarms.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
}