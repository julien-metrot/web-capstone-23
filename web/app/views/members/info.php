<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php foreach ($data["members"] as $member): ?>
    <h3>
        <li><?php echo $member->firstname . " " . $member->lastname . ":"; ?></h3>
    <div style="width: 35%; border-bottom-style: solid">
        <h4><?php echo "Email: " . $member->email . "<br>" . "Dob: " . $member->dateofbirth . "<br>" .
                "Status: " . $member->status . "<br>" . "Job Title: " . $member->job_title . "<br>" .
                "Job Description: " . $member->job_description . "<br>" . "Job Qualification: " . $member->job_qualification;
            ?></h4>
    </div>
    </li>
<?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>