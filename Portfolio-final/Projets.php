<?php
$tabProjet = [];
$tabProjet["BestStudents"] = [
        "titre" => "Best Students",
        "annee" => "2022",
        "description" => "BestStudents est un projet crée au cours de ma première année de BTS. <br> Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
        "images" => ["BestStudent-ListeEtudiants.png","BestStudent-AjoutEtudiant.png","BestStudent-Contact.png","BestStudent-DetailEtudiant.png"],
        "publie" => false,
        "logoLanguage" => ["html5","css3","php","mysql"]
];
$tabProjet["Portfolio"] = [
    "titre" => "Portfolio",
    "annee" => "2023-2024",
    "description" => "Mon portfolio est un projet crée au cours de ma deuxieme année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => ["Portfolio-Presentation.png","Portfolio-Passions.png","Portfolio-Contact.png"],
    "publie" => "https://mateo-jean.fr/",
    "logoLanguage" => ["html5","css3","php","javascript","bootstrap"]
];
$tabProjet["Projet-cinema"] = [
    "titre" => "Projet cinéma",
    "annee" => "2023-2024",
    "description" => "BestStudents est un projet crée au cours de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => ["ProjetEnCours.png"],
    "publie" => false,
    "logoLanguage" => ["html5","css3","php","bootstrap","mysql","symfony"]
];
$tabProjet["Statistique-caisse"] = [
    "titre" => "Statistique caisse",
    "annee" => "2023-2024",
    "description" => "Lors de ma deuxieme année de BTS-SIO, j'ai réaliser un projets de statistique de caisse. <br> Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "images" => ["ProjetEnCours.png"],
    "publie" => false,
    "logoLanguage" => ["windev","hfsql"]
];

if (!empty($_GET["id"])) {
    // Le parametre existe
    $id=$_GET["id"];

    // test si le parametre est bien une clé du tableau
    $trouver = false;
    foreach ($tabProjet as $cle => $projet) {
        if ($cle == $id) {
            $trouver = true;
        }
    }
    if (!$trouver) {
        $erreur = "L'URL n'est pas valide !";
    }
} else {
    // Le paramettre n'existe pas ou ets vide
    $erreur = "L'URL n'est pas valide !";
}
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
    <a href="index.php#<?= $id?>" class="flecheSmallEcran">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
    </svg>
    </a>
    <a href="index.php#projet" class="flecheBigEcran">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
        </svg>
    </a>
</div>
<div class="details-projet d-flex justify-content-center align-items-center">
    <?php
    if (!empty($erreur)) { ?>
        <h1><?=$erreur ?></h1>
    <?php } else { ?>
    <div class="row">
        <!-- titre -->
        <h1 class="text-center mb-4"><?= $tabProjet[$id]["titre"]?></h1>
        <div class="col col-12 col-xl-5 order-1 order-xl-0 d-flex flex-column flex justify-content-center colonneDivCarrousel">

            <!-- Date -->
            <h4 class="mb-3">Projets réaliser en <?= $tabProjet[$id]["annee"]?></h4>

            <!-- Description -->
            <p class="pDetailsProjets"><?= $tabProjet[$id]["description"]?></p>

            <!-- Projets publier-->
            <?php
            if ($tabProjet[$id]["publie"] != false) { ?>
                <a class="LienProjets" href="<?=$tabProjet[$id]["publie"]?>">Lien du projets</a>
            <?php } else { ?>
                <h5>Projets non publier</h5>
            <?php } ?>

            <!-- Logo langage utilisé -->
            <div class="row">
                <h4 class="text-center mt-4 mb-3">Technologie utilisé :</h4>
                <?php
                foreach ($tabProjet[$id]["logoLanguage"] as $image) {?>
                    <div class="col d-flex justify-content-center">
                        <img class="logoLangage" src="images/<?=$image?>.png" alt="">
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="col col-12 col-xl-7 order-0 order-xl-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="recapImage carousel-indicators">
                    <?php
                    $compteur = 0;
                    foreach ($tabProjet[$id]["images"] as $image) { ?>
                        <img class="PetiteImage w-25 h-25 active" src="images/Projets/<?= $id?>/<?= $image?>" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $compteur?>" aria-current="true" aria-label="Slide <?= $compteur+1?>" alt="">
                    <?php
                        $compteur += 1;
                    } ?>
                </div>
                <div class="carousel-inner">
                    <?php
                    $premiereImage = true;
                    foreach ($tabProjet[$id]["images"] as $image) {
                        if ($premiereImage) {
                            $active = "active";
                            $premiereImage = false;
                        } else {
                            $active = "";
                        }
                        ?>
                        <div class="carousel-item <?= $active?>">
                            <div class="test w-75 mx-auto ">
                                <img src="images/Projets/<?= $id?>/<?= $image?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    <?php } ?>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php } ?>
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