<?= css('../assets/css/aboutPageCss/aboutPage_section3.css') ?>



<section class="about_section3">


    <div class="whoweare_img_about_sec3_container">

        <?php if($image = $page->image('Section3What.svg')): ?>
        <img class="img_about_sec32" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <?php if($image = $page->image('Section3Picture.JPG')): ?>
        <img class="img_about_sec3" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>

    <p class="about_section3_title">

        <?= $page->section3_title() ?>

    </p>
    <article class="about_section3_text">


        <p class="about_section3_p_normal">
            <?= $page->section3_text11()->kt()->inline() ?>

        </p>

        <p class="about_section3_p_normal">
            <?= $page->section3_text2()->kt()->inline() ?>

        </p>
        <p class="about_section3_p_normal">
            <?= $page->section3_text3()->kt()->inline() ?>

        </p>
        <div class="about_section3_list">
            <?= $page->section3_text4()->kirbytext() ?>

        </div>
        <p class="about_section3_txt5">
            <?= $page->section3_text5()->kt()->inline() ?>

        </p>



    </article>

</section>