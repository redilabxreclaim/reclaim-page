<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?= css(['../assets/css/index.css','../assets/css/projectsPage/projects.css']) ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>

<body>
    <header class='header'>
        <div class='logo-div'>
            <a class='org' href="<?= $site->url() ?>">
                <h1><?= $site->title() ?></h1>
            </a>
            <a class='org' href="<?= $site->url() ?>">
                <p class='logoText1'>ecofeminist</p>
                <p class='logoText2'>alliance</p>
            </a>
            <img src="<?= $page->image('reclaimLogo.png')->url() ?>" alt="Logo" class="logo-image">
        </div>

        <nav class='menu'>
            <ul class='menu-links'>
                <?php foreach ($site->children()->listed() as $item): ?>
                <li><a class='header-button' href="<?= $item->url() ?> "><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    <h1><?= $page->title() ?></h1>
    <?= $page->text() ?>


    <section class="old_rojects">


        <?php 
    $title = $page->Project1_title()->value(); 
    $headLine = $page->Project1_headline()->value(); 
    $description = $page->Project1_description()->value(); 
    $button = $page->Projects_buttom()->value(); 
    
    snippet('projectsPage/oldProjects' ,  [
        'title' => $title,
        'headline' =>     $headLine ,
        'description' =>     $description ,
        'button' =>     $button ,
        'img' => 'projects/Section4picBookClub.jpg',
        'order' => 'normal' ,// this will reverse the order of containers,
 'txt_color' => '#AE73EA', //text
'reclaim_color' =>  '#C29DE866', // 40%
 'colorbtn' =>  '#C29DE8' //buttom
    ]); ?>

    </section>


</body>

</html>