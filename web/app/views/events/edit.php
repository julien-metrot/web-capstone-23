<?php /** @var TYPE_NAME $data */ ?>
<?php require APPROOT . "/views/inc/header.php"; ?>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
     data-top-bottom="background-size: 110%;">
    <div class="container" >
        <div class="jumbo-heading" data-aos="fade-up">
            <!-- jumbo-heading -->
            <h1>Events</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo URLROOT;?>/page/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
            <!-- /breadcrumb -->
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /container -->
</div>
<!-- /jumbotron -->
<?php flash("login-success"); ?><?php flash("post_message"); ?>
<div class="container">
    <a href="<?php echo URLROOT ?>/events/upcoming" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> View all Events</a>
    <div class="card card-body bg-light">
    </div>
    <h2> Edit Event</h2>
    <form action="<?php echo URLROOT; ?>/events/add" method="POST">
        <div class="form-group mb-3">
            <label for="event_title">Event Title: <sup>*</sup></label>
            <input type="text" name="event_title" id="event_title" class="form-control form-control-lg <?php echo (!empty($data["event_title_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["event_title"]; ?>">
            <span class="invalid-feedback"><?php echo $data["event_title_error"]; ?></span>
        </div>
        <div class="form-group mb-3">
            <label for="event_description">Event Description: <sup>*</sup></label>
            <textarea name="event_description" id="event_description" class="form-control form-control-lg <?php echo (!empty($data["event_description_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["event_description"]; ?></textarea>
            <span class="invalid-feedback"><?php echo $data["event_description_error"]; ?></span>
        </div>

        <div class="form-group mb-3">
            <label for="event_date">Event Date: <sup>*</sup></label>
            <textarea name="event_date" id="event_date" class="form-control form-control-lg <?php echo (!empty($data["event_date_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["event_date"]; ?></textarea>
            <span class="invalid-feedback"><?php echo $data["event_date_error"]; ?></span>
        </div>

        <div class="form-group mb-3">
            <label for="event_address">Event Address: <sup>*</sup></label>
            <textarea name="event_address" id="event_address" class="form-control form-control-lg <?php echo (!empty($data["event_address_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["event_address"]; ?></textarea>
            <span class="invalid-feedback"><?php echo $data["event_address_error"]; ?></span>
        </div>
        <input type="submit" value="Submit" class="btn btn-secondary">
    </form>
</div>