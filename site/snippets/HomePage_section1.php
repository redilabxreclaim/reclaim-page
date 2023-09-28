<?= css('../assets/css/HomePage_section1.css') ?>

<div class="home-section-one_container">
    <div class="home-section-one">

        <h1 class="main-title"><?= $page->title() ?> <span class="bold-text"><?= $page->title2() ?></span></h1>
        <img class="home-reclaim-logo" src="<?= $page->image('reclaim-logo.png')->url() ?>" alt="Reclaim Logo">
        <div class="Home-page-sec1-paragraph">
            <p><?= $page->text() ?></p>
        </div>
        <a href="about#about-section-one" class="Home-page-sec1-learn-more-a">
            <button class="Home-page-sec1-learn-more">LEARN MORE</button>
        </a>
    </div>
</div>