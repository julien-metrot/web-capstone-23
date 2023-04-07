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
</div>
<!-- /jumbotron -->

<!-- ==== Page Content ==== -->
<div class="page container">
    <h2 class="text-center">Adoption Application </h2>
    <p class="lead text-center mb-4">Please fill out the form below to adopt a pet.</p>


    <div class="row mx-auto">
        <div class="col-md-12 mx-auto">
            <!--        TODO add flash -->
            <div class="card card-body bg-light">
                <form action="<?php echo URLROOT; ?>/adopt/apply" method="POST">
                    <h4>Applicant Information</h4>
                    <div class="form-group mb-2" id="application-form">
                        <label for="fullName">Full Name</label>
                        <input class="form-control <?php echo !empty($data["fullName_error"]) ? "is-invalid" : "" ?>"
                               type="text" id="fullName" name="fullName" value="<?php echo $data["fullName"] ?>">
                        <?php if (!empty($data["fullName_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["fullName_error"] ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group mb-2">
                        <label for="email">Email Address</label>
                        <input class="form-control <?php echo !empty($data["email_error"]) ? "is-invalid" : "" ?>"
                               type="text" id="email" name="email" value="<?php echo $data["email"] ?>">
                        <?php if (!empty($data["email_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["email_error"] ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <label>Do you currently have pets?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["currentPets_error"]) ? "is-invalid" : "" ?>" type="radio" id="currentPets" value="Yes" name="currentPets">
                                <label class="form-check-label" for="currentPets">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["currentPets_error"]) ? "is-invalid" : "" ?>" type="radio" id="currentPetsNo" value="No" name="currentPets">
                                <label class="form-check-label" for="currentPets">No</label>
                            </div>
                            <?php if (!empty($data["currentPets_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["currentPets_error"] ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <label>Do you have children that will be living in your household?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["hasChildren_error"]) ? "is-invalid" : "" ?>" type="checkbox" id="hasChildren" value="<?php echo $data["hasChildren"] ?>" name="hasChildren">
                                <label class="form-check-label" for="hasChildren">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["hasChildren_error"]) ? "is-invalid" : "" ?>" type="checkbox" id="hasChildrenNo" value="<?php echo $data["hasChildren"] ?>" name="hasChildren">
                                <label class="form-check-label" for="hasChildrenNo">No</label>
                            </div>
                            <?php if (!empty($data["hasChildren_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["hasChildren_error"] ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Employment Information</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Employer Name</label>
                            <input type="text" name="employerName" class="form-control input-field" value="<?php echo $data["employerName"] ?>" name="employerName">
                        </div>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Home Status</h4>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label>Do you currently rent or own?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["homeStatus_error"]) ? "is-invalid" : "" ?>" type="checkbox" id="rent" value="<?php echo $data["homeStatus"] ?>" name="homeStatus">
                                <label class="form-check-label" for="rent">Rent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?php echo !empty($data["homeStatus_error"]) ? "is-invalid" : "" ?>" type="checkbox" id="own" value="<?php echo $data["homeStatus"] ?>" name="homeStatus">
                                <label class="form-check-label" for="own">Own</label>
                            </div>
                            <?php if (!empty($data["homeStatus_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["homeStatus_error"] ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name of Landlord</label>
                            <input type="text" name="landlordName" class="form-control input-field <?php echo !empty($data["landlordName_error"]) ? "is-invalid" : "" ?>" value="<?php echo $data["landlordName"] ?>" id="landlordName">
                        </div>
                        <?php if (!empty($data["landlordName_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["landlordName_error"] ?></span>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <label>Landlord Phone Number</label>
                            <input type="text" name="landlordPhone" class="form-control input-field <?php echo !empty($data["landlordPhone_error"]) ? "is-invalid" : "" ?>" value="<?php echo $data["landlordName"] ?>" id="landlordPhone">
                            <?php if (!empty($data["landlordPhone_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["landlordPhone_error"] ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Reference Information</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Reference Name</label>
                            <input type="text" name="referenceName" class="form-control input-field <?php echo !empty($data["referenceName_error"]) ? "is-invalid" : "" ?>" value="<?php echo $data["referenceName"] ?>" id="referenceName">
                        </div>
                        <?php if (!empty($data["referenceName_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["referenceName_error"] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Reference Phone Number</label>
                            <input type="text" name="referencePhone" class="form-control input-field <?php echo !empty($data["referencePhone_error"]) ? "is-invalid" : "" ?>" value="<?php echo $data["referencePhone"] ?>">
                        </div>
                        <?php if (!empty($data["referencePhone_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["referencePhone_error"] ?></span>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <label>Reference Relationship</label>
                            <input type="text" name="referenceRelationship"
                                   class="form-control input-field <?php echo !empty($data["referenceRelationship_error"]) ? "is-invalid" : "" ?>" value="<?php echo $data["referenceRelationship"] ?>">
                        </div>
                        <?php if (!empty($data["referenceRelationship_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["referenceRelationship_error"] ?></span>
                        <?php endif; ?>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h4>Animal Information</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name of pet you are interested in:</label>
                            <input type="text" name="animal-interested" class="form-control input-field">
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="check" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Subscribe to newsletter
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Register">
                    <a href="<?php echo URLROOT; ?>/user/login" class="btn btn-outline-primary">Have an account?
                        Login</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>
