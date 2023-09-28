<?= css('../assets/css/aboutPageCss/aboutPage_section4.css') ?>



<section class="about_section4">

    <div class="about_section4_container">

        <div class="about_sec4_title">
            <h3 class="about_sec4_title">THEY HELP US CREATE...</h3>
        </div>
        <div class="about_sec4_logos">
            <?php if($image = $page->image('Copy of elephantes_logo.jpg')): ?>
            <img class="img_about_sec41" src="<?= $image->url() ?>" alt="">
            <?php endif ?>


            <?php if($image = $page->image('Copy of institut-francais-berlin-logo.svg')): ?>
            <img class="img_about_sec42" src="<?= $image->url() ?>" alt="">
            <?php endif ?>

            <?php if($image = $page->image('Copy of PositiveLab_logo.png')): ?>
            <img class="img_about_sec43" src="<?= $image->url() ?>" alt="">
            <?php endif ?>

            <?php if($image = $page->image('Copy of Rrote Beete_logo.png')): ?>
            <img class="img_about_sec44" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div>
        <div class="about_sec4_redi_container">
            <div class="redilogo_text">

                <?php if($image = $page->image('Redi Logo Horizontal_nobackground.png')): ?>
                <img class="img_about_rediimg" src="<?= $image->url() ?>" alt="">
                <?php endif ?>

                <p class="img_about_reditxt">This website has been developed as part of the <b>ReDI Labs</b> educational program at 
                    <a target="_blank" href="https://www.redi-school.org/" class="img_about_reditxt2"><b>ReDi School of
                        Digital
                        Integration</b></a>. ReDI School is a non-profit tech school with the mission to accelerate the social
                        and professional integration of forced migrants and other underserved communities of locals and
                        newcomers through free digital education and career support. 

                </p>
            </div>
            <div class="about4_rediteam_container">
                <p class="about_sec4_meetteam">Meet the ReDI LAB project team on LinkedIn</p>
                <div class="about_se4_links_container">
                    <div class="about_se4_links_cl">
                        <p>Agile Team</p>
                        <a target="_blank" href="https://www.linkedin.com/in/aya-lihoum-31809a231/">Aya Lihoum</a>

                        <a target="_blank" href="https://www.linkedin.com/in/maria-rachmanova-23715323a/">Maria
                            Rachmanova</a>
                        <p>Development Team</p>

                        <a target="_blank" href="https://www.linkedin.com/in/ahmed-abdelwadod">Ahmed Abdalla</a>

                        <a target="_blank" href="https://www.linkedin.com/in/parviz-khodavandegar/">Parviz
                            Khodavandegar</a>

                        <a target="_blank" href="https://www.linkedin.com/in/salazar-emiliano/">Emiliano Salazar</a>


                    </div>

                    <div class="about_se4_links_cl">

                        <p>Cloud Team</p>
                        <a target="_blank" href="https://www.linkedin.com/in/deepa-maria/">Deepa Maria</a>

                        <a target="_blank" href="https://www.linkedin.com/in/mahanthi-kanakamedala-59719b71/">Mahanthi
                            Kanakamedala</a>

                        <p>UX/UI Team</p>

                        <a target="_blank" href="https://www.linkedin.com/in/harinie-k-367a7a247">Harinie Kannangara</a>


                        <a target="_blank" href="https://www.linkedin.com/in/yuliia-tripatkhi-b38a561b7/">Yuliia
                            Tripatkhi</a>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>