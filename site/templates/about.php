<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?= css(['../assets/css/index.css','../assets/css/aboutPageCss/aboutpage.css']) ?>
</head>

<body>
    <header class='header'>
        <div class='logo-div'>
            <a class='org' href="<?= $site->url() ?>">
                <img src="<?= $page->image('pagesLogo.jpg')->url() ?>" alt="Logo" class="logo-image">
            </a>
        </div>
    <nav class='menu'>
    <ul class='menu-links'>
    <?php foreach ($site->children()->listed() as $item): ?>
        <?php 
       
        $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $isActive = ($currentURL === 'http://localhost:8888/About' && $item->url() == $currentURL);
        ?>
        <li>
<a class='header-button' href="<?= $item->url() ?>" style="<?= $isActive ? 'color:white ;background-color: #4c6b5f;' : '' ?>"><?= $item->title() ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
    </header>
    
    <?= $page->text() ?>

    <div class="aboutpage_snippestcontaiener">
        <?php snippet('aboutPage/aboutPage_section1') ?>
        <?php snippet('aboutPage/aboutPage_section2') ?>

    </div>


</body>

</html>