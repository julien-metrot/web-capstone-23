<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
         data-top-bottom="background-size: 110%;">
        <div class="container" >
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-up">
                <h1>Login!</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Member</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>
    <!-- /jumbotron -->

    <!-- ==== Page Content ==== -->
    <div class="page container">
        <?php flash("member_message"); ?>
        <a href="<?php echo URLROOT ?>/members/info" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> View all members</a>
        <div class="row">
            <!-- page with sidebar starts -->
            <div class="col-lg-9 page-with-sidebar">
                <div class="row">
                    <!-- Image -->
                    <div class="col-lg-5 text-center">
                        <img src="<?php echo URLROOT ?>/images/members/<?php echo $data["member"]->avatar ?>" class="img-fluid rounded" alt="<?php echo $data["member"]->firstname . " " . $data["member"]->lastname ?>">
                    </div>
                    <!-- /col-md-5 -->
                    <div class="col-lg-7">
                        <h2 class="res-margin"><?php echo $data["member"]->firstname . " " . $data["member"]->lastname ?></h2>
                        <h5 class="text-tertiary"><?php echo $data["member"]->job_title ?></h5>
                        <p class="fw-bold"><?php echo $data["member"]->job_description ?></p>
                        <h6><?php echo $data["member"]->email ?></h6>
                        <h6><?php echo $data["member"]->dateofbirth ?></h6>
                    </div>
                    <!-- /col-md-7 -->
                </div>
                <!-- /row -->
                <h4 class="mt-3">My Qualifications</h4>
                <!-- custom list -->
                <ul class="custom pl-0">
                    <li><?php echo $data["member"]->job_qualification ?></li>
                </ul>
                <!-- /ul -->
            </div>
            <!-- /page-with-sidebar -->
            <!-- ==== Sidebar ==== -->
            <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
                <div class="widget-area">
                    <h5 class="sidebar-header">Follow <?php echo $data["member"]->firstname ?></h5>
                    <div class="contact-icon-info">
                        <ul class="social-media text-center">
                            <!--social icons -->
                            <li> <a href="<?php echo $data["member"]->linkedin ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li> <a href="<?php echo $data["member"]->github ?>" target="_blank"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                    <!--/contact-icon-info -->
                </div>
            </div>
            <!--/sidebar -->
        </div>
        <!-- /row -->
        <?php if(isset($_SESSION['user_id']) && $_SESSION['admin'] == 1): ?>
        <a href="<?php echo URLROOT ?>/members/edit/<?php echo $data["member"]->user_id; ?>" class="btn btn-dark mb-4">Edit a member</a>
        <a href="<?php echo URLROOT ?>/members/delete/<?php echo $data["member"]->user_id; ?>" class="btn btn-danger mb-4">Delete a Member</a>
        <?php endif; ?>
    </div>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>