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
            <a href="">Imprint</a>
            <a href="">Privacy Policy</a>
        </div>

        <a style="color : <?= $color1?>;" class="foter_mail" href="mailto:reclaim@gmail.com">reclaim@gmail.com</a>
        <div class="foter_social">
            <!-- Facebook Icon -->
            <a href=" https://www.facebook.com/your_username_or_page" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/your_username" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Telegram Icon -->
            <a href="https://t.me/your_username" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>

            <!-- YouTube Icon -->
            <a href="https://youtu.be/S4mVbO1B6mg" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>

        </div>
    </div>
</footer>