
<?php
    require_once 'admin/config/db.php';

    if (isset($_GET['project'])) {
        $single_project_url = $_GET['project'];
        $single_project_title = str_replace("-", " ", $single_project_url);

        $single_project = getWhere("projects", "title", $single_project_title);
        if (!empty($single_project)) {
            extract($single_project);
        }
    }

?>
<?php require_once 'inc/header.php'; ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li><span>Project Details</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Project Details</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="project-details">
            <div class="container">
                <img src="assets/images/projects/project-d-1-1.jpg" class="img-fluid" alt="">
                <ul class="list-unstyled project-details__list 20 July, 2020">
                    <li>
                        <span>Date:
                        </span> <?= date('d F, Y', strtotime($created_at)); ?>
                    </li>
                    <li>
                        <span>Client:
                        </span> <?= $client; ?>
                    </li>
                    <li>
                        <span>Category:
                        </span> <?= $category; ?>
                    </li>
                    <li>
                        <span>Service:
                        </span> <?= $service; ?>
                    </li>
                </ul>
                <!-- /.list-unstyled project-details__list -->
                <h2><?= $title; ?></h2>
                <p>
                    <?= $description; ?>
                </p>
             
            </div>
            <!-- /.container -->
        </section>
        <!-- /.project-details -->

        <div class="projects-one project-page">
            <div class="container">
                <hr />
                <div class="block-title text-center">
                    <div class="block-title__image"></div>
                    <!-- /.block-title__image -->
                    <p>Closed projects</p>
                    <h3>Latest Projects List</h3>
                </div>
                <!-- /.block-title -->
                <div class="row">

                <?php
                    $other_projects = getAllLimit("projects", 3);

                    if (!empty($other_projects)) {
                        foreach ($other_projects as $proj) {
                            extract($proj);
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