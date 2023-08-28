<?= css('../assets/css/HomePage_section1.css') ?>

<div class="section-one">
        <h1 class="main-title"><?= $page->title() ?> <span class="bold-text"><?= $page->title2() ?></span></h1>
        <img class="reclaim-logo" src="<?= $page->image('reclaim-logo.png')->url() ?>" alt="Reclaim Logo">
        <div class="paragraph">
            <p><?= $page->text() ?></p>    
        </div>
        <a href="about#about-section-one">
            <button class="learn-more">LEARN MORE</button>
        ></a>
</div>  