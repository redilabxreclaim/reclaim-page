<?= css('../assets/css/aboutPageCss/aboutPage_section2.css') ?>



<section class="about_section2">


    <div class="whoweare_img_about_sec2_container">

        <?php if($image = $page->image('reclaim-team.jpg')): ?>
        <img class="whoweare_img_about_sec2" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>

    <p class="about_section2_title">

        <?= $page->section2_title() ?>

    </p>
    <article class="about_section2_text">


        <p class="about_section2_p_normal">
            <?= $page->section2_text11()->kt()->inline() ?>

        </p>

        <p class="about_section2_p_normal">
            <?= $page->section2_text2()->kt()->inline() ?>

        </p>
        <p class="about_section2_p_normal">
            <?= $page->section2_text3()->kt()->inline() ?>

        </p>
        <p class="about_section2_p_normal">
            <?= $page->section2_text4()->kt()->inline() ?>

        </p>
        <p class="about_section2_p_normal">
            <?= $page->section2_text5()->kt()->inline() ?>

        </p>



    </article>

</section>