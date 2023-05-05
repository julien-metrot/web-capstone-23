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
            <h1>Edit Application</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Applications</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- /jumbotron -->

<!-- ==== Page Content ==== -->
<div class="page container">
    <!--    <p class="lead text-center mb-4">Please fill out the form below to adopt a pet.</p>-->


    <div class="row mx-auto">
        <div class="col-md-12 mx-auto">
            <?php flash("edit_message"); ?>
            <div class="card card-body bg-light">
                <form action="<?php echo URLROOT; ?>/adopt/edit/<?php echo $data["application_id"] ?>" method="POST">
                    <h4>Applicant Information</h4>

                    <div class="col-md-12 mt-4 form-group">
                        <label>Do you currently have pets?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?php echo !empty($data["currentPets_error"]) ? "is-invalid" : "" ?>"
                                   type="radio" id="currentPets" value="1" name="currentPets">
                            <label class="form-check-label" for="currentPets">Yes</label>
                            <?php if (!empty($data["currentPets_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["currentPets_error"] ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" checked
                                   type="radio" id="currentPetsNo" value="0" name="currentPets">
                            <label class="form-check-label" for="currentPets">No</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4 form-group">
                        <label>Do you have children that will be living in your household?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?php echo !empty($data["hasChildren_error"]) ? "is-invalid" : "" ?>"
                                   type="radio" id="hasChildren" value="1" name="hasChildren">
                            <label class="form-check-label" for="hasChildren">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" checked
                                   type="radio" id="hasChildrenNo" value="0" name="hasChildren">
                            <label class="form-check-label" for="hasChildren">No</label>
                        </div>

                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Employment Information</h4>
                    <div class="col-md-12 form-group">
                        <label>Employer Name</label>
                        <input type="text" name="employerName" class="form-control input-field"
                               value="<?php echo $data["employerName"] ?>" name="employerName">
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Home Status</h4>
                    <div class="col-md-12 mb-4 form-group">
                        <label>Do you currently rent or own?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?php echo !empty($data["homeStatus_error"]) ? "is-invalid" : "" ?>"
                                   type="radio" id="rent" value="Rent" name="homeStatus">
                            <label class="form-check-label" for="homeStatus">Rent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?php echo !empty($data["homeStatus_error"]) ? "is-invalid" : "" ?>"
                                   type="radio" id="own" value="Own" name="homeStatus">
                            <label class="form-check-label" for="homeStatus">Own</label>
                        </div>
                        <?php if (!empty($data["homeStatus_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["homeStatus_error"] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Name of Landlord (If Applicable)</label>
                        <input type="text" name="landlordName"
                               class="form-control input-field <?php echo !empty($data["landlordName_error"]) ? "is-invalid" : "" ?>"
                               value="<?php echo $data["landlordName"] ?>" id="landlordName">

                        <?php if (!empty($data["landlordName_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["landlordName_error"] ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6">
                        <label>Landlord Phone Number (If Applicable)</label>
                        <input type="text" name="landlordPhone"
                               class="form-control input-field <?php echo !empty($data["landlordPhone_error"]) ? "is-invalid" : "" ?>"
                               value="<?php echo $data["landlordPhone"] ?>" id="landlordPhone">
                        <?php if (!empty($data["landlordPhone_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["landlordPhone_error"] ?></span>
                        <?php endif; ?>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Animal Information</h4>
                    <div class="col-md-12 form-group">
                        <label>Name of pet interested in:</label>
                        <input type="text" name="animal-interested" class="form-control input-field">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Edit Application">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>
