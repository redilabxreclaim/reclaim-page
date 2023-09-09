<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Barlow:wght@400;700&family=Overpass:wght@100&family=Roboto:wght@400;700&family=Rubik:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <?= css('../assets/css/index.css') ?>
</head>

<body>
    <header class='header'>
        <div class='logo-div'>
            <a class='orgHome' href="<?= $site->url() ?>">
                <h1><?= $site->title() ?></h1>
            </a>
            <a class='orgHome' href="<?= $site->url() ?>">
                <p>Ecofeminist Alliance</p>
            </a>
        </div>
        <nav class='menu'>
            <ul class='menu-links'>
                <?php foreach ($site->children()->listed() as $item): ?>
                <li>
                    <a class='header-button' href="<?= $item->url() ?>" id="<?= $item->id() ?>">
                    <?= $item->title() ?>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </nav>

    </header>
    <!-- <h1>trial</h1> -->
    <div class="main-container">
        <?php snippet('HomePage_section1') ?>
        <?php snippet('HomePage_section2') ?>
        <?php snippet('HomePage_section3') ?>
        <?php snippet('HomePage_section4') ?>
        <?php snippet('HomePage_section5') ?>
    </div>
    
    
    <?php snippet('footer' ,  [
        'color1' => '#C29DE8',
        'color2' => '#FFFFFF',]) ?>
    
    


<?= js('../assets/js/index.js') ?>
</body>

</html>