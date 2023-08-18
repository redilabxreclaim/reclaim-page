<?= css('../assets/css/aboutPageCss/aboutPage_section4.css') ?>



<section class="about_section4">

    <div class="about_sec4_title">
        <p>THEY HELP US CREATE...</p>
    </div>
    <div class="about_sec4_logos">
        <?php if($image = $page->image('Copy of elephantes_logo.jpg')): ?>
        <img class="img_about_sec4" src="<?= $image->url() ?>" alt="">
        <?php endif ?>


        <?php if($image = $page->image('Copy of institut-francais-berlin-logo.svg')): ?>
        <img class="img_about_sec4" src="<?= $image->url() ?>" alt="">
        <?php endif ?>

        <?php if($image = $page->image('Copy of PositiveLab_logo.png')): ?>
        <img class="img_about_sec4" src="<?= $image->url() ?>" alt="">
        <?php endif ?>

        <?php if($image = $page->image('Copy of Rrote Beete_logo.png')): ?>
        <img class="img_about_sec4" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>
    <div class="about_sec4_redi_container">
        <div class="redilogo_text">

            <?php if($image = $page->image('Redi Logo Horizontal_nobackground.png')): ?>
            <img class="img_about_rediimg" src="<?= $image->url() ?>" alt="">
            <?php endif ?>

            <p class="img_about_reditxt">This website was developed in partnership with ReDi School of Digital
                Integration, a German
                non-profit
                tech school providing access to free digital education to Newcomers and Locals. 

            </p>
        </div>
        <div>
            <p>Meet the ReDI LAB project team on LinkedIn</p>
            <div>
                <div>
                    <p>Agile Team</p>
                    <a href="www.linkedin.com/in/aya-lihoum-31809a231/">Aya Lihoum</a>

                    <a href="www.linkedin.com/in/maria-rachmanova-23715323a/">Maria Rachmanova</a>
                    <p>Development Team</p>

                    <a href="www.linkedin.com/in/ahmed-abdelwadod">Ahmed Abdalla</a>

                    <a href="www.linkedin.com/in/parviz-khodavandegar/">Parviz Khodavandegar</a>

                    <a href="www.linkedin.com/in/salazar-emiliano/">Emiliano Salazar</a>


                </div>

                <div>

                    <p>Cloud Team</p>
                    <a href="www.linkedin.com/in/deepa-maria/">Deepa Maria</a>

                    <a href="www.linkedin.com/in/mahanthi-kanakamedala-59719b71/">Mahanthi Kanakamedala</a>

                    <p>UX/UI Team</p>

                    <a href="www.linkedin.com/in/harinie-k-367a7a247">Harinie Kannangara</a>


                    <a href="www.linkedin.com/in/yuliia-tripatkhi-b38a561b7/">Yuliia Tripatkhi</a>


                </div>
            </div>
        </div>
    </div>

</section>