<?= css('../assets/css/HomePage_section2.css') ?>




<section class="section2">

    <div class="video-background">
        <video autoplay loop muted>
            <source src="<?= url('home/media/Festival.mp4') ?>" type="video/mp4">
        </video>
    </div>
    <div class="content">        
        <p class="p1"> <?= $page->section2_text1() ?>
        </p>
        <p class="p2"> <?= $page-> section2_text2()?></p>
        <p class="p3"><?= $page-> section2_text3()?><span><?= $page-> section2_text4()?></span></p>    
        
    </div>
   
    <a href="<?= url('home/ecofeminist-afternoon-by-reclaim.pdf') ?>" target="_blank" id="link-btn">
    <button class="learnBtn"><?= $page->section2_text5() ?></button>
</a>

    
   
    
    
</section>

<!-- test -->