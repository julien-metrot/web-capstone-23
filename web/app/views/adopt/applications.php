<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
         data-top-bottom="background-size: 110%;">
        <div class="container">
            <div class="jumbo-heading" data-aos="fade-up">
                <h1>Adoption</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adoption</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page container">
        <div class="row">
            <div class="col-lg-7">
                <h2>All Applications</h2>
                <p class="mt-4">Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac
                    sodales Lorem ipsum dolor Phas ellus ac sodales felis tiam non metus. lorem ipsum dolor sit amet,
                    consectetur adipisicing elit
                </p>
                <p class="font-weight-bold">If you have any doubts or need more information, please <a
                            href="/application.html">contact us</a>
                </p>
            </div>
            <!-- /col-lg -->
            <!--            <div class="col-lg-5 card bg-light">-->
            <!--                <h5>Ready for adoption</h5>-->
            <!--                <ul class="checkmark pl-0 font-weight-bold">-->
            <!--                    <li>All pets are neutered and vaccinated</li>-->
            <!--                    <li>All pets are examined by a vet and treated as required</li>-->
            <!--                    <li>We help to match you with a pet that meet you needs</li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!-- /col-lg -->
        </div>
        <!-- centered Gallery navigation -->
        <ul class="nav nav-pills category-isotope center-nav mt-5">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".dogs">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".cats">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".cats">Denied</a>
            </li>
        </ul>
        <!-- /ul -->
        <!-- Gallery -->
        <div id="gallery-isotope" class="row row-eq-height mt-lg-5 mb-4">
            <!-- Adopt 1 -->
            <div class="dogs col-lg-6">
                <div class="isotope-item">
                    <div class="adopt-card res-margin row bg-light pattern2">
                        <?php foreach ($data["applications"] as $applications): ?>
                            <div class="col-md-7 res-margin">
                                <!-- Name -->
                                <div class="caption-adoption">
                                    <h5 class="adoption-header"><a href="adoption-single.html"><?php echo $applications->name; ?></a></h5>
                                    <!-- List -->
                                    <ul class="list-unstyled">
                                        <li><strong>Applicant:</strong><?php echo $applications->firstname . " " . $applications->lastname . " ($applications->user_id)"; ?></li>
                                        <li><strong>Date Submitted: </li>
                                        <li><strong>Status: <?php echo $applications->application_status; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <!-- Button -->
                                <div class="text-center">
                                    <!-- Adopt info -->
<!--                                    <ul class="adopt-card-info list-unstyled">-->
<!--                                        <li><i class="flaticon-veterinarian-hospital"></i>special needs</li>-->
<!--                                        <li><i class="flaticon-dog-4"></i>Friendly to other pets</li>-->
<!--                                    </ul>-->
                                    <!-- button-->
                                    <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                                </div>
                                <!-- /text-center -->
                            </div>
                            <!-- /col-md -->
                        <?php endforeach; ?>

                    </div>
                    <!-- /adopt-card -->
                </div>
                <!-- /isotope-item-->
            </div>
            <!-- /col-lg- -->
            <!-- Adopt 2 -->
            <!--            <div class="cats col-lg-6">-->
            <!--                <div class="isotope-item">-->
            <!--                    <div class="adopt-card res-margin row bg-light pattern2">-->
            <!--                        <div class="col-md-5">-->
            <!-- Image -->
            <!--                            <div class="adopt-image d-flex flex-wrap align-items-center ">-->
            <!--                                <a href="adoption-single.html">-->
            <!--                                    <img src="img/adoption/adoption2.jpg" class="img-fluid" alt="">-->
            <!--                                </a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-7 res-margin">-->
            <!-- Name -->
            <!--                            <div class="caption-adoption">-->
            <!--                                <h5 class="adoption-header"><a href="adoption-single.html">Leelo</a></h5>-->
            <!-- List -->
            <!--                                <ul class="list-unstyled">-->
            <!--                                    <li><strong>Gender:</strong> Male</li>-->
            <!--                                    <li><strong>Age:</strong> 7 years</li>-->
            <!--                                    <li><strong>Breed:</strong> Mixed</li>-->
            <!--                                </ul>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-12 mt-3">-->
            <!-- Button -->
            <!--                            <div class="text-center">-->
            <!-- Adopt info -->
            <!--                                <ul class="adopt-card-info list-unstyled">-->
            <!--                                    <li ><i class="flaticon-syringe"></i>Vaccinated</li>-->
            <!--                                    <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>-->
            <!--                                </ul>-->
            <!-- button-->
            <!--                                <a href="adoption-single.html" class="btn btn-primary">More Info</a>-->
            <!--                            </div>-->
            <!-- /text-center -->
            <!--                        </div>-->
            <!-- /col-md -->
            <!--                    </div>-->
            <!-- /adopt-card -->
            <!--                </div>-->
            <!-- /isotope-item-->
            <!--            </div>-->
            <!-- /col-lg- -->
            <!-- Adopt 3 -->
            <div class="dogs col-lg-6"></div>
            <!-- /col-lg- -->
            <!-- Adopt 4 -->
            <div class="dogs col-lg-6">
            </div>
            <!-- /col-lg- -->
            <!-- Adopt 5 -->

            <!-- /col-lg- -->
            <!-- Adopt 6 -->

            <!-- /col-lg- -->
            <!-- Adopt 7 -->

            <!-- /col-lg- -->
            <!-- Adopt 8 -->

            <!-- /col-lg- -->
        </div>
        <!-- /gallery-isotope-->
        <div class="col-md-12 mt-5">
            <!-- pagination -->
            <!--            <nav aria-label="pagination">-->
            <!--                <ul class="pagination">-->
            <!--                    <li class="page-item"><a class="page-link active" href="#">1</a></li>-->
            <!--                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
            <!--                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
            <!--                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
            <!--                </ul>-->
            <!--            </nav>-->
            <!-- /nav -->
        </div>
        <!-- /col-md -->
    </div>
    <!-- /page -->

<?php foreach ($data["applications"] as $applications): ?>
    <h2><?php echo $applications->firstname . " " . $applications->lastname . " ($applications->user_id)"; ?></h2>
    <p>Interested in: <?php echo $applications->name . " (" . $applications->animal_id . ")"; ?><br>
        Application status: <?php echo $applications->application_status; ?><br>
        Employer Name: <?php echo $applications->employer_name; ?><br>
        Does this applicant have children in their home?: <?php echo $applications->has_children; ?><br>
        Does this applicant currently rent or own their home?: <?php echo $applications->home_status; ?><br>
        Landlord Name: <?php echo $applications->landlord_name; ?><br>
        Landlord Phone Number: <?php echo $applications->landlord_phone; ?><br>
        Does this applicant currently have pets?: <?php echo $applications->current_pets; ?><br>
    </p>
<?php endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>


