
<?php 
    require_once 'config/db.php';
    blockCRS($_SESSION['admin'], 'login');

?>

<!-- ADDING A GLOBAL HEADER FILE -->
<?php require_once 'inc/header.php'; ?>

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Products</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">eCommerce</a></li>
                        <li class="active"><a href="#">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row margin-bottom-120">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Product List </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="ecommerce-product-list" class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th>Sku</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th class="align-center">Status</th>
                                        <th class="align-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $response = getAll("products");

                                        if(!empty($response)) {
                                            foreach($response as $product) {
                                                extract($product); ?>
                                                    <tr>
                                                        <td>0010</td>
                                                        <td class="text-center">
                                                            <a class="product-list-img" href="javascript: void(0);"><img
                                                                    src="assets/img/60x60.jpg" alt="product"></a>
                                                        </td>
                                                        <td>CK Glasses</td>
                                                        <td>Simple Product</td>
                                                        <td>Glasses</td>
                                                        <td>ITEM-0001</td>
                                                        <td>$120.00</td>
                                                        <td>80,000</td>
                                                        <td class="text-center text-success"> <i class="flaticon-cart-bag-1"></i> </td>
                                                        <td class="align-center">
                                                            <ul class="table-controls">
                                                                <li>
                                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                                        data-placement="top" title="Edit">
                                                                        <i class="flaticon-edit"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                                        data-placement="top" title="Delete">
                                                                        <i class="flaticon-delete-5"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                  <?php } } ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!--  BEGIN CUSTOM SCRIPT FILES  -->
<script src="plugins/table/datatable/datatables.js"></script>
<script>
    $('#ecommerce-product-list').DataTable({
        "lengthMenu": [5, 10, 20, 50, 100],
        "language": {
            "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
            },
            "info": "Showing page _PAGE_ of _PAGES_"
        },
        drawCallback: function (settings) {
            $('[data-toggle="tooltip"]').tooltip();
        }
    });
</script>
<!--  END CUSTOM SCRIPT FILES  -->

<!-- ADDING A PHP FOOTER FILE FOR GENERAL SCRIPT -->
<?php require_once 'inc/footer.php'; ?>
</body>

</html>