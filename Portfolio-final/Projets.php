<?php
$tabProjet = [];
$tabProjet["BestStudents"] = [
        "titre" => "Best Students",
        "annee" => "2022",
        "description" => "BestStudents est un projet crée au cours de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
        "images" => [],
        "publie" => false,
        "logoLanguage" => ["html","css","php","mysql"]
];
$tabProjet["Portfolio"] = [
    "titre" => "Portfolio",
    "description" => "BestStudents est un projet crée au cours de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => [],
    "publie" => "https://mateo-jean.fr/",
    "logoLanguage" => ["html","css","php","javascript","bootstrap"]
];
$tabProjet["Projet-cinema"] = [
    "titre" => "Projet cinéma",
    "description" => "BestStudents est un projet crée au cours de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => [],
    "publie" => false,
    "logoLanguage" => ["html","css","php","javascript","bootstrap","mysql","symfony"]
];
$tabProjet["Statistique-caisse"] = [
    "titre" => "Statistique caisse",
    "description" => "BestStudents est un projet crée au cours de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => [],
    "publie" => false,
    "logoLanguage" => ["html","css","php","javascript","bootstrap","mysql","symfony"]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <title>Matéo JEAN</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<header class="header">
    <div class="main_container_header">
        <div class="header__logo">
            <a href="index.php#accueil">
                <svg width="80" height="46" viewBox="0 0 90 71" fill="ffffff" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="10" width="35" height="52" fill="#ffffff"></rect><path d="M0 0V70.338H89.521V0H0ZM19.184 53.481L12.79 47.085L19.184 40.691L25.578 34.2971C25.578 34.2971 21.681 30.4 19.184 27.903C16.687 25.406 12.79 21.509 12.79 21.509L15.987 18.3115L19.184 15.114L28.7755 24.7055L38.367 34.2971L28.7755 43.889L19.184 53.481Z" fill="#171717"></path><rect class="blinkit" x="45" y="44" width="29" height="8" fill="#ffffff"></rect></svg>
            </a>
        </div>
        <nav class="header__nav">
            <div class="header__nav__close" onclick="closeMenuMobile()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="header__nav__menu" onclick="closeMenuMobile()">
                <div class="header__nav__menu__link">
                    <a href="index.php#accueil">Accueil</a>
                </div>
                <div class="header__nav__menu__link">
                    <a href="index.php#presentation">Présentation</a>
                </div>
                <div class="header__nav__menu__link">
                    <a href="index.php#CV">CV</a>
                </div>
                <div class="header__nav__menu__link">
                    <a href="index.php#projet">Projets</a>
                </div>
                <div class="header__nav__menu__link">
                    <a href="index.php#veille-techno">Veille technologique</a>
                </div>
                <div class="header__nav__menu__link">
                    <a href="index.php#contact">Contact</a>
                </div>

            </div>
        </nav>
        <div class="header__burger" onclick="openMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
    </div>
</header>

<div class="fleche-gauche">
    <a href="index.php#projet">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
    </svg>
    </a>
</div>
<div class="details-projet d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <h1>Titre du projet</h1>
            <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deserunt earum est hic modi mollitia nisi perferendis quod unde voluptatibus.</p>
        </div>
        <div class="col">
            <p>Immage du projet</p>
        </div>
    </div>
</div>

<script>
    function openMenuMobile() {
        document.querySelector('.header__nav').classList.add('open');
    }

    function closeMenuMobile() {
        document.querySelector('.header__nav').classList.remove('open');
    }
</script>

</body>
</html>