<?= css('../assets/css/projectsPage/oldProjects.css') ?>





<?php
// /site/snippets/two-column-layout.php

// Default values
$title = $title ?? 'Default title';
$headline = $headline ?? 'Default text';
$description = $description ?? 'Default text';
$img = $img ?? 'Default image path';
$order = $order ?? 'normal'; 
$txt_color = $txt_color ?? 'green';//text
$reclaim_color = $reclaim_color ?? 'red'; // 40%
$colorbtn = $colorbtn ?? 'gray'; //buttom
$titleShift = $titleShift ?? '-80px'; //buttom

?>

<div class="ProjectPage-oldProjects">

    <div class="oldprojects_title">
        <p class="oldprojects_title_part1" style="color : <?= $reclaim_color?>;">RECLAIM
        </p>
        <p class="oldprojects_title_part2" style="color : <?= $txt_color?>; left:  <?= $titleShift?>"><?= $title ?></p>
    </div>

    <div class="oldprojects_container" style="flex-direction: <?= $order === 'normal' ? 'row' : 'row-reverse' ?>;">

        <div class="oldprojects_text_btn">


            <div class="oldprojects_headline">
                <p style="color : <?= $txt_color?>;"><?= $headline ?></p>

            </div>

            <div class=" oldprojects_dis">
                <p><?= $description ?></p>

            </div>

            <button style="border-color : <?= $colorbtn?>; " class="oldprojects_btn" data-hover-text="JOIN OUR"
                data-hover-text2="JOIN THE GROUP" onmouseover="this.style.backgroundColor='<?= $colorbtn?>';"
                onmouseout="this.style.backgroundColor='white';">
                JOIN OUR
            </button>
        </div>


        <div class=" oldprojects_img">
            <img src="<?= $img ?>" alt="">
        </div>
    </div>
</div>