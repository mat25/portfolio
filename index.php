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
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
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
        mail($email, "Portfolio : " . $objet, $content, $mailClient) or die($erreurs["EnvoieMail"] = "Erreur lors de l'envoie du mail");

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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio de Matéo JEAN — Développeur Back-End. Projets, compétences et contact.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="stylesheet" href="css/style.css">
    <title>Matéo JEAN</title>
</head>

<body>
    <?php
    if (!empty($_SESSION["success"])) {
        unset($_SESSION["success"]);
        ?>
        <script type="text/javascript">window.alert("Votre message a bien été envoyé !");</script>
    <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <header class="header">
        <div class="main_container_header">
            <div class="header__logo">
                <a href="#accueil">
                    <img src="favicon.svg" alt="Logo" style="height: 44px; width: 44px;">
                </a>
            </div>
            <nav class="header__nav">
                <div class="header__nav__close" onclick="closeMenuMobile()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="header__nav__menu" onclick="closeMenuMobile()">
                    <div class="header__nav__menu__link">
                        <a href="#accueil">Accueil</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#presentation">Présentation</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#CV">CV</a>
                    </div>
                    <div class="header__nav__menu__link">
                        <a href="#projet">Projets</a>
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

    <!-- ===================== ACCUEIL ===================== -->
    <section id="accueil" class="section-hero">
        <div class="accueil">
            <h1>Matéo JEAN</h1>
            <p class="subtitle">Développeur Back-End</p>
            <a href="#presentation" class="fleche-accueil">
                <i class="fa-solid fa-chevron-down fa-lg"></i>
            </a>
        </div>
    </section>

    <!-- ===================== PRÉSENTATION ===================== -->
    <section id="presentation" class="page-section">
        <div class="page-presentation">
            <div class="presentation">
                <h2 class="section-heading">Présentation</h2>
                <div class="texte">
                    <p>Je m'appelle Matéo, je suis actuellement en alternance en Master MAALSI
                        (Manager en Architecture et Applications Logicielles des SI) au CESI de Dijon.
                        Passionné par les nouvelles technologies depuis longtemps, je souhaite devenir
                        développeur.</p>
                    <p>Ce portfolio a pour objectif de vous présenter mes différents projets réalisés, ainsi que mes
                        certifications et mon CV.</p>
                    <p>Si vous avez des questions ou si vous avez simplement besoin de renseignements, vous pouvez me
                        contacter en cliquant <a href="#contact">ici</a>.</p>
                </div>
            </div>
        </div>

        <div class="page-passions">
            <h2 class="section-heading">Passions</h2>
            <div class="passions">
                <div class="passion-group">
                    <h3>Sports</h3>
                    <div class="passion-images">
                        <img src="images/ski.png" alt="Image ski">
                        <img src="images/vtt.jpg" alt="Image Vélo">
                    </div>
                </div>
                <div class="passion-group">
                    <h3>Sports Mécaniques</h3>
                    <div class="passion-images">
                        <img src="images/FabioQuartararo.jpg" alt="Image Moto">
                        <img src="images/WRC-fourmaux.jpg" alt="Image WRC">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CV ===================== -->
    <section id="CV" class="page-section">
        <h2 class="section-heading">CV</h2>
        <div class="page-cv">
            <div class="row justify-content-center align-items-start">
                <div class="col col-12 col-md-6 col-xl-3 contenu-col-gauche">
                    <div class="imageCvDiv">
                        <img class="rounded imageCV" src="images/photoCV.jpg" alt="Photo CV">
                    </div>
                    <div class="coordonnees">
                        <p class="mt-4"><a href="https://maps.app.goo.gl/c3nzkdqF8PGzAX9Y7" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg> Besançon</a></p>
                        <p><a href="mailto:mateojean25660@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                    <path
                                        d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                                </svg> mateojean25660@gmail.com</a></p>
                        <p><a href="tel:0769745610"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5" />
                                </svg> 07 69 74 56 10</a></p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                            </svg> Titulaire du permis B</p>
                        <p><a href="pdf/JEAN%20Matéo%20-%20CV.pdf" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                </svg> Télécharger mon CV</a></p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-4">
                    <div class="competenceProfessionnel">
                        <h3>Compétences</h3>
                        <div class="competence">
                            <h4 class="mt-4">Qualités</h4>
                            <ul>
                                <li>Organisé</li>
                                <li>Esprit d'équipe</li>
                                <li>Travail en autonomie</li>
                                <li>Capable de m'adapter aux différentes <br> circonstances</li>
                            </ul>
                        </div>
                        <h4 class="mt-4">Compétences informatiques </h4>
                        <ul>
                            <li>Python, PHP, HTML, CSS</li>
                            <li>MySQL, SQL Server, HFSQL</li>
                            <li>WINDEV</li>
                        </ul>
                        <h3>Certifications</h3>
                        <ul>
                            <li>
                                <a href="pdf/Attestation-pix-Matéo-JEAN.pdf" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-download" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg> PIX </a>
                            </li>
                            <li>
                                <a href="pdf/Attestation-CNIL-Matéo-Jean.pdf" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-download" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg> CNIL </a>
                            </li>
                            <li>
                                <a href="pdf/Attestation-anssi-Matéo-Jean.pdf" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-download" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg> ANSSI </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-12 col-xl-5">
                    <h3>Expériences professionnelles</h3>
                    <div class="accordion accordion-flush" id="accordionCompetenceInfo">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#Cetra" aria-expanded="false"
                                    aria-controls="Cetra">
                                    CETRA Informatique
                                </button>
                            </h2>
                            <div id="Cetra" class="accordion-collapse collapse"
                                data-bs-parent="#accordionCompetenceInfo">
                                <div class="accordion-body">
                                    <p class="fw-bold">Alternance depuis 2023</p>
                                    <ul>
                                        <li>Ajout et correction de fonctionnalités en WinDev sur l'ERP EURAGRO</li>
                                        <li>Utilisation de base de données HFSQL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#koredge" aria-expanded="false"
                                    aria-controls="koredge">
                                    Koredge
                                </button>
                            </h2>
                            <div id="koredge" class="accordion-collapse collapse"
                                data-bs-parent="#accordionCompetenceInfo">
                                <div class="accordion-body">
                                    <p class="fw-bold">Stage en entreprise de 4 semaines en juin 2023</p>
                                    <ul>
                                        <li>Intégration de contenu HTML, CSS avec formulaire PHP</li>
                                        <li>Intégration de contenu et mise à jour de site WordPress</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#Mmicro" aria-expanded="false"
                                    aria-controls="Mmicro">
                                    Mmicro
                                </button>
                            </h2>
                            <div id="Mmicro" class="accordion-collapse collapse"
                                data-bs-parent="#accordionCompetenceInfo">
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
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mastere-maalsi" aria-expanded="false"
                                    aria-controls="mastere-maalsi">
                                    Mastère Manager en Architecture et Applications Logicielles des SI
                                </button>
                            </h2>
                            <div id="mastere-maalsi" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFormationPro">
                                <div class="accordion-body">
                                    <p class="fw-bold">2025 - 2027 (alternance)</p>
                                    <ul>
                                        <li>Architecture logicielle et conception de systèmes d'information</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#bachelor-cda" aria-expanded="false"
                                    aria-controls="bachelor-cda">
                                    Bachelor Concepteur Développeur d'Applications
                                </button>
                            </h2>
                            <div id="bachelor-cda" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFormationPro">
                                <div class="accordion-body">
                                    <p class="fw-bold">2024 - 2025 (alternance)</p>
                                    <ul>
                                        <li>3ème année — Conception et développement d'applications métiers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#BTS-SIO" aria-expanded="false"
                                    aria-controls="BTS-SIO">
                                    BTS SIO (Services Informatiques aux Organisations)
                                </button>
                            </h2>
                            <div id="BTS-SIO" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFormationPro">
                                <div class="accordion-body">
                                    <p class="fw-bold">2022 - 2024</p>
                                    <ul>
                                        <li>Option SLAM (Solutions Logicielles et Applications Métiers)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#bac" aria-expanded="false"
                                    aria-controls="bac">
                                    Baccalauréat général
                                </button>
                            </h2>
                            <div id="bac" class="accordion-collapse collapse" data-bs-parent="#accordionFormationPro">
                                <div class="accordion-body">
                                    <p class="fw-bold">2022</p>
                                    <ul>
                                        <li>Spécialités mathématiques et NSI (Numérique et Sciences Informatiques)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PROJETS ===================== -->
    <section id="projet" class="page-section">
        <div class="project-test">
            <h2 class="section-heading">Projets</h2>
            <div class="row">
                <div class="col" id="Projet-cinema">
                    <div class="card my-3 mx-auto" style="width: 18rem;">
                        <img src="images/Projets/Projet-cinema/accueil.png" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Projet cinéma</h5>
                            <a href="Projets.php?id=Projet-cinema" class="btn btn-secondary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col" id="Projet-bibliotheque">
                    <div class="card my-3 mx-auto" style="width: 18rem;">
                        <img src="images/Projets/Projet-bibliotheque/creer-adherent.png" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Projet bibliothèque</h5>
                            <a href="Projets.php?id=Projet-bibliotheque" class="btn btn-secondary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col" id="Statistique-caisse">
                    <div class="card my-3 mx-auto" style="width: 18rem;">
                        <img src="images/Projets/Statistique-caisse/Statistique-caisse-CA.png" class="card-img-top"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Statistiques de caisse</h5>
                            <a href="Projets.php?id=Statistique-caisse" class="btn btn-secondary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col" id="Suivi-anydesk">
                    <div class="card my-3 mx-auto" style="width: 18rem;">
                        <img src="images/Projets/Suivi-anydesk/Statistique-anydesk-historique-des-connexions.png"
                            class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Suivi des sessions AnyDesk</h5>
                            <a href="Projets.php?id=Suivi-anydesk" class="btn btn-secondary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col" id="BestStudents">
                    <div class="card my-3 mx-auto" style="width: 18rem;">
                        <img src="images/Projets/BestStudents/BestStudent-ListeEtudiants.png" class="card-img-top"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Best Students</h5>
                            <a href="Projets.php?id=BestStudents" class="btn btn-secondary">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CONTACT ===================== -->
    <section id="contact" class="page-section">
        <div class="contact">
            <h2 class="section-heading text-center">Contactez moi</h2>
            <div class="row">
                <form class="col col-12 col-xl-8" method="post">
                    <div class="row">
                        <div class="col col-12 col-xl-6">
                            <?php
                            if (!empty($erreurs["nom"])) {
                                $nom = "";
                            } ?>
                            <label for="inputNom" class="text d-block">Nom</label>
                            <input type="text" class="w-100 px-1" id="inputNom" name="nom" value="<?= $nom ?>">
                            <?php if (!empty($erreurs["nom"])) { ?>
                                <p class="erreur"><?= $erreurs["nom"] ?></p>
                            <?php } ?>
                        </div>
                        <div class="col col-12 col-xl-6">
                            <?php
                            if (!empty($erreurs["prenom"])) {
                                $prenom = "";
                            } ?>
                            <label for="inputPrenom" class="block">Prénom</label>
                            <input type="text" class="w-100 px-1" id="inputPrenom" name="prenom" value="<?= $prenom ?>">
                            <?php if (!empty($erreurs["prenom"])) { ?>
                                <p class="erreur"><?= $erreurs["prenom"] ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    if (!empty($erreurs["email"])) {
                        $email = "";
                    } ?>
                    <label for="inputEmail" class="block mt-4">Email</label>
                    <input type="text" class="w-100 px-1" id="inputEmail" name="email" value="<?= $email ?>">
                    <?php if (!empty($erreurs["email"])) { ?>
                        <p class="erreur"><?= $erreurs["email"] ?></p>
                    <?php } ?>

                    <?php
                    if (!empty($erreurs["objet"])) {
                        $objet = "";
                    } ?>
                    <label for="inputObjet" class="block mt-4">Objet</label>
                    <input type="text" class="w-100 px-1" id="inputObjet" name="objet" value="<?= $objet ?>">
                    <?php if (!empty($erreurs["objet"])) { ?>
                        <p class="erreur"><?= $erreurs["objet"] ?></p>
                    <?php } ?>

                    <?php
                    if (!empty($erreurs["message"])) {
                        $message = "";
                    } ?>
                    <label for="inputMessage" class="block mt-4">Message</label>
                    <textarea type="text" class="w-100 px-1" id="inputMessage" rows="5"
                        name="message"><?= $message ?></textarea>
                    <?php if (!empty($erreurs["message"])) { ?>
                        <p class="erreur"><?= $erreurs["message"] ?></p>
                    <?php } ?>

                    <div class="divbouton w-100 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary mt-3" id="envoyer">Envoyer</button>
                    </div>
                </form>
                <div class="col col-12 col-xl-4 coordonnee my-5 my-xl-0">
                    <div class="contact-info-list">
                        <a href="tel:0769745610" class="contact-info-btn">
                            <i class="fa-solid fa-phone fa-fw fa-lg"></i>
                            <span>07 69 74 56 10</span>
                        </a>
                        <a href="mailto:mateojean25660@gmail.com" class="contact-info-btn">
                            <i class="fa-solid fa-envelope fa-fw fa-lg"></i>
                            <span>mateojean25660@gmail.com</span>
                        </a>
                        <a href="https://github.com/mat25" target="_blank" class="contact-info-btn">
                            <i class="fa-brands fa-github fa-fw fa-lg"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://maps.app.goo.gl/c3nzkdqF8PGzAX9Y7" target="_blank" class="contact-info-btn">
                            <i class="fa-solid fa-location-dot fa-fw fa-lg"></i>
                            <span>Besançon</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Accordion behavior
        const accordionButtons = document.querySelectorAll('.accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
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

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Scroll animations (Intersection Observer)
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.page-section').forEach(section => {
            observer.observe(section);
        });
    </script>

</body>

</html>