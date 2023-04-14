
<?php /** @var TYPE_NAME $data */ ?>
<?php require APPROOT . "/views/inc/header.php"; ?>
<div class="container">
    <a href="<?php echo URLROOT ?>/animal" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> View all animals</a>
    <div class="card card-body bg-light">
<!--        <form action="<?php /*echo URLROOT; */?>/animal/add" method="POST">
            <div class="form-group mb-3">
                <label for="name">Post Title: <sup>*</sup></label>
                <input type="text" name="name" id="name" class="form-control form-control-lg <?php /*echo (!empty($data["name_err"])) ? "is-invalid" : ""; */?>" value="<?php /*echo $data["name"]; */?>">
                <span class="invalid-feedback"><?php /*echo $data["post_title_err"]; */?></span>
            </div>
            <div class="form-group mb-3">
                <label for="post_body">Body: <sup>*</sup></label>
                <textarea name="post_body" id="post_body" class="form-control form-control-lg <?php /*echo (!empty($data["post_body_err"])) ? "is-invalid" : ""; */?>"><?php /*echo $data["post_body"]; */?></textarea>
                <span class="invalid-feedback"><?php /*echo $data["post_body_err"]; */?></span>
            </div>
            <input type="submit" value="Submit" class="btn btn-secondary">
        </form>-->
    </div>
</div>
<?php require APPROOT . "/views/inc/footer.php"; ?>