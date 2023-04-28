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
                <h1>Application Details</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="applications.html">Apply</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Application Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page container">
        <?php flash("application_message"); ?>
        <h2 class="mt-4"><?php echo $data["application"]->firstname . " " . $data["application"]->lastname; ?>'s Application</h2>
        <div class="row bg-light card mt-4">
            <ul class="list-unstyled mt-3">
                <!--                                <li><strong>Interested In:</strong> -->
                <?php //echo $data["application"]->pet_name; ?><!--</li>-->
                <li><strong>Interested In: </strong> <?php echo $data["application"]->name; ?></li>
                <li><strong>Date Submitted: </strong> <?php echo $data["application"]->application_date; ?></li>
                <li><strong>Status: </strong> <?php echo $data["application"]->application_status; ?></li>
                <li><strong>Employer Name: </strong><?php echo $data["application"]->employer_name; ?></li>
                <li><strong>Children in Home? </strong> <?php echo $data["application"]->has_children == 0 ? "No" : "Yes"; ?></li>
                <li><strong>Rent or Own? </strong><?php echo $data["application"]->home_status; ?></li>
                <li><strong>Landlord
                    Name: </strong><?php echo $data["application"]->landlord_name != null ? $data["application"]->landlord_name : "N/A"; ?></li>
                <li><strong>Landlord
                    Phone: </strong><?php echo $data["application"]->landlord_phone != null ? $data["application"]->landlord_phone : "N/A"; ?></li>
                <li><strong>Pets in Home?</strong> <?php echo $data["application"]->current_pets == 0 ? "No" : "Yes"; ?></li>
            </ul>
        </div>
        <!-- /caption-adoption -->
    </div>
<div class="container mx-auto text-center">
<?php //if ($data["user"]->admin == 1): ?>
    <a href="<?php echo URLROOT ?>/adopt/approve/<?php echo $data["application"]->application_id ?>"
       class="btn btn-dark">Approve</a>
    <a href="<?php echo URLROOT; ?>/adopt/deny/<?php echo $data["application"]->application_id; ?>"
       class="btn btn-danger float-end">Deny</a>
<?php //endif; ?>
</div>
    <!-- /adopt-card -->
    <!-- /row -->
    <!-- /col-lg-12 -->
    <!-- /col-lg-12 -->
    <div class="col-lg-12">
        <!-- Button -->
        <div class="text-center">
            <a href="<?php echo URLROOT; ?>/adopt/applications" class="btn btn btn-primary my-4">Go back to all applications</a>
            <!-- /row -->
        </div>
        <!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>