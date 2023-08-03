<?= css('../assets/css/projectsPage/oldProjects.css') ?>





<?php
// /site/snippets/two-column-layout.php

// Default values
$title = $title ?? 'Default title';
$headline = $text ?? 'Default text';
$button = $button ?? 'Default button';
$img = $img ?? 'Default image path';
$order = $order ?? 'normal'; // normal or reversed

?>

<div class="ProjectPage-oldProjects" style=" flex-direction: <?= $order === 'normal' ? 'row' : 'row-reverse' ?>;">
    <div class="text-container">

        <div class="projectsTitle">
            <p>RECLAIM</p>
            <p><?= $title ?></p>
        </div>

        <div>
            <p><?= $text ?></p>

        </div>

        <div>
            <p><?= $text ?></p>

        </div>
        <button><?= $button ?></button>
    </div>
    <div class="img-container">
        <img src="<?= $img ?>" alt="">
    </div>
</div>