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

<div class="ProjectPage-oldProjects">

    <div class="oldprojects_title">
        <p class="oldprojects_title_part1">RECLAIM</p>
        <p class="oldprojects_title_part2"><?= $title ?></p>
    </div>

    <div class="oldprojects_container" style="flex-direction: <?= $order === 'normal' ? 'row' : 'row-reverse' ?>;">

        <div class="oldprojects_container1">


            <div>
                <p><?= $headline ?></p>

            </div>

            <div>
                <p><?= $text ?></p>

            </div>
            <button><?= $button ?></button>
        </div>
        <div class="oldprojects_img">
            <img src="<?= $img ?>" alt="">
        </div>
    </div>
</div>