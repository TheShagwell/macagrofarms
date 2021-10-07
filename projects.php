
<?php
    require_once 'admin/config/db.php';
    $projects = getAllDesc("projects");

?>
<?php require_once 'inc/header.php'; ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Projects</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Projects</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <div class="projects-one">
            <div class="container">
                <div class="row">
                    
                <?php
                    if (!empty($projects)) {
                        foreach ($projects as $project) {
                            extract($project); 
                            $project_slug = str_replace(" ", "-", $title); ?>


                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="projects-one__single">
                                    <img src="assets/images/projects/project-1-1.jpg" alt="">
                                    <div class="projects-one__content">
                                        <h3><?= $title; ?></h3>
                                        <a href="project-details?project=<?= $project_slug; ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                                        <!-- /.projects-one__button -->
                                    </div>
                                    <!-- /.projects-one__content -->
                                </div>
                                <!-- /.projects-one__single -->
                            </div>
                            <!-- /.col-sm-12 -->
               
                    
                  <?php } } ?>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.projects-one -->

        <?php require_once 'inc/footer.php'; ?>