<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<ul>
    <?php foreach($data["users"] as $user): ?>
        <li><?php echo $user->firstname . " " . $user->lastname; ?></li>
    <?php endforeach; ?>
</ul>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>