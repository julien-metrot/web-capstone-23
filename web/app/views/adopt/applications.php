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
    <?php flash("application_message"); ?>

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
//            $appID = $applications->application_id;
            ?>
            <div class="<?php echo strtolower($appStatus) ?> col-lg-6">
                <div class="isotope-item">

                    <div class=" adopt-card res-margin row bg-light pattern2">
                        <div class="col-md-12 res-margin">
                            <!-- Name -->
                            <div class="caption-adoption">
                                <h5 class="adoption-header"><a
                                            href="application_single.html"><?php echo $petName; ?></a></h5>
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
                                <a href="<?php echo URLROOT; ?>/adopt/application_single/<?php echo $applications->application_id?>" class="btn btn-primary">More Info</a>
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
    </div>
    <!-- /col-md -->
</div>
<!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>


