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
                <h1>Our Team</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
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
    <div class="page">
        <!-- /container-->
        <div class="block-padding">
            <!-- Team style 2 -->
            <h3 class="text-center">The Team</h3>
            <div class="container mt-5">
                <div class="row">
                    <?php flash("member_message"); ?>
                    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_admin'] == 1): ?>
                    <a href="<?php echo URLROOT ?>/members/add" role="button" class="btn btn-primary">Add a Member</a>
                    <?php endif; ?>
                    <!-- team carousel -->
                    <div class="col-md-12 carousel-3items owl-carousel owl-theme">
                        <!-- Team member 1 -->
                        <?php foreach ($data["members"] as $member): ?>
                        <div class="team-style2 col-lg-12">
                            <!-- image and social icons -->
                            <div class="img-box">
                                <div class="text-center">
                                    <img src="<?php echo URLROOT ?>/images/members/<?php echo $member->avatar ?>" class="img-fluid" alt="">
                                    <ul class="social-icons text-center">
<!--                                        <li> <a href="#"><i class="fab fa-facebook"></i></a></li>-->
<!--                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                        <li> <a href="<?php echo $member->linkedin ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        <li> <a href="<?php echo $member->github ?>" target="_blank"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Team header -->
                            <a href="<?php echo URLROOT ?>/members/show/<?php echo $member->user_id ?>">
                                <h5 class="team-header"><?php echo $member->firstname . " " . $member->lastname ?></h5>
                            </a>
                            <span><?php echo $member->job_title ?></span>
                            <hr class="small-divider left"/>
                            <p><?php echo $member->job_description ?></p>
                        </div>
                        <?php endforeach; ?>
                        <!--/ Team member 1 -->
                    </div>
                    <!--/col-md-12 -->
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg-light-custom -->
        <!-- /container -->
    </div>
    <!-- /page -->
<?php require_once(APPROOT . "/views/inc/footer.php") ?>