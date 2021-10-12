
<?php

function add($post) {
    $errors = [];
    $err_flag = false;

    extract($post);

    if (!empty($email)) {
        if (checkDuplicate("admins", "email", $email)) {
            $err_flag = true;
            $errors = "Admin with '$email' already exists";
        } else {
            $email = sanitize($email);
        }
    } else {
        $err_flag = true;
        $errors = "Email is required";
    }

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $err_flag = true;
        $errors = "Username is required";
    }

    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $err_flag = true;
        $errors = "Password is required";
    }

    if (!empty($cpass)) {
        $cpass = sanitize($cpass);
    } else {
        $err_flag = true;
        $errors = "Confirm password";
    }

    if ($password === $cpass) {
        $password = ecrypt($password);
    } else {
        $err_flag = true;
        $errors = "Passwords do not match";
    }

    if ($err_flag === false) {
        $query = "INSERT INTO admins (email, username, password) VALUES ('$email', '$username', '$password')";
        $result = validateQuery($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    } else {
        return $errors;
    }
}

function login($post) {
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
        $query = "SELECT * FROM admins WHERE email = '$email'";
        $result = executeQuery($query);

        if ($result) {
            $rows = mysqli_fetch_assoc($result);

            if (decrypt($rows['password'], $password)){
                if (isset($remember)) {
                    setcookie("admin_email", $email , time() + (345600 * 30), "/");
                    setcookie("admin_password", $password , time() + (345600 * 30), "/");
                }
                $_SESSION['admin'] = $rows['id'];
                sendMail($email, $rows['username'], $email);
                return true;
            } else {
                return false;
            }
        } else {
            $errors = "Invalid login information";
        }
    } else {
        return $errors;
    }
}

function addCat($post) {
    $err_flag = false;
    $errors = [];

    extract($post);

    if (!empty($cat_name)) {
        if (checkDuplicate("projects", "title", $p_title)) {
            $err_flag = true;
            $errors[] = "Category already exists. Please choose another category";
        } else {
            $cat_name = sanitize($cat_name);
        }
    } else {
        $err_flag = true;
        $errors[] = "Please specify a name";
    }

    if ($err_flag === false) {
        $query = "INSERT INTO categories (cat_name) VALUES ('$cat_name')";
        $execute = validateQuery($query);

        if ($execute) {
            return true;
        } else {
            return "Failed! Please try again.";
        }
    } else {
        return $errors;
    }
}

function editCat($post) {
    $err_flag = false;
    $errors = [];

    extract($post);

    if (!empty($update_name)) {
        $cat_name = sanitize($update_name);
    } else {
        $err_flag = true;
        $errors[] = "Please specify a name";
    }

    $id = $cat_id;

    if ($err_flag === false) {
        $query = "UPDATE categories SET cat_name = '$cat_name', updated_at = now() WHERE id = '$id'";
        $execute = validateQuery($query);

        if ($execute) {
            return true;
        } else {
            return "Failed! Please try again.";
        }
    } else {
        return $errors;
    }
}

function addProduct($post, $loggedAdmin) {
    $uploadDir = "../../assets/img/products";
    $errors = [];
    extract($post);

    if (!empty($p_name)) {
        if (checkDuplicate("products", "p_name", $p_name)) {
            $errors[] = "Product name is already taken";
        } else {
            $productName = sanitize($p_name);
        }
    } else {
        $errors[] = "Please specify a product name";
    }

    if (!empty($p_slug)) {
        $productSlug = sanitize($p_slug);
    } else {
        $errors[] = "Please specify product slug";
    }

    if (!empty($p_desc)) {
        $productDesc = sanitize($p_desc);
    } else {
        $errors[] = "Please specify a product description";
    }

    if (!empty($p_cat)) {
        $productCat = sanitize($p_cat);
    } else {
        $errors[] = "Please specify a product category";
    }

    if (!empty($p_brand)) {
        $productBrand = sanitize($p_brand);
    } else {
        $errors[] = "Please specify a product brand";
    }

    if (!empty($p_size)) {
        $productSize = sanitize($p_size);
    } else {
        $errors[] = "Please specify a product size";
    }

    if (!empty($p_weight)) {
        $productWeight = sanitize($p_weight);
    } else {
        $errors[] = "Please specify a product weight";
    }

    if (!empty($p_status)) {
        $productStatus = sanitize($p_status);
    } else {
        $errors[] = "Please specify a product status";
    }

    if (!empty($p_country)) {
        $productCountry = sanitize($p_country);
    } else {
        $errors[] = "Please specify a product country";
    }

    if (!empty($p_price)) {
        $productPrice = sanitize($p_price);
    } else {
        $errors[] = "Please specify a product price";
    }

    if (isset($_FILES['p_images'])) {
        $productImages = $_FILES['p_images']['name'];
        $productImagesTmp = $_FILES['p_images']['tmp_name'];
        move_uploaded_file($productImagesTmp, $uploadDir.$productImages);
    } else {
        $errors[] = "Please images to the product";
    }
    if (!empty($p_qty)) {
        $productQuantity = sanitize($p_qty);
    } else {
        $errors[] = "Please specify the product quantity";
    }

    if (!empty($p_featured)) {
        $productFeatured = sanitize($p_featured);
    } else {
        $errors[] = "Please specify if the product is a featured product";
    }

    $productSku = rand(35000, 55000);
    $productRating = "****";

    if (!$errors) {
        
        $query = "INSERT INTO products (p_cat, p_name, p_slug, p_sku, p_brand, p_rating, p_desc, p_price, p_image, p_featured, size, weight, p_qty, status, country_manufactured, added_by) VALUES ('$productCat', '$productName', '$productSlug', '$productSku', '$productBrand', '$productRating', '$productDesc', '$productPrice', '$productImages', '$productFeatured', '$productSize', '$productWeight', '$productQuantity', '$productStatus', '$productCountry', '$loggedAdmin')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            die(mysqli_error($execute));
        }
    } else {
        return $errors;
    }
}

function addProject($post) {
    $uploadDir = "../assets/images/projects";
    $errors = [];
    extract($post);

    if (!empty($p_title)) {
        if (checkDuplicate("projects", "title", $p_title)) {
            $errors[] = "Title is already taken";
        } else {
            $p_title = sanitize($p_title);
        }
    } else {
        $errors[] = "Project title is required";
    }

    if (!empty($p_client)) {
        $p_client = sanitize($p_client);
    } else {
        $errors[] = "Project client is required";
    }

    if (!empty($p_cat)) {
        $p_cat = sanitize($p_cat);
    } else {
        $errors[] = "Project category is required";
    }

    if (!empty($p_service)) {
        $p_service = sanitize($p_service);
    } else {
        $errors[] = "Project service is required";
    }

    if (!empty($p_desc)) {
        $p_desc = sanitize($p_desc);
    } else {
        $errors[] = "Project description is required";
    }

    if (!empty($_FILES['p_image'])) {
        $p_img = $_FILES['p_image']['name'];
        $p_img_tmp = $_FILES['p_image']['tmp_name'];
        move_uploaded_file($p_img_tmp, "$uploadDir/$p_img");
    } else {
        $errors[] = "Project image is required";
    }

    if(!$errors) {
        $query = "INSERT INTO projects (client, category, service, title, description, images) VALUES ('$p_client', '$p_cat', '$p_service', '$p_title', '$p_desc', '$p_img')";

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
