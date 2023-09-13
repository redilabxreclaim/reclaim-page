<?= css('../assets/css/aboutPageCss/aboutPage_section1.css') ?>


<section class="about_section1" id="about-section-one">

    <div class="rectangle_about_sec1">
    </div>
    
    <?php if($image = $page->image('EllipseAboutSection1.png')): ?>
    <img class="elop_img_about_sec1" src="<?= $image->url() ?>" alt="">
    <?php endif ?>

    



    <h3 class="about_sec1_title">
        <?= $page->section1_title() ?>
    </h3>
    <p class="about_sec1_p1">
        <?= $page->section1_text1()->kt()->inline() ?>
    </p>

</section>