
<?php

function register($post) {
    $errors = [];
    extract($post);

    $uploadDir = "uploads/";

    if (!empty($firstname)) {
        $firstname = sanitize($firstname);
    } else {
        $errors[] = "Please provide your firstname";
    }

    if (!empty($lastname)) {
        $lastname = sanitize($lastname);
    } else {
        $errors[] = "Please provide your lastname";
    }

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $errors[] = "Please provide your username";
    }

    if (!empty($email)) {
        if (checkDuplicate("users", "email", $email)) {
            $errors[] = "Email already exists";
        } else {
            $email = sanitize($email);
        }
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Please provide your phone number";
    }

    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors[] = "Please provide your password";
    }

    if (!empty($cpass)) {
        $cpass = sanitize($cpass);
    } else {
        $errors[] = "Please confirm password";
    }

    if (!isset($agree)) {
        $errors[] = "Accept to our terms and conditions";
    }

    if ($password === $cpass) {
        $main_password = encrypt($password);
    } else {
        $errors[] = "Passwords do not match";
    }

    if (!$errors) {
        $query = "INSERT INTO users (firstname, lastname, username, email, phone, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$main_password')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong, try again";
        }
    } else {
        return $errors;
    }
}


function loginUser($post) {
    $errors = [];
    $err_flag = false;

    extract($post);

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $err_flag = true;
        $errors = "Email is required";
    }

    if (!empty($password)) {
        $password = sanitize($password);
    }

    if ($err_flag === false) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = executeQuery($query);

        if ($result) {
            $rows = mysqli_fetch_assoc($result);

            if (decrypt($rows['password'], $password)){
                if (isset($remember)) {
                    setcookie("user_email", $email , time() + (345600 * 30), "/");
                    setcookie("user_password", $password , time() + (345600 * 30), "/");
                }
                $_SESSION['user'] = $rows['id'];
                sendMail($email, $rows['username'], $email);
                return true;
            } else {
                return "Invalid login information";
            }
        } else {
            return "Invalid login information";
        }
    } else {
        return $errors;
    }
}

function Contact($post) {
    $errors = [];
    extract($post);

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Please provide your full name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Please provide your phone number";
    }

    if (!empty($message)) {
        $message = sanitize($message);
    } else {
        $errors[] = "Please provide your message";
    }

    if (!$errors) {
        $query = "INSERT INTO contacts (fullname, email, phone, message) VALUES ('$fullname', '$email', '$phone', '$message')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}

function addReview($post, $productId) {
    $errors = [];
    extract($post);

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $errors[] = "Please provide your name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($comment)) {
        $comment = sanitize($comment);
    } else {
        $errors[] = "Please provide your comment";
    }

    if (!$errors) {
        $query = "INSERT INTO reviews (product_id, name, email, comment) VALUES ('$productId', '$name', '$email', '$comment')";

        $execute = validateQuery($query);

        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}

function searchProduct($post) {
    $errors = [];
    extract($post);

    if (!empty($q)) {
        $q = sanitize($q);
    } else {
        $errors[] = "Please specify product";
    }

    if (!$errors) {
        $query = "SELECT * FROM products WHERE name LIKE '$q'";
        $execute = executeQuery($query);

        if ($execute) {
            return $execute;
        } else {
            return "Oops! Something went wrong, try again";
        }
    } else {
        return $errors;
    }
}

function addBillingAddress($post, $userId) {
    $errors = [];
    extract($post);

    if (!empty($country)) {
        $country = sanitize($country);
    } else {
        $errors[] = "Please specify your country";
    }

    if ($company) {
        $company = sanitize($company);
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Please specify your address";
    }

    if (!empty($town)) {
        $town = sanitize($town);
    } else {
        $errors[] = "Please specify your town";
    }

    if (!empty($state)) {
        $state = sanitize($state);
    } else {
        $errors[] = "Please specify your state";
    }

    if (!empty($postcode)) {
        $postcode = sanitize($postcode);
    } else {
        $errors[] = "Please specify your postcode";
    }

    if (!empty($notes)) {
        $notes = sanitize($notes);
    } else {
        $errors[] = "Please specify your notes";
    }

    if (checkDuplicate("billings", "user_id", $userId)) {
        $errors[] = "We have your details already! You can change your details in your dashboard";
    }

    if (!$errors) {
        $query = "INSERT INTO billings (user_id, country, company, address, town, state, postcode, notes) VALUES ('$userId', '$country', '$company', '$address', '$town', '$state', '$postcode', '$notes')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}