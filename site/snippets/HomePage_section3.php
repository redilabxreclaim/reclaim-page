<?= css('../assets/css/HomePage_section3.css') ?>

<div class="section-three">
        <h2 class="our-projects">Our Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Witches </br> Garden</h3>
                <img class="img_projects" src="<?= $page->image('witches_garden_projects.jpg')->url() ?>" alt="Witches Garden">
                <button class="btn_project">Reclaim the soil</button>
            </div>
            <div class="project">
                <h3>Book </br> Circle</h3>
                <img class="img_projects" src="<?= $page->image('book_club_projects.jpg')->url() ?>" alt="Witches Garden">
                <button class="btn_project">Reclaim literature</button>
            </div>
            <div class="project">
                <h3>Talking </br> Circles</h3>
                <img class="img_projects" src="<?= $page->image('debate_projects.jpg')->url() ?>" alt="Witches Garden">
                <button class="btn_project">Reclaim Politics</button>
            </div>
        </div>
        <a class="projects_link" href="">See all projects</a>
</div>  

<?= css('../assets/js/HomePage_section3.js') ?>
