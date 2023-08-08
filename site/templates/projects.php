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

    <hr style=" border-top: 3px #4C6B5F solid;width:1300px">
    <section class="old_rojects">

        <!-- RECLAIM THE SOIL project -->

        <div>

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
        'img' => 'projects/Section3pic.jpg',
        'order' => 'normal' ,// this will reverse the order of containers,
        'txt_color' => '#AE73EA', //text
        'reclaim_color' =>  '#C29DE866', // 40%
        'colorbtn' =>  '#C29DE8', //buttom
        'telegramLink' =>  'https://t.me/+_rt2soX25kE2NWFk' 
    ]); ?>

        </div>


        <!-- RECLAIM LITERATURE project -->
        <div>

            <?php 
    $title = $page->Project2_title()->value(); 
    $headLine = $page->Project2_headline()->value(); 
    $description = $page->Project2_description()->value(); 
    $button = $page->Projects_buttom()->value(); 
    
    snippet('projectsPage/oldProjects' ,  [
        'title' => $title,
        'headline' =>     $headLine ,
        'description' =>     $description ,
        'button' =>     $button ,
        'img' => 'projects/Section4pic.jpg',
        'order' => 'reverse' ,// this will reverse the order of containers,
        'txt_color' => '#EBB327', //text
        'reclaim_color' =>  '#F1E1B9', // 40%
        'colorbtn' =>  '#E3B74A', //buttom
        'telegramLink' =>  'https://t.me/reclaimbookclub' ,

        'titleShift' => '-72px'
        ]); ?>

        </div>



        <!-- RECLAIM POLITICS project -->


        <div>

            <?php 
$title = $page->Project3_title()->value(); 
$headLine = $page->Project3_headline()->value(); 
$description = $page->Project3_description()->value(); 
$button = $page->Projects_buttom()->value(); 

snippet('projectsPage/oldProjects' ,  [
'title' => $title,
'headline' =>     $headLine ,
'description' =>     $description ,
'button' =>     $button ,
'img' => 'projects/Section5pic.jpg',
'order' => 'normal' ,// this will reverse the order of containers,
'txt_color' => '#F95D30', //text
'reclaim_color' =>  '#FAC8B9', // 40%
'colorbtn' =>  '#F26137', //buttom
'telegramLink' =>  'https://t.me/reclaimecofeministalliance' ,

'titleShift' => '-72px'
]); ?>

        </div>


        <!-- RECLAIM WORDS project -->


        <div>

            <?php 
$title = $page->Project4_title()->value(); 
$headLine = $page->Project4_headline()->value(); 
$description = $page->Project4_description()->value(); 
$button = $page->Projects_buttom()->value(); 

snippet('projectsPage/oldProjects' ,  [
'title' => $title,
'headline' =>     $headLine ,
'description' =>     $description ,
'button' =>     $button ,
'img' => 'projects/Section6pic.jpg',
'order' => 'reverse' ,// this will reverse the order of containers,
'txt_color' => '#447A65', //text
'reclaim_color' =>  '#CBDDD6', // 40%
'colorbtn' =>  '#4C6B5F', //buttom
'telegramLink' =>  'https://t.me/reclaimecofeministalliance' ,

'titleShift' => '-70px'
]); ?>

        </div>



        <!-- RECLAIM THE STREETS project -->


        <div>

            <?php 
$title = $page->Project5_title()->value(); 
$headLine = $page->Project5_headline()->value(); 
$description = $page->Project5_description()->value(); 
$button = $page->Projects_buttom()->value(); 

snippet('projectsPage/oldProjects' ,  [
'title' => $title,
'headline' =>     $headLine ,
'description' =>     $description ,
'button' =>     $button ,
'img' => 'projects/Section7pic.jpg',
'order' => 'normal' ,// this will reverse the order of containers,
'txt_color' => '#AE73EA', //text
'reclaim_color' =>  '#E7D8F6', // 40%
'colorbtn' =>  '#C29DE8', //buttom
'telegramLink' =>  'https://t.me/reclaimecofeministalliance' ,

'titleShift' => '-80px'
]); ?>

        </div>



        <!-- RECLAIM IT ALL project -->

        <div>

            <?php 
$title = $page->Project6_title()->value(); 
$headLine = $page->Project6_headline()->value(); 
$description = $page->Project6_description()->value(); 
$button = $page->Projects_buttom()->value(); 

snippet('projectsPage/oldProjects' ,  [
'title' => $title,
'headline' =>     $headLine ,
'description' =>     $description ,
'button' =>     $button ,
'img' => 'projects/Section8pic.JPG',
'order' => 'reverse' ,// this will reverse the order of containers,
'txt_color' => '#EBB327', //text
'reclaim_color' =>  '#F1E1B9', // 40%
'colorbtn' =>  '#E3B74A', //buttom
'telegramLink' =>  '' ,

'titleShift' => '-71px'
]); ?>

        </div>

    </section>


</body>

</html>