<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?= css('../assets/css/index.css') ?>
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
                    <a class='header-button' href="<?= $item->url() ?>" style="<?= $isActive ? 'color:white ;background-color: #4c6b5f;' : '' ?>"><?= $item->title() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>      

<div class="contact-box">
    <!-- Option 2: Obfuscated Email Address -->
    <p>Contact us by email: <a href="mailto:&#114;&#101;&#99;&#108;&#97;&#105;&#109;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#114;&#101;&#99;&#108;&#97;&#105;&#109;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></p>

    <!-- Option 4: Clear Instructions -->
    <p>Feel free to send us an email at the provided address for inquiries and assistance.</p>
</div>

<?= $page->text() ?>
</body>
</html>
