<?php /** @var TYPE_NAME $data */ ?>
<?php require APPROOT . "/views/inc/header.php"; ?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
         data-top-bottom="background-size: 110%;">
        <div class="container">
            <div class="jumbo-heading" data-aos="fade-up">
                <h1>Adoption</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>">Home</a></li>
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
        <div class="card card-body bg-light">
            <h2>Add Animal</h2>
            <form action="<?php echo URLROOT; ?>/animals/add" method="POST">
                <div class="form-group mb-3">
                    <label for="name">Animal Name: <sup>*</sup></label>
                    <input type="text" name="name" id="name"
                           class="form-control form-control-lg <?php echo (!empty($data["name_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["name"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["name_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="breed">Animal Breed: <sup>*</sup></label>
                    <input type="text" name="breed" id="breed"
                           class="form-control form-control-lg <?php echo (!empty($data["breed_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["breed"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["breed_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="type">Animal Type: <sup>*</sup></label>
                    <input type="text" name="type" id="type"
                           class="form-control form-control-lg <?php echo (!empty($data["type_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["type"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["type_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="gender">Animal Gender: <sup>*</sup></label>
                    <input type="text" name="gender" id="gender"
                           class="form-control form-control-lg <?php echo (!empty($data["gender_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["gender"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["gender_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="dateofbirth">Animal Birthday (YYYY-MM-DD): <sup>*</sup></label>
                    <input type="text" name="dateofbirth" id="dateofbirth"
                           class="form-control form-control-lg <?php echo (!empty($data["dateofbirth_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["dateofbirth"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["dateofbirth_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Animal Status: <sup>*</sup></label>
                    <input type="text" name="status" id="status"
                           class="form-control form-control-lg <?php echo (!empty($data["status_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["status"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["status_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Animal Description: <sup>*</sup></label>
                    <textarea name="description" id="description"
                              class="form-control form-control-lg <?php echo (!empty($data["description_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["description"]; ?></textarea>
                    <span class="invalid-feedback"><?php echo $data["description_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="special_needs">Special Needs: <sup>*</sup></label>
                    <input type="text" name="special_needs" id="special_needs"
                           class="form-control form-control-lg <?php echo (!empty($data["special_needs_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["special_needs"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["special_needs_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="friendly">Friendly: (1 = yes, 0 = no)<sup>*</sup></label>
                    <input type="text" name="friendly" id="friendly"
                           class="form-control form-control-lg <?php echo (!empty($data["friendly_error"])) ? "is-invalid" : ""; ?>"
                           value="<?php echo $data["friendly"]; ?>">
                    <span class="invalid-feedback"><?php echo $data["friendly_error"]; ?></span>
                </div>
                <input type="submit" value="Submit" class="btn btn-secondary">
            </form>
        </div>
    </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>