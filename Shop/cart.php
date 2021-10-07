
<?php
    require_once '../admin/config/db.php';
    blockCRS($_SESSION['user'], 'login');
    $shipping = 70;

?>

<?php require_once 'inc/header.php'; ?>

        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Shopping Cart</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $carts = getCart("cart", "user_id", $_SESSION['user']);
                                        if (!empty($carts)) {
                                            foreach ($carts as $cart) {
                                                extract($cart);
                                                
                                                $products = getWhereCorrected("products", "id", $id);
                                                
                                                if (!empty($products)) {
                                                    foreach ($products as $product) { 
                                                        $subtotal += $product['p_price'] * $quantity;
                                                        ?>

                                                    <tr>
                                                        <td class="pro-thumbnail">
                                                            <a href="product-details?product=<?= $product['p_slug']; ?>"><img class="img-fluid" src="assets/images/product/small-size/1.jpg" alt="Product" /></a>
                                                        </td>
                                                        <td class="pro-title"><a href="product-details?product=<?= $product['p_slug']; ?>"><?= $product['p_name']; ?></td>
                                                        <td class="pro-price"><span>&#8358;<?= number_format($product['p_price']); ?>.00</span></td>
                                                        <td class="pro-quantity">
                                                            <div class="quantity">
                                                                <?= $quantity; ?> <hr>
                                                                <a class="text-primary" href="product-details?product=<?= $product['p_slug']; ?>">Add more</a>
                                                            </div>
                                                        </td>
                                                        <td class="pro-subtotal"><span>&#8358;<?= number_format($product['p_price'] * $quantity); ?>.00</span></td>
                                                        <td class="pro-remove"><a data-id="<?= $id; ?>" onClick="removeCart(this)"><i class="ion-trash-b"></i></a></td>
                                                    </tr>

                                    <?php } } } } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="btn obrien-button primary-btn">Apply Coupon</button>
                                </form>
                            </div>
                            <div class="cart-update mt-sm-16">
                                <!-- <a href="#" class="btn obrien-button primary-btn">Update Cart</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>&#8358;<?= $subtotal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>&#8358;<?= $shipping; ?></td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">&#8358;<?= $subtotal + $shipping; ?></td>
                                        </tr>
                                    </table>
                                </div>  
                            </div>
                            <a href="checkout" class="btn obrien-button primary-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
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
                                <a class="obrien-button primary-btn" href="contact-us">Contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
        
        <?php require_once 'inc/footer.php'; ?>