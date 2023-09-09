<?= css('../assets/css/footer.css') ?>


<?php
// /site/snippets/two-column-layout.php

// Default values
$color1 = $color1 ?? '#FFFFFF';
$color2 = $color2 ?? '#C29DE8';


?>

<footer class="foter" style="background : <?= $color2?>;">
    <div class="foter_container">

        <div class="foter_data">
            <a target="_blank"
                href="https://docs.google.com/document/d/1ht-6EK2OEwUEt1aBITTiYzk6k7MUtw0CMiNYknhd7Mo/edit?usp=drive_link">Imprint</a>
            <a href="">Privacy Policy</a>
        </div>

        <a style="color : <?= $color1?>;" class="foter_mail"
            href="mailto:reclaim@gmail.com">contact@reclaim-ecofeministalliance.org</a>
        <div class="foter_social">
            <!-- Facebook Icon -->
            <a href="https://www.facebook.com/people/Reclaim-Ecofeminist-Alliance/100091492013872/" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/reclaim.ecofeminist/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Telegram Icon -->
            <a href="https://t.me/reclaimecofeministalliance" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>

            <!-- YouTube Icon -->
            <a href="https://youtu.be/S4mVbO1B6mg" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>

        </div>
    </div>
</footer>