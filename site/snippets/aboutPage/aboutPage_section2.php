<?= css('../assets/css/aboutPageCss/aboutPage_section2.css') ?>



<section class="about_section2">

    <p class="about_section2_title">

        <?= $page->section2_title() ?>

    </p>
    <article class="about_section2_text">


        <p class="about_section2_p_normal">
            <?= $page->section2_text_part1() ?>

        </p>
        <p class="about_section2_p_normal">
            <?= $page->section2_text_part2() ?>
            <span class="about_section2_p_bold">
                <?= $page->section2_text_part3() ?>

            </span>
            <?= $page->section2_text_part4() ?>


        </p>

        <p class="about_section2_p_normal">
            <?= $page->section2_text_part5() ?>

            <span class="about_section2_p_bold">
                <?= $page->section2_text_part6() ?>

            </span>
            <?= $page->section2_text_part7() ?>

        </p>

        <p class="about_section2_p_normal">
            <?= $page->section2_text_part8() ?>

            <span class="about_section2_p_bold">
                <?= $page->section2_text_part9() ?>

            </span>

        </p>


        <p class="about_section2_p_normal" id="learn-more">
            <?= $page->section2_text_part10() ?>

            <span class="about_section2_p_bold">
                <?= $page->section2_text_part11() ?>

            </span>
            <?= $page->section2_text_part12() ?>

        </p>

    </article>

</section>