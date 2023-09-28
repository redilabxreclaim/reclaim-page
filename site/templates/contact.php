<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?= css('../assets/css/index.css') ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        /* Apply Barlow Condensed font to the entire page */
        body {
            font-family: 'Barlow Condensed', sans-serif;
                    }

        /* Styling for the contact box */
        .contact-box {
            background-color: #C29DE8;
            padding: 20px;
            border-radius: 10px;
            margin: 40px 400px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .contact-box a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
                   }
    </style>

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
        $isActive = ($currentURL === 'http://localhost:8888/contact' && $item->url() == $currentURL);
        ?>
                <li>
                    <a class='header-button' href="<?= $item->url() ?>"
                        style="<?= $isActive ? 'color:white ;background-color: #4c6b5f;' : '' ?>"><?= $item->title() ?></a>
                </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    <div class="contact-box">
        <p>Feel free to send us an email at the provided address for inquiries and assistance.</p>
        <p>Contact us by email: <a href="mailto:contact@reclaim-ecofeministalliance.org">contact@reclaim-ecofeministalliance.org</a></p>
    </div>
    <?= $page->text() ?>
    <?php snippet('footer') ?>
    
    <?= js('../assets/js/index.js') ?>

</body>

</html>

