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
                <h3>eCommerce Dashboard</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row">

                    <div class="col-xl-12 col-lg-6 d-block w-100">
                        <div class="widget-content-area br-4 mb-4 layout-spacing">
                            <div class="widget  t-order-widget">
                                <div class="row">
                                    <div
                                        class="col-md-5 col-sm-5 col-12 text-md-left text-center pr-0 mt-sm-0 mt-4  order-1 order-sm-0">
                                        <p class="t-o-txt mb-3 mb-sm-5 mt-3">Total Orders</p>
                                        <p class="t-o-value">1596 <i class="flaticon-arrow-up"></i></p>
                                        <div class="t-o-icon">
                                            <i class="flaticon-cart-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-12">
                                        <div class="cogs  mt-sm-5 mt-3  ml-md-auto mx-auto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6">
                        <div class="widget-content-area br-4 layout-spacing">
                            <div class="widget  t-sales-widget">
                                <i class="flaticon-close-fill cancel-row"></i>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="trading-time mt-4">

                                            <div class="d-flex date-content justify-content-center">
                                                <div class="text-center">
                                                    <div id="week" class="d-inline"></div>
                                                    <div id="day" class="d-inline"> </div>
                                                    <div id="month" class="d-inline"></div>
                                                </div>
                                            </div>

                                            <div class="d-flex timer-content justify-content-center mt-2">
                                                <div id="hour" class=""></div>
                                                <div id="minut" class=""></div>
                                                <div id="sec" class=""></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 text-center text-center">
                                        <i class="flaticon-wall-clock icon  mt-3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <div class="row">


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="row">

                    <div class="col-xl-12 mb-4">
                        <div class="widget-content widget-content-area br-4">
                            <div class="total-visits">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6 mb-3">
                                        <p class="t-v-value mb-0">26789</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="total-visits-charts"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="t-v-txt d-flex">Total Visits <i
                                                class="flaticon-profits-1 align-self-center ml-2"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 mb-4">
                        <div class="widget-content widget-content-area br-4">
                            <div class="unique-visits">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6 mb-3">
                                        <p class="u-v-value mb-0 d-flex">18678</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div id="unique-visits-charts"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="u-v-txt mb-0">Unique Visits <i
                                                class="flaticon-arrows-1 align-self-center ml-2"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-sm-12  d-block">
                        <div class="widget-content widget-content-area br-4">
                            <div class="page-views">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6 mb-3">
                                        <p class="p-v-value mb-0 d-flex">8225</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div id="page-views"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="p-v-txt mb-0">Page Views <i
                                                class="flaticon-up-arrow-3 align-self-center ml-2"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-4 p-0">
                    <div class="recent-sales">
                        <div class="recent-sales-header">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="mb-0">Recent Sales</h6>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-circle-cross"></i>
                                </div>
                            </div>
                        </div>
                        <div class="recent-sales-body">
                            <div class="table-responsive">
                                <div class=" recent-sales-scroll">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Order Id</th>
                                                <th>Date</th>
                                                <th class="text-center">Unit/$</th>
                                                <th class="">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Camera</td>
                                                <td>#0100</td>
                                                <td>23 Dec</td>
                                                <td class="text-center">
                                                    <span>1</span>
                                                    <br />
                                                    <span>$25.80</span>
                                                </td>
                                                <td>$51.60</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

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

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="assets/js/ui-kit/timeline/horizontal-main.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/charts/amcharts/amcharts.js"></script>
<script src="plugins/maps/vector/ammaps/ammap_amcharts_extension.js"></script>
<script src="plugins/maps/vector/ammaps/worldLow.js"></script>
<script src="plugins/charts/amcharts/radar.js"></script>
<script src="plugins/charts/amcharts/pie.js"></script>
<script src="plugins/charts/sparklines/jquery.sparkline.min.js"></script>
<script src="plugins/charts/amcharts/serial.js"></script>
<script src="plugins/charts/amcharts/light.js"></script>
<script src="assets/js/ecommerce-dashboard/ecommerce-custom.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- ADDING A PHP FOOTER FILE FOR GENERAL SCRIPT -->
<?php require_once 'inc/footer.php'; ?>

</body>

</html>