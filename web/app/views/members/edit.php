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
                        <li class="breadcrumb-item active" aria-current="page">Add a Member</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>
    <!-- /jumbotron -->

<div class="container">
    <a href="<?php echo URLROOT ?>/members/show/<?php echo $data["user_id"] ?>" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> Back to member</a>
    <div class="card card-body bg-light">
        <h2>Edit Item</h2>
        <?php flash("member_message"); ?>
        <form action="<?php echo URLROOT ?>/members/edit/<?php echo $data["user_id"] ?>" method="POST">
            <div class="form-group mb-3">
                <label for="firstname">First name: <sup>*</sup></label>
                <input type="text" name="firstname" id="firstname" class="form-control form-control-lg <?php echo (!empty($data["firstname_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["firstname"]; ?>">
                <span class="invalid-feedback"><?php echo $data["firstname_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="lastname">Last name: <sup>*</sup></label>
                <input type="text" name="lastname" id="lastname" class="form-control form-control-lg <?php echo (!empty($data["lastname_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["lastname"]; ?>">
                <span class="invalid-feedback"><?php echo $data["lastname_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email: <sup>*</sup></label>
                <input type="text" name="email" id="email" class="form-control form-control-lg <?php echo (!empty($data["email_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["email"]; ?>">
                <span class="invalid-feedback"><?php echo $data["email_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="dateofbirth">Date of birth: <sup>*</sup></label>
                <input type="text" name="dateofbirth" id="dateofbirth" class="form-control form-control-lg <?php echo (!empty($data["dateofbirth_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["dateofbirth"]; ?>">
                <span class="invalid-feedback"><?php echo $data["dateofbirth_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="job_title">Job title: <sup>*</sup></label>
                <input type="text" name="job_title" id="job_title" class="form-control form-control-lg <?php echo (!empty($data["job_title_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["job_title"]; ?>">
                <span class="invalid-feedback"><?php echo $data["job_title_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="job_description">Job description: <sup>*</sup></label>
                <textarea rows="5" name="job_description" id="job_description" class="form-control form-control-lg <?php echo (!empty($data["job_description_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["job_description"]; ?></textarea>
                <span class="invalid-feedback"><?php echo $data["job_description_error"]; ?></span>
            </div>
            <div class="form-group mb-3">
                <label for="job_qualification">Job qualification: <sup>*</sup></label>
                <textarea rows="3" name="job_qualification" id="job_qualification" class="form-control form-control-lg <?php echo (!empty($data["job_qualification_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["job_qualification"]; ?></textarea>
                <span class="invalid-feedback"><?php echo $data["job_qualification_error"]; ?></span>
            </div>
            <input type="submit" value="Submit" class="btn btn-dark">
        </form>
    </div>
</div>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>