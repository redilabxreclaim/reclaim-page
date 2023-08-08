<?= css('../assets/css/aboutPageCss/aboutPage_section3.css') ?>



<section class="about_section3">


    <div class="whoweare_img_about_sec2_container">

        <?php if($image = $page->image('Section 2 Picture Who we are.png')): ?>
        <img class="whoweare_img_about_sec2" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>

    <p class="about_section2_title">

        <?= $page->section3_title() ?>

    </p>
    <article class="about_section2_text">


        <p class="about_section2_p_normal">
            <?= $page->section3_text11()->kt()->inline() ?>

        </p>

        <p class="about_section2_p_normal">
            <?= $page->section3_text2()->kt()->inline() ?>

        </p>
        <p class="about_section2_p_normal">
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