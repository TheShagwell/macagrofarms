<?php
    require_once 'config/db.php';

    //= For adding a category
    if (isset($_POST['submit'])) {
        $response = addProject($_POST);

        if ($response === true) {
            echo "<script>alert('Project have been uploaded successfully')</script>";
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

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Add/Edit Projects</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">eCommerce</a></li>
                        <li class="active"><a href="#">Add/Edit Projects</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Projects </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-category">
                        <div class="row">
                            <div class="mx-xl-auto col-xl-10 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading">
                                        <h2 class="card-title ml-4 mt-3"><span>Projects</span></h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Title: </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="p_title" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Client: </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="p_client" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Category: </label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="p_cat">
                                                            <option selected disabled value="">Select Category</option>
                                                                <?php
                                                                    $categories = getAll("categories");

                                                                    if (!empty($categories)) {
                                                                        foreach ($categories as $category) {
                                                                            extract($category); ?>
                                                                                <option value="<?= $cat_name; ?>"><?= $cat_name; ?></option>
                                                            <?php } } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Service: </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="p_service" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Description: </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="p_desc" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Project Image: </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="p_image" type="file">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="align-center">
                                                    <input value="Submit" name="submit" class="btn btn-primary mt-5 mb-4"
                                                        type="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h6>Edit Projects</h6>

        <div class="row">
            <?php
                $categories = getAll('categories');

                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        extract($category); ?>

                        <div class="col-lg-6 mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <label>Category Name:</label>
                                        <input type="text" class="form-control mb-2" name="update_name" value="<?= $cat_name; ?>" id="">

                                        <input type="hidden" name="cat_id" value="<?= $id; ?>">

                                        <input type="submit" class="form-control btn btn-outline-primary" name="updateName" value="Change Name">
                                    </form>
                                </div>
                            </div>
                        </div>

            <?php } } ?>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->


<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="plugins/blockui/jquery.blockUI.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- Custom Footer -->
<?php require_once 'inc/footer.php'; ?>
</body>

</html>