<?php
/**
 * <?php
 * /**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>


<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
     data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <h1>Applications</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apply</li>
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
        <div class="col-lg-12">
            <h2>All Applications</h2>
        </div>
    </div>
    <!-- centered Gallery navigation -->
    <ul class="nav nav-pills category-isotope center-nav mt-5">
        <li class="nav-item">
            <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="tab" data-filter=".pending">Pending</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="tab" data-filter=".approved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="tab" data-filter=".denied">Denied</a>
        </li>
    </ul>
    <!-- /ul -->
    <!-- Gallery -->
    <div id="gallery-isotope" class="row row-eq-height mt-lg-5 mb-4">
        <!-- Adopt 1 -->
        <?php foreach ($data["applications"] as $applications):
            $petName = $applications->name;
            $fname = $applications->firstname;
            $lname = $applications->lastname;
            $userId = $applications->user_id;
            $appDate = $applications->application_date;
            $appStatus = $applications->application_status;
            ?>
            <div class="<?php echo strtolower($appStatus) ?> col-lg-6">
                <div class="isotope-item">

                    <div class=" adopt-card res-margin row bg-light pattern2">
                        <div class="col-md-12 res-margin">
                            <!-- Name -->
                            <div class="caption-adoption">
                                <h5 class="adoption-header"><a
                                            href="adoption-single.html"><?php echo $petName; ?></a></h5>
                                <!-- List -->
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Applicant: </strong><?php echo $fname . " " . $lname . " ($userId)"; ?>
                                    </li>
                                    <li><strong>Date Submitted: </strong><?php  echo date_format(new DateTime($appDate),"m/d/Y"); ?></li>
                                    <li><strong>Status: </strong><?php echo $appStatus; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <!-- Button -->
                            <div class="">
                                <!-- button-->
                                <a href="application_single" class="btn btn-primary">More Info</a>
                            </div>
                            <!-- /text-center -->
                        </div>
                        <!-- /col-md -->

                    </div>
                    <!-- /adopt-card -->
                </div>
                <!-- /isotope-item-->
            </div>
        <?php endforeach; ?>

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

<?php //foreach ($data["applications"] as $applications): ?>
<!--    <h2>--><?php //echo $applications->firstname . " " . $applications->lastname . " ($applications->user_id)"; ?><!--</h2>-->
<!--    <p>Interested in: --><?php //echo $applications->name . " (" . $applications->animal_id . ")"; ?><!--<br>-->
<!--        Application status: --><?php //echo $applications->application_status; ?><!--<br>-->
<!--        Employer Name: --><?php //echo $applications->employer_name; ?><!--<br>-->
<!--        Does this applicant have children in their home?: --><?php //echo $applications->has_children; ?><!--<br>-->
<!--        Does this applicant currently rent or own their home?: --><?php //echo $applications->home_status; ?><!--<br>-->
<!--        Landlord Name: --><?php //echo $applications->landlord_name; ?><!--<br>-->
<!--        Landlord Phone Number: --><?php //echo $applications->landlord_phone; ?><!--<br>-->
<!--        Does this applicant currently have pets?: --><?php //echo $applications->current_pets; ?><!--<br>-->
<!--    </p>-->
<?php //endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>


