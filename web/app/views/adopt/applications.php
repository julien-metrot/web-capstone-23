<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
        <?php foreach($data["applications"] as $applications): ?>
        <h2><?php echo $applications->firstname . " " . $applications->lastname . " ($applications->user_id)"; ?></h2>
        <p>Interested in: <?php echo $applications->name . " (" . $applications->animal_id . ")"; ?><br>
            Application status: <?php echo $applications->application_status; ?><br>
            Employer Name: <?php echo $applications->employer_name; ?><br>
            Does this applicant have children in their home?: <?php echo $applications->has_children; ?><br>
            Does this applicant currently rent or own their home?: <?php echo $applications->home_status; ?><br>
            Landlord Name: <?php echo $applications->landlord_name; ?><br>
            Landlord Phone Number: <?php echo $applications->landlord_phone; ?><br>
            Does this applicant currently have pets?: <?php echo $applications->current_pets; ?><br>
        </p>
        <?php endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>