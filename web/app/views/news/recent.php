<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
    <?php foreach($data["posts"] as $post): ?>
    <h3><?php echo $post->title ?></h3>
    <p>Author: <?php echo $post->firstname . " " . $post->lastname; ?><br>
    Created: <?php echo $post->date_posted ?><br>
    Modified: <?php echo $post->date_modified ?><br>
    Small Image: <img src="<?php echo URLROOT ?>/assets/images/news/767x500-<?php echo $post->featured_image ?>" alt="<?php echo $post->title ?>"><br>
    Large Image: <img src="<?php echo URLROOT ?>/assets/images/news/900x380-<?php echo $post->featured_image ?>" alt="<?php echo $post->title ?>"><br>

    Body: <?php echo $post->body ?><br>
    </p>
    <?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>