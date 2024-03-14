<?php

$nom = "";
$prenom = "";
$email = "";
$objet = "";
$message = "";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $erreurs = [];

    if (empty($_POST["nom"])) {
        $erreurs["nom"] = "Le nom est obligatoire !";
    } else {
        $nom = $_POST["nom"];
    }

    if (empty($_POST["prenom"])) {
        $erreurs["prenom"] = "Le prenom est obligatoire !";
    } else {
        $prenom = $_POST["prenom"];
    }

    if (empty($_POST["email"])) {
        $erreurs["email"] = "L'email est obligatoire !";
    } else {
        if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            $erreurs["email"] = "Le format de l'adresse mail est invalide (test@test.fr) !";
        } else {
            $email = $_POST["email"];
        }
    }

    if (empty($_POST["objet"])) {
        $erreurs["objet"] = "L'objet est obligatoire !";
    } else {
        $objet = $_POST["objet"];
    }

    if (empty($_POST["message"])) {
        $erreurs["message"] = "Le message est obligatoire !";
    } else {
        $message = $_POST["message"];
    }

    if (empty($erreurs)) {
        $emailClient = $email;
        $email = "contact@mateo-jean.fr";

        $content = "De: $prenom $nom \nEmail: $emailClient \nMessage: $message";
        $mailClient = "From: $email \r\n";
        mail($email, "Portfolio : ".$objet, $content, $mailClient) or die($erreurs["EnvoieMail"] = "Erreur lors de l'envoie du mail");

        // Si pas d'erreur
        if (empty($erreurs)) {
            $_SESSION['success'] = true;
            header("Location: index.php");
            exit();
        }
    }

}


?>
<!doctype html>
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
    <?php
    if (!empty($_SESSION["success"])) {
        unset($_SESSION["success"]);
        ?>
        <script type="text/javascript">window.alert("Votre message a bien été envoyé !");</script>
    <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <header class="header">
        <div class="main_container_header">
            <div class="header__logo">
                <a href="#accueil">
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
                        <a href="#accueil" >Accueil</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#presentation">Présentation</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#CV" >CV</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#projet">Projets</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#veille-techno" >Veille technologique</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#contact">Contact</a>
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
    <div id="fullpage">
        <div class="section placeNav" >
            <div class="accueil">
                <h1 data-aos="fade-up" >Matéo JEAN <br> Développeur Back-End</h1>
                <a href="#presentation"class="fleche-accueil" id="flecheScroll">
                    <i class="fa-solid fa-arrow-down fa-bounce fa-2xl" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>
        <!--    Page présentation    -->
        <div class="section placeNav"  >
            <div id="carouselExampleIndicators" class="carousel slide presentation-large">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="page-presentation">
                            <div class="presentation">
                                <h1>Présentation</h1>
                                <div class="texte">
                                    <p>Je m'appelle Matéo, j'ai 19 ans et je suis actuellement étudiant en deuxième année de BTS SIO à Besançon. Passionné par les nouvelles technologies depuis longtemps, j'aimerais devenir développeur.</p>
                                    <p>Ce portfolio a pour objectif de vous présenter mes différents projets réalisés, ainsi que mes certifications et mon CV.</p>
                                    <p>Si vous avez des questions ou si vous avez simplement besoin de renseignements, vous pouvez me contacter en cliquant <a href="index.php#contact">ici</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="page-presentation">
                            <div class="titre-passion">
                                <h1>Passions</h1>
                            </div>
                            <div class="passions">
                                <div class="sports">
                                    <h3>Sports</h3>
                                    <img src="images/ski.png" alt="Image ski">
                                    <img src="images/vtt.jpg" alt="Image Vélo">
                                </div>
                                <div class="sportsMecanique">
                                    <h3>Sports Mécaniques</h3>
                                    <img src="images/FabioQuartararo.jpg" alt="Image Moto">
                                    <img src="images/WRC-fourmaux.jpg" alt="Image WRC">
                                </div>
                            </div>
                        </div>
                    </div>

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

            <div class="presentation-small">
                <div class="page-presentation">
                    <div class="presentation">
                        <h1>Présentation</h1>
                        <div class="texte">
                            <p>Je m'appelle Matéo, j'ai 19 ans et je suis actuellement étudiant en deuxième année de BTS SIO à Besançon. Passionné par les nouvelles technologies depuis longtemps, j'aimerais devenir développeur.</p>
                            <p>Ce portfolio a pour objectif de vous présenter mes différents projets réalisés, ainsi que mes certifications et mon CV.</p>
                            <p>Si vous avez des questions ou si vous avez simplement besoin de renseignements, vous pouvez me contacter en cliquant <a href="index.php#contact">ici</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="page-passion w-75 d-flex justify-content-center align-item-center flex-column mx-auto">
                    <h1 class="text-center">Passions</h1>
                    <div class="row">
                        <div class="col col-12 col-md-6 mt-md-0 mt-3">
                            <h3 class="text-center">Sports</h3>
                            <img class="w-100" src="images/ski.png" alt="Image ski">
                            <img class="w-100" src="images/vtt.jpg" alt="Image Vélo">
                        </div>
                        <div class=" col col-12 col-md-6 mt-md-0 mt-3">
                            <h3 class="text-center">Sports Mécaniques</h3>
                            <img class="w-100" src="images/FabioQuartararo.jpg" alt="Image Moto">
                            <img class="w-100" src="images/WRC-fourmaux.jpg" alt="Image WRC">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--    Page CV    -->
        <div class="section placeNav">
            <h1 class="text-center">CV</h1>
            <div class="page-cv mx-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col col-12 col-md-6 col-xl-3 contenu-col-gauche pe-0">
                        <div class="imageCvDiv">
                            <img class="rounded imageCV" src="images/photoCV.jpg" alt="Photo CV">
                        </div>
                        <div class="coordonnees">
                            <p class="mt-4"><a href="https://maps.app.goo.gl/WhDDvcKQpuLvWBXNA" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                            </svg> Montrond le chateau</a></p>
                            <p><a href="mailto:mateojean25660@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                            </svg> mateojean25660@gmail.com</a></p>
                            <p><a href="tel:0769745610"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                            </svg> 07 69 74 56 10</a></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                            </svg> Titulaire du permis B</p>
                            <p><a href="pdf/JEAN%20Matéo%20-%20CV.pdf" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg> Télécharger mon CV</a></p>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 ps-0">
                        <div class="competenceProfessionnel">
                            <h3>Compétences</h3>
                            <div class="competence">
                                <h4 class="mt-4">Qualités</h4>
                                <ul>
                                    <li>Organisé</li>
                                    <li>Esprit d'équipe</li>
                                    <li>Travail en autonomie</li>
                                    <li>Capable de m’adapter aux différentes <br> circonstances</li>
                                </ul>
                            </div>
                            <h4 class="mt-4">Compétences informatiques </h4>
                            <ul>
                                <li>Python, PHP, HTML, CSS</li>
                                <li>MySQL, SQL Server, HFSQL</li>
                                <li>WINDEV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-5">
                        <h3>Expériences professionnelles</h3>
                        <div class="accordion accordion-flush" id="accordionCompetenceInfo">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#Cetra" aria-expanded="false" aria-controls="Cetra">
                                        CETRA Informatique
                                    </button>
                                </h2>
                                <div id="Cetra" class="accordion-collapse collapse" data-bs-parent="#accordionCompetenceInfo">
                                    <div class="accordion-body">
                                        <p class="fw-bold">Alternance année 2023 - 2024</p>
                                        <ul>
                                            <li>Création de fonctionnalité avec WINDEV</li>
                                            <li>Utilisation de base de données HFSQL</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#koredge" aria-expanded="false" aria-controls="koredge">
                                        Koregde
                                    </button>
                                </h2>
                                <div id="koredge" class="accordion-collapse collapse" data-bs-parent="#accordionCompetenceInfo">
                                    <div class="accordion-body">
                                        <p class="fw-bold">Stage  en entreprise de 4 semaines en juin 2023</p>
                                        <ul>
                                            <li>Intégration de contenu HTML, CSS avec formulaire PHP</li>
                                            <li>Intégration de contenu et mise à jour de site WordPress</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#Mmicro" aria-expanded="false" aria-controls="Mmicro">
                                        Mmicro
                                    </button>
                                </h2>
                                <div id="Mmicro" class="accordion-collapse collapse" data-bs-parent="#accordionCompetenceInfo">
                                    <div class="accordion-body">
                                        <p class="fw-bold">Stage découverte d'une semaine en Juin 2019</p>
                                        <ul>
                                            <li>Observer la maintenance d'un parc informatique</li>
                                            <li>Aider à la réparation des ordinateurs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4">Formations professionnelles</h3>
                        <div class="accordion accordion-flush" id="accordionFormationPro">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#BTS-SIO" aria-expanded="false" aria-controls="BTS-SIO">
                                        BTS SIO (Services Informatiques aux Organisations)
                                    </button>
                                </h2>
                                <div id="BTS-SIO" class="accordion-collapse collapse" data-bs-parent="#accordionFormationPro">
                                    <div class="accordion-body">
                                        <p class="fw-bold">2022 - 2024</p>
                                        <ul>
                                            <li>Option slam (Solutions Logicielles et Applications Métiers)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bac" aria-expanded="false" aria-controls="bac">
                                        Baccalauréat général
                                    </button>
                                </h2>
                                <div id="bac" class="accordion-collapse collapse" data-bs-parent="#accordionFormationPro">
                                    <div class="accordion-body">
                                        <p class="fw-bold">2022</p>
                                        <ul>
                                            <li>Spécialité mathématique et NSI (Numérique et Sciences Informatiques)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#brevet" aria-expanded="false" aria-controls="brevet">
                                        Brevet des Collèges
                                    </button>
                                </h2>
                                <div id="brevet" class="accordion-collapse collapse" data-bs-parent="#accordionFormationPro">
                                    <div class="accordion-body">
                                        <p class="fw-bold">2019</p>
                                        <ul>
                                            <li>Mention bien</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section placeNav" >
            <div class="project-test w-75 mx-auto">
                <h1 class="text-center">Projets</h1>
                <div class="row">
                    <div class="col" id="Projet-cinema">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/Projets/Projet-cinema/ProjetEnCours.png" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Projet cinéma</h5>
                                <a href="Projets.php?id=Projet-cinema" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="Statistique-caisse">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/Projets/Statistique-caisse/Statistique-caisse-CA.png" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Statistiques de caisse</h5>
                                <a href="Projets.php?id=Statistique-caisse" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="Portfolio">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/Projets/Portfolio/Portfolio-Presentation.png" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Portfolio</h5>
                                <a href="Projets.php?id=Portfolio" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="BestStudents">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/Projets/BestStudents/BestStudent-ListeEtudiants.png" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Best Students</h5>
                                <a href="Projets.php?id=BestStudents" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section placeNav" >
            <div class="veilleTechno">
                <h1>Veille technologique</h1>
                <p>En construction </p>
            </div>
        </div>
        <div class="section placeNav">
            <div class="contact">
                <h1 class="text-center mb-4">Contactez moi</h1>
                <div class="row">
                    <form class="col col-12 col-xl-8" method="post">
                        <div class="row">
                            <div class="col col-12 col-xl-6">
                                <?php
                                // Enleve le nom
                                if (!empty($erreurs["nom"])) {
                                    $nom = "";
                                } ?>
                                <label for="inputNom" class="text d-block">Nom</label>
                                <input type="text" class="w-100 px-1" id="inputNom" name="nom" value="<?= $nom?>">
                                <?php if (!empty($erreurs["nom"])) { ?>
                                    <p class="erreur"><?= $erreurs["nom"]?></p>
                                <?php } ?>
                            </div>
                            <div class="col col-12 col-xl-6">
                                <?php
                                if (!empty($erreurs["prenom"])) {
                                    $prenom = "";
                                } ?>
                                <label for="inputPrenom" class="block">Prénom</label>
                                <input type="text" class="w-100 px-1" id="inputPrenom" name="prenom" value="<?= $prenom?>">
                                <?php if (!empty($erreurs["prenom"])) { ?>
                                    <p class="erreur"><?= $erreurs["prenom"]?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        if (!empty($erreurs["email"])) {
                            $email = "";
                        } ?>
                        <label for="inputEmail" class="block mt-4">Email</label>
                        <input type="text" class="w-100 px-1" id="inputEmail" name="email" value="<?= $email?>">
                        <?php if (!empty($erreurs["email"])) { ?>
                            <p class="erreur"><?= $erreurs["email"]?></p>
                        <?php } ?>

                        <?php
                        // Enleve le nom
                        if (!empty($erreurs["objet"])) {
                            $objet = "";
                        } ?>
                        <label for="inputObjet" class="block mt-4">Objet</label>
                        <input type="text" class="w-100 px-1" id="inputObjet" name="objet" value="<?= $objet?>">
                        <?php if (!empty($erreurs["objet"])) { ?>
                            <p class="erreur"><?= $erreurs["objet"]?></p>
                        <?php } ?>

                        <?php
                        // Enleve le nom
                        if (!empty($erreurs["message"])) {
                            $message = "";
                        } ?>
                        <label for="inputMessage" class="block mt-4">Message</label>
                        <textarea type="text" class="w-100 px-1" id="inputMessage" rows="5" name="message"><?= $message?></textarea>
                        <?php if (!empty($erreurs["message"])) { ?>
                            <p class="erreur"><?= $erreurs["message"]?></p>
                        <?php } ?>

                        <div class="divbouton w-100 d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary mt-3 w-25" id="envoyer">Envoyer</button>
                        </div>
                    </form>
                    <div class="col col-12 col-xl-4 coordonnee my-5 my-xl-0">
                        <div class="row w-100">
                            <div class="col col-12 col-sm-6 col-xl-12">
                                <a href="tel:0769745610">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                                    </svg>
                                    <br>
                                    <p>07 69 74 56 10</p>
                                </a>
                            </div>
                            <div class="col col-12 col-sm-6 col-xl-12">
                                <a href="mailto:mateojean25660@gmail.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                                    </svg>
                                    <br>
                                    <p>mateojean25660@gmail.com</p>
                                </a>
                            </div>
                            <div class="col col-12 col-sm-6 col-xl-12">
                                <a href="https://github.com/mat25" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                    <p>Github</p>
                                </a>
                            </div>
                            <div class="col col-12 col-sm-6 col-xl-12">
                                <a href="https://maps.app.goo.gl/WhDDvcKQpuLvWBXNA" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                                    </svg>
                                    <br>
                                    <p>Montrond le chateau</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Script qui permet d'avoir les annimation avec le full Page  -->
    <script src="js/fullpagejs.js"></script>

    <script>
        // Sélectionnez tous les boutons d'accordéon
        const accordionButtons = document.querySelectorAll('.accordion-button');

        // Ajoutez un gestionnaire d'événement à chaque bouton
        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Fermez tous les autres accordéons sauf celui qui a été cliqué
                accordionButtons.forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.classList.add('collapsed');
                        const target = document.querySelector(otherButton.getAttribute('data-bs-target'));
                        target.classList.remove('show');
                    }
                });
            });
        });

        function openMenuMobile() {
            document.querySelector('.header__nav').classList.add('open');
        }

        function closeMenuMobile() {
            document.querySelector('.header__nav').classList.remove('open');
        }
    </script>

    <script>
        // Déclarer une variable pour suivre l'état d'initialisation de Fullpage
        var isFullPageInitialized = false;

        // Vérifie la largeur de la fenêtre lors du chargement initial de la page
        window.addEventListener('load', function() {
            checkWindowSize();
        });

        // Vérifie la largeur de la fenêtre lorsque la fenêtre est redimensionnée
        window.addEventListener('resize', function() {
            checkWindowSize();
        });

        function checkWindowSize() {
            var fleche = document.getElementById("flecheScroll");
            if (window.innerWidth < 1200) {
                fleche.style.display = "none";
                // Désactive fullpage.js si la largeur de la fenêtre est inférieure à 1200 px
                if (typeof fullpage_api !== 'undefined' && isFullPageInitialized) {
                    var accueilElement = document.querySelector('[data-anchor="accueil"]');
                    var presentationElement = document.querySelector('[data-anchor="presentation"]');
                    var cvElement = document.querySelector('[data-anchor="CV"]');
                    var projetsElement = document.querySelector('[data-anchor="projet"]');
                    var vtElement = document.querySelector('[data-anchor="veille-techno"]');
                    var contactElement = document.querySelector('[data-anchor="contact"]');
                    fullpage_api.destroy('all');
                    isFullPageInitialized = false;
                    // Ajout des ID correspondants
                    accueilElement.id = "accueil";
                    presentationElement.id = "presentation";
                    cvElement.id = "CV";
                    projetsElement.id = "projet";
                    vtElement.id = "veille-techno";
                    contactElement.id = "contact";
                }
            } else {
                // Initialise fullpage.js si la largeur de la fenêtre est supérieure à 1200 px
                fleche.style.display = "block";
                if (!isFullPageInitialized) {
                    var accueil = document.getElementById("accueil");
                    if(accueil != null){
                        accueil.removeAttribute('id');
                    }
                    var presentation = document.getElementById("presentation");
                    if(presentation != null){
                        presentation.removeAttribute('id');
                    }
                    var cv = document.getElementById("CV");
                    if(cv != null){
                        cv.removeAttribute('id');
                    }
                    var projet = document.getElementById("projet");
                    if(projet != null){
                        projet.removeAttribute('id');
                    }
                    var vt = document.getElementById("veille-techno");
                    if(vt != null){
                        vt.removeAttribute('id');
                    }
                    var contact = document.getElementById("contact");
                    if(contact != null){
                        contact.removeAttribute('id');
                    }
                    initFullPage();
                    isFullPageInitialized = true;
                }
            }
        }

        function initFullPage() {
            // Initialise fullpage.js avec vos options
            new fullpage('#fullpage',{
                // enleve l'erreur de la console
                licenseKey: 'gplv3-license',
                autoScrolling:true,
                navigation:true,
                lockAnchors: false,
                anchors: ['accueil','presentation','CV','projet','veille-techno','contact'],
                navigationTooltips: ['Accueil','Présentation','CV','Projet','Veille technologique','Contact'],
                showActiveTooltip:false,
                slidesNavigation:true,
            })
        }

        if (window.innerWidth < 1200) {
            var accueil = document.querySelector(".accueil").parentElement;
            accueil.id="accueil";

            var presentation = document.querySelector(".presentation-small").parentElement;
            presentation.id = "presentation";

            var cv = document.querySelector(".page-cv").parentElement;
            cv.id = "CV";

            var project = document.querySelector(".project-test").parentElement;
            project.id = "projet";

            var vt = document.querySelector(".veilleTechno").parentElement;
            vt.id = "veille-techno";

            var contact = document.querySelector(".contact").parentElement;
            contact.id = "contact";
        }
    </script>

</body>
</html>