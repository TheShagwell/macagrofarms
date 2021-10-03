
<?php

require_once '../../../admin/config/db.php';

if (isset($_SESSION['user'])) {
    if (isset($_GET['addToCart']) && isset($_GET['userId'])) {
        $product_id = $_GET['addToCart'];
        $userId = $_GET['userId'];
        
        if (checkCartDuplicate("cart", "product_id", $product_id, "user_id", $userId)) {
            echo "Already added to cart";
        } else {
            $query = "INSERT INTO cart (product_id, user_id) VALUES ($product_id, $userId)";
            $execute = validateQuery($query);
            if ($execute) {
                echo "Added to cart";
            } else {
                echo "Error adding to cart";
            }
        }
    }

    // Adding to cart from the product details page
    if (isset($_GET['detailCart']) && isset($_GET['userId'])) {
        $product_id = $_GET['detailCart'];
        $userId = $_GET['userId'];
        
        if (checkCartDuplicate("cart", "product_id", $product_id, "user_id", $userId)) {
            echo "Already added to cart";
        } else {
            $query = "INSERT INTO cart (product_id, user_id) VALUES ($product_id, $userId)";
            $execute = validateQuery($query);
            if ($execute) {
                echo "Added to cart";
            } else {
                echo "Error adding to cart";
            }
        }
    }

    // Adding main cart function with quantity
    // Adding to cart from the product details page
    if (isset($_GET['mainCart']) && isset($_GET['userId']) && isset($_GET['qty'])) {
        $product_id = $_GET['mainCart'];
        $userId = $_GET['userId'];
        $qty = $_GET['qty'];
        
        if (checkCartDuplicate("cart", "product_id", $product_id, "user_id", $userId)) {
            $query = "UPDATE cart SET quantity = '$qty' WHERE product_id = '$product_id' AND user_id = '$userId'";
            $execute = validateQuery($query);
            
            if ($execute) {
                echo "Added to cart";
            } else {
                echo "Oops! Something went wrong. Please try again";
            }
        } else {    
            $query = "INSERT INTO cart (product_id, user_id, quantity) VALUES ($product_id, $userId, $qty)";
            $execute = validateQuery($query);
            if ($execute) {
                echo "Added to cart";
            } else {
                echo "Error adding to cart";
            }
        }
    }

    // Removing cart
    if (isset($_GET['removeCart'])) {
        $cartId = $_GET['removeCart'];

        $query = "DELETE FROM cart WHERE id = $cartId";
        $execute = validateQuery($query);

        if ($execute) {
            echo "Removed from cart";
        } else {
            echo "Oops! Something went wrong. Please try again";
        }
    }
} else {
    echo "Please Login first" . "<br/>" . "<a class='text-primary' href='login'>Click to login</a>";
}
