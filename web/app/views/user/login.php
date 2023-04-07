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
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>
    <!-- /jumbotron -->
<div class="p-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?php flash("login-fail"); ?>
            <?php flash("logout-success"); ?>
            <div class="card card-body bg-light">
                <form action="<?php echo URLROOT; ?>/user/login" method="POST">
                    <div class="form-group mb-2">
                        <label for="email">Email Address</label>
                        <input class="form-control <?php echo !empty($data["email_error"]) ? "is-invalid" : "" ?>" type="text" id="email" name="email" value="<?php echo $data["email"] ?>">
                        <?php if(!empty($data["email_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["email_error"] ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group mb-2">
                        <label for="fullName">Password</label>
                        <input class="form-control <?php echo !empty($data["password1_error"]) ? "is-invalid" : "" ?>" type="password" id="password1" name="password1" value="<?php echo $data["password1"] ?>">
                        <?php if(!empty($data["password1_error"])): ?>
                            <span class="invalid-feedback"><?php echo $data["password1_error"] ?></span>
                        <?php endif; ?>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Login">
                    <a href="<?php echo URLROOT; ?>/user/register" class="btn btn-outline-primary">Don't have an account? Register</a>

                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>