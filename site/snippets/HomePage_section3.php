<?= css('../assets/css/HomePage_section3.css') ?>

<section class="section3">
    <div class="section-three">
        <h2 class="our-projects">Our Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Witches </br> Garden</h3>
                <img class="img_projects" src="<?= $page->image('witches_garden_projects.jpg')->url() ?>"
                    alt="Witches Garden">
                <a href="projects#reclaim-the-soil">
                    <button class="btn_project">Reclaim the soil</button>
                </a>
            </div>
            <div class="project">
                <h3>Book </br> Circle</h3>
                <img class="img_projects" src="<?= $page->image('book_club_projects.jpg')->url() ?>"
                    alt="Witches Garden">
                <a href="projects#reclaim-literature">
                    <button class="btn_project">Reclaim literature</button>
                </a>
            </div>
            <div class="project">
                <h3>Talking </br> Circles</h3>
                <img class="img_projects" src="<?= $page->image('debate_projects.jpg')->url() ?>" alt="Witches Garden">
                <a href="projects#reclaim-politics">
                    <button class="btn_project">Reclaim Politics</button>
                </a>
            </div>
        </div>
        <a class="projects_link" href="projects">See all projects</a>
    </div>
</section>


<?= css('../assets/js/HomePage_section3.js') ?>