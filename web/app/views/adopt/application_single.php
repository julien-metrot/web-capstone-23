<?php
/**
 * <?php
 * /**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>


    <!-- Jumbotron -->
<?php foreach ($data["applications"] as $applications):
    $fname = $applications->firstname;
    $lname = $applications->lastname;
    ?>
    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
    data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <h1><?php echo $applications->firstname;; ?>'s Application</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <!--                <ol class="breadcrumb">-->
                <!--                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
                <!--                    <li class="breadcrumb-item"><a href="adoption.html">Apply</a></li>-->
                <!--                    <li class="breadcrumb-item active" aria-current="page">Application single page</li>-->
                <!--                </ol>-->
            </nav>
        </div>
    </div>
<?php endforeach; ?>

    <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <!-- page with sidebar starts -->
<?php foreach ($data["applications"] as $applications):
    $petName = $applications->name;
    $fname = $applications->firstname;
    $lname = $applications->lastname;
    $userId = $applications->user_id;
    $appDate = $applications->application_date;
    $appStatus = $applications->application_status;
    $employerName = $applications->employer_name;
    $children = $applications->has_children;
    $homeStatus = $applications->home_status;
    $landlordName = $applications->landlord_name;
    $landlordPhone = $applications->landlord_phone;
    $currentPets = $applications->current_pets;
    ?>
    <div class="page container">
        <div class="row">
            <div class="col-lg-9 page-with-sidebar">
                <div class="row">
                    <div class="adopt-card col-lg-12">
                        <!-- Name -->
                        <div class="caption-adoption col-md-8 float-right res-margin">
                            <h2><?php echo $fname + " " + $lname; ?></h2>
                            <!-- List -->
                            <ul class="list-unstyled mt-3">
                                <li><strong>Interested In:</strong> <?php echo $petName; ?></li>
                                <li>Date Submitted: <?php echo $appDate; ?></li>
                                <li>Status: <?php echo $appStatus; ?></li>
                                <br>
                                <li>Employer Name: <?php echo $employerName; ?></li>
                                <li>Children in Home? <?php echo $children == 0 ? "No" : "Yes"; ?></li>
                                <li>Rent or Own? <?php echo $homeStatus; ?></li>
                                <li>Landlord Name: <?php echo $landlordName != null ? $landlordName : "N/A"; ?></li>
                                <li>Landlord
                                    Phone: <?php echo $landlordPhone != null ? $landlordPhone : "N/A"; ?></li>
                                <li>Pets in Home? <?php echo $currentPets == 0 ? "No" : "Yes"; ?></li>


                                <!--        Does this applicant currently have pets?: --><?php //echo $applications->current_pets;
                                ?>
                            </ul>
                        </div>
                        <!-- /caption-adoption -->
                    </div>
                    <!-- /adopt-card -->
                </div>
                <!-- /row -->
                <!-- /col-lg-12 -->
                <!-- /col-lg-12 -->
                <div class="col-lg-12">
                    <!-- Button -->
                    <div class="text-center">
                        <a href="#" class="btn btn btn-secondary mt-4">Adopt me</a>
                        <a href="adoption.html" class="btn btn btn-primary mt-4 ml-2">Go back to adoption
                            gallery</a>
                    </div>
                    <!-- /text-center -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /page-with-sidebar -->
        </div>
        <!-- /row -->
    </div>
    <!-- /page -->
<?php endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>