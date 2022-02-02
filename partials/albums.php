<?php
include __DIR__ . '/../server/db.php';
?>

<main>
    <div class="row">
    <?php foreach ($albums as $album) { ?>
        <div class="col-2">
            <img src="<?= $album["poster"] ?>" alt="">
            <h1><?= $album["title"] ?></h1>
            <p><?= $album["author"] ?></p>
            <p><?= $album["year"] ?></p>
        </div>
    <?php } ?>
    </div>
</main>
