<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php foreach ($data["members"] as $member): ?>
    <h3><?php echo $member->firstname . " " . $member->lastname . ":"; ?></h3>
    <div style="width: 35%; border-bottom-style: solid">
        <p>      User id: <?php echo $member->user_id ?><br>
                 Avatar: <img src="<?php echo URLROOT ?>/images/members/<?php echo $member->avatar ?>" alt="<?php echo $member->firstname . " " . $member->lastname ?>"><br>
                 Email: <?php echo $member->email ?><br>
                 LinkedIn: <a href="<?php echo $member->linkedin ?>">LinkedIn</a><br>
                 Github: <a href="<?php echo $member->github ?>">Github</a><br>
                 Dob: <?php echo $member->dateofbirth ?><br>
                 Admin: <?php echo $member->admin ?><br>
                 Status: <?php echo $member->status ?><br>
                 Job Title: <?php echo $member->job_title ?><br>
                 Job Description: <?php echo $member->job_description ?><br>
                 Job Qualification: <?php echo $member->job_qualification; ?>
        </p>
    </div>
<?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>