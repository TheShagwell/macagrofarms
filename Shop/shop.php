
<?php 
    require_once '../admin/config/db.php';
    $user_id = $_SESSION['user'];

    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $getCat = getWhere("categories", "cat_name", $cat);
        $cat_id =  $getCat['id'];

        $products = getWhereLimit("products", "p_cat", $cat_id, 12);
    } else {
        $products = getAllLimit("products", 12);
    }

    // For search
    if (isset($_POST['search'])) {
        $response = searchProduct($_POST);

        if ($response) {
            echo $response;
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
                            <h3 class="title-3">Shop</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Main Area Start Here -->
        <div class="shop-main-area">
            <div class="container container-default custom-area">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-12 col-custom widget-mt">
                        <!-- Shop Wrapper Start -->
                        <div class="row shop_wrapper grid_3">

                            <?php 
                                if (!empty($products)) {
                                    foreach ($products as $product) { ?>

                                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                                        <div class="single-product position-relative">
                                            <div class="product-image">
                                                <a class="d-block" href="product-details?product=<?= $product['p_slug']; ?>">
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
                                                    <h4 class="title-2"> <a href="product-details?product=<?= $product['p_slug']; ?>"><?= $product['p_name'] . " &times;" . $product['p_qty']; ?></a></h4>
                                                </div>
                                                <div class="price-box">
                                                    <span class="regular-price ">&#8358;<?= $product['p_price']; ?>.00</span>
                                                    <span class="old-price"><del>&#8358;<?= $product['p_price']; ?>.00</del></span>
                                                </div>
                                            </div>
                                            <div class="add-action d-flex position-absolute">
                                                <a data-id="<?= $product['id']; ?>" data-user="<?= $user_id; ?>" onClick="addToCart(this)" title="Add To cart">
                                                    <i class="ion-bag"></i>
                                                    <span class="h6">Add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            <?php } } else { ?>
                                <div class="container">
                                <div class="alert alert-warning">No product on this category</div>
                                </div>
                            <?php } ?>

                        </div>
                        <!-- Shop Wrapper End -->
                        <!-- Bottom Toolbar Start -->
                        <div class="row">
                            <div class="col-sm-12 col-custom">
                                <div class="toolbar-bottom mt-30">
                                    <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                        <ul class="pagination">
                                            <li class="disabled prev">
                                                <i class="ion-ios-arrow-thin-left"></i>
                                            </li>
                                            <li class="active"><a>1</a></li>
                                            <li>
                                                <a href="#">2</a>
                                            </li>
                                            <li class="next">
                                                <a href="#" title="Next >>"><i class="ion-ios-arrow-thin-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <p class="desc-content text-center text-sm-right">Showing 1 - 12 of 34 result</p>
                                </div>
                            </div>
                        </div>
                        <!-- Bottom Toolbar End -->
                    </div>
                    <div class="col-lg-3 col-12 col-custom">
                        <!-- Sidebar Widget Start -->
                        <aside class="sidebar_widget widget-mt">
                            <div class="widget_inner">
                                <div class="widget-list widget-mb-1">
                                    <h3 class="widget-title">Search</h3>
                                    <div class="search-box">
                                        
                                    <form action="" method="POST">
                                    <div class="input-group">
                                            <input type="text" name="q" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                            <div class="input-group-append">
                                                <button name="search" class="btn btn-outline-secondary" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                              
                                <div class="widget-list widget-mb-1">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="sidebar-body">
                                        <ul class="sidebar-list">
                                        <li><a href="shop">All</a></li>
                                        <?php 

                                        $categories = getAll("categories");
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) { ?>
                                                <li><a href="shop?cat=<?= $category['cat_name']; ?>"><?= $category['cat_name']; ?></a></li>

                                        <?php } } ?>
                                        </ul>
                                    </div>
                                </div>

                                

                                <div class="widget-list widget-mb-4">
                                    <h3 class="widget-title">Recent Products</h3>
                                    <div class="sidebar-body">
                                    <?php 

                                        $recentProducts = getAllLimit("products", 13);
                                        if (!empty($recentProducts)) {
                                            foreach ($recentProducts as $recentProduct) { ?>
                                                
                                                <div class="sidebar-product align-items-center">
                                            <a href="product-details?product=<?= $recentProduct['p_slug']; ?>" class="image">
                                                <img src="assets/images/product/small-product/1.jpg" alt="product">
                                            </a>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h4 class="title-2"> <a href="product-details?product=<?= $recentProduct['p_slug']; ?>"><?= $recentProduct['p_name'] . " &times;" . $recentProduct['p_qty']; ?></a></h4>
                                                </div>
                                                <div class="price-box">
                                                    <span class="regular-price ">&#8358;<?= $recentProduct['p_price']; ?>.00</span>
                                                    <span class="old-price"><del>&#8358;<?= $recentProduct['p_price']; ?>.00</del></span>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Sidebar Widget End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Main Area End Here -->
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