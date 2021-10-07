
<?php
    require_once '../admin/config/db.php';
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];
    }

    if (isset($_GET['product'])) {
        $p_slug = $_GET['product'];
        
        $product = getWhere("products", "p_slug", $p_slug);
        if (!empty($product)) {
            extract($product);
        }
    }

    if (isset($_POST['submit'])) {
        $response = addReview($_POST, $id);

        if ($response === true) {
            echo "<script>alert('Review added')</script>";
            redirect("product-details?product=$p_slug");
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
                            <h3 class="title-3">Product Details</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Single Product Main Area Start -->
        <div class="single-product-main-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 col-custom">
                        <div class="product-details-img horizontal-tab">
                            <div class="product-slider popup-gallery product-details_slider" data-slick-options='{
                        "slidesToShow": 1,
                        "arrows": false,
                        "fade": true,
                        "draggable": false,
                        "swipe": false,
                        "asNavFor": ".pd-slider-nav"
                        }'>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/1.jpg">
                                        <img src="assets/images/product/large-size/1.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/2.jpg">
                                        <img src="assets/images/product/large-size/2.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/3.jpg">
                                        <img src="assets/images/product/large-size/3.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/4.jpg">
                                        <img src="assets/images/product/large-size/4.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/5.jpg">
                                        <img src="assets/images/product/large-size/5.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/6.jpg">
                                        <img src="assets/images/product/large-size/6.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="single-image border">
                                    <a href="assets/images/product/large-size/7.jpg">
                                        <img src="assets/images/product/large-size/7.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="pd-slider-nav product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "asNavFor": ".product-details_slider",
                        "focusOnSelect": true,
                        "arrows" : false,
                        "spaceBetween": 30,
                        "vertical" : false
                        }' data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                            {"breakpoint":1200, "settings": {"slidesToShow": 4}},
                            {"breakpoint":992, "settings": {"slidesToShow": 4}},
                            {"breakpoint":575, "settings": {"slidesToShow": 3}}
                        ]'>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-custom">
                        <div class="product-summery position-relative">
                            <div class="product-head mb-3">
                                <h2 class="product-title"><?= $p_name; ?></h2>
                            </div>
                            <div class="price-box mb-2">
                                <span class="regular-price">&#8358;<?= number_format($p_price); ?>.00</span>
                                <span class="old-price"><del>&#8358;<?= number_format($p_price); ?>.00</del></span>
                            </div>
                            <div class="product-rating mb-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="sku mb-3">
                                <span>SKU: <?= $p_sku; ?></span>
                            </div>
                            <p class="desc-content mb-5"><?= substr($p_desc, 0, 30) ?>...</p>
                            <div class="quantity-with_btn mb-4">
                                <div class="quantity">
                                    <div class="cart-plus-minus">
                                        <input id="qty" class="cart-plus-minus-box" value="0" type="text">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                                <div class="add-to_cart">
                                    <a data-id="<?= $id; ?>" data-user="<?= $user_id; ?>" onClick="mainCart(this)" class="btn obrien-button primary-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="buy-button mb-5">
                                <a href="checkout" class="btn obrien-button-3 black-button">Buy it now</a>
                            </div>
                            <div class="social-share mb-4">
                                <span>Share :</span>
                                <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                                <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                            </div>
                            <div class="payment">
                                <a href="#"><img class="border" src="assets/images/payment/img-payment.png" alt="Payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-no-text">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Shipping Policy</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-text" id="myTabContent">
                            <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                                <div class="desc-content">
                                    <p class="mb-3"><?= $p_desc; ?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Start Single Content -->
                                <div class="product_tab_content  border p-3">
                                    <div class="review_address_inner">
                                        <!-- Start Single Review -->
                                        
                                        <?php
                                            $reviews = getWhereLimit("reviews", "product_id", $id, 10000);

                                            if (!empty($reviews)) {
                                                foreach ($reviews as $review) { ?>
                                                <div class="pro_review mb-5">
                                                    <div class="review_thumb">
                                                        <img alt="review images" src="assets/images/review/1.jpg">
                                                    </div>
                                                    <div class="review_details">
                                                        <div class="review_info mb-2">
                                                            <div class="product-rating mb-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5><?= $review['name']; ?> - <span> <?= date("d F, Y", strtotime($review['created_at']));  ?></span></h5>
                                                        </div>
                                                        <p><?= $review['comment']; ?></p>
                                                    </div>
                                                </div>
                                        <?php } } ?>
                                        <!-- End Single Review -->
                                    </div>
                                    <!-- Start RAting Area -->
                                    <div class="rating_wrap">
                                        <h5 class="rating-title-1 mb-2">Add a review </h5>
                                        <p class="mb-2">Your email address will not be published. Required fields are marked *</p>
                                        <!-- <h6 class="rating-title-2 mb-2">Your Rating</h6> -->
                                        <div class="rating_list mb-4">
                                            <div class="review_info">
                                                <div class="product-rating mb-3">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End RAting Area -->
                                    <div class="comments-area comments-reply-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-custom">
                                                <form action="" method="POST" class="comment-form-area">
                                                    <div class="row comment-input">
                                                        <div class="col-md-6 col-custom comment-form-author mb-3">
                                                            <label>Name <span class="required">*</span></label>
                                                            <input type="text" required="required" name="name">
                                                        </div>
                                                        <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="text" required="required" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="comment-form-comment mb-3">
                                                        <label>Comment</label>
                                                        <textarea name="comment" class="comment-notes" required="required"></textarea>
                                                    </div>
                                                    <div class="comment-form-submit">
                                                        <input type="submit" value="Submit" name="submit" class="comment-submit btn obrien-button primary-btn">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                            </div>
                            <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="shipping-policy">
                                    <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                                    <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                                    <ul class="policy-list mb-2">
                                        <li>1-2 business days (Typically by end of day)</li>
                                        <li><a href="#">30 days money back guaranty</a></li>
                                        <li>24/7 live support</li>
                                        <li>odio dignissim qui blandit praesent</li>
                                        <li>luptatum zzril delenit augue duis dolore</li>
                                        <li>te feugait nulla facilisi.</li>
                                    </ul>
                                    <p class="desc-content mb-2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                                    <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica,
                                        quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                    <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Main Area End -->
       
        <!-- Product Area Start Here -->
        <div class="product-area mb-no-text">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 m-auto text-center col-custom">
                        <div class="section-content">
                            <h2 class="title-1 text-uppercase">You May Also Like</h2>
                            <div class="desc-content">
                                <p>Most of the customers choose our products. You may also like our product.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 product-wrapper col-custom">
                        <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>

                        <?php
                            $otherProducts = getAllLimit("products", 4);

                            if (!empty($otherProducts)) {
                                foreach ($otherProducts as $otherproduct) { ?>
                            <div class="single-item">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details?product=<?= $otherproduct['p_slug']; ?>">
                                            <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details?product=<?= $otherproduct['p_slug']; ?>"><?= $otherproduct['p_name']; ?> ×<?= $otherproduct['p_qty']; ?></a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">&#8358;<?= $otherproduct['p_price']; ?>.00</span>
                                            <span class="old-price"><del>&#8358;<?= $otherproduct['p_price']; ?>.00</del></span>
                                        </div>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a data-id="<?= $otherproduct['id']; ?>" data-user="<?= $user_id; ?>" onClick="detailCart(this)" title="Add To cart">
                                            <i class="ion-bag"></i>
                                            <span class="h6">Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
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
      
        <?php require_once 'inc/footer.php'; ?>