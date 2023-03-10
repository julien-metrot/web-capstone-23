<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
        <?php foreach($data["applications"] as $applications): ?>
        <h2><?php echo $applications->firstname . " " . $applications->lastname; ?></h2>
        <p>Interested in: <?php echo $applications->name . " (" . $applications->animal_id . ")"; ?>
            Application status: <?php echo $applications->application_status; ?>
            Employer Name: <?php echo $applications->employer_name; ?>
            Does this applicant have children in their home?: <?php echo $applications->has_children; ?>
            Does this applicant currently rent or own their home?: <?php echo $applications->home_status; ?>
            Landlord Name: <?php echo $applications->landlord_name; ?>
            Landlord Phone Number: <?php echo $applications->landlord_phone; ?>
            Does this applicant currently have pets?: <?php echo $applications->current_pets; ?>
        </p>
        <?php endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>