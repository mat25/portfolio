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
                        <a href="#veille-techno">Veille technologique</a>
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
        <div class="section" >
            <div class="accueil">
                <h1>Matéo JEAN <br> Développeur Back-End</h1>
                <a href="#presentation"class="fleche-accueil">
                    <i class="fa-solid fa-arrow-down fa-bounce fa-2xl" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>
        <!--    Page présentation    -->
        <div class="section" >
            <div id="carouselExampleIndicators" class="carousel slide">
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
                                    <p>Je m'appelle Matéo j'ai 19 ans et je suis actuellement étudiant en 2eme années BTS SIO à Besançon. Passionné, par les nouvelles technologies depuis longtemps j'aimerais bien devenir développeur.</p>
                                    <p>Ce portfolio a pour but de vous présenter mes différents projets que j'ai pu réaliser, mais également mes certifications ou encore mon CV.</p>
                                    <p>Si vous avez une question ou si vous avez simplement besoin d'un renseignement, vous pouvez me contacter en cliquant ici.</p>
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
                                    <h3>Sports Mécanique</h3>
                                    <img src="images/FabioQuartararo.jpg" alt="Image ski">
                                    <img src="images/DriftKenBlock.jpg" alt="Image Vélo">
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
        </div>
        <!--    Page CV    -->
        <div class="section">
            <h1 class="text-center">CV</h1>
            <div class="page-cv mx-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 contenu-col-gauche pe-0">
                        <img class="w-50 rounded " src="images/photoCV.jpg" alt="photo de profil">
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
                    <div class="col-4 ps-0">
                        <div class="competenceProfessionnel">
                            <h3>Compétences</h3>
                            <div class="competence">
                                <h4 class="mt-4">Compétences</h4>
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
                    <div class="col-5">
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
        <div class="section">
            <div class="project w-75 mx-auto">
                <h1 class="text-center">Projets</h1>
                <div class="row">
                    <div class="col">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/ski.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Stats caisse</h5>
                                <a href="Projets.php?id=Statistique-caisse" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/ski.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Projet cinéma</h5>
                                <a href="Projets.php?id=Projet-cinema" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/ski.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Portfolio</h5>
                                <a href="Projets.php?id=Portfolio" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card my-3 mx-auto" style="width: 18rem;">
                            <img src="images/ski.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Best Students</h5>
                                <a href="Projets.php?id=BestStudents" class="btn btn-secondary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section">
            <h1>Veille technologique</h1>
            <p>En construction </p>
        </div>
        <div class="section">
            <div class="contact">
                <h1 class="text-center mb-4">Contactez moi</h1>
                <div class="row">
                    <form class="col col-8">
                        <div class="row">
                            <div class="col">
                                <label for="inputNom" class="form-label text">Nom</label>
                                <input type="text" class="form-control" id="inputNom">
                            </div>
                            <div class="col">
                                <label for="inputPrenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="inputPrenom">
                            </div>
                        </div>
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputEmail">

                        <label for="inputObjet" class="form-label">Objet</label>
                        <input type="text" class="form-control" id="inputObjet">

                        <label for="inputMessage" class="form-label">Message</label>
                        <textarea type="text" class="form-control" id="inputMessage" rows="5"></textarea>
                    </form>
                    <div class="col col-4 coordonnee">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                            </svg>
                            <br>
                            <p>07 69 74 56 10</p>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                            </svg>
                            <br>
                            <p>mateojean25660@gmail.com</p>
                        </a>
                        <a href="">
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
            if (window.innerWidth < 1200) {
                // Désactive fullpage.js si la largeur de la fenêtre est inférieure à 1200 px
                if (typeof fullpage_api !== 'undefined' && isFullPageInitialized) {
                    fullpage_api.destroy('all');
                    isFullPageInitialized = false;
                }
            } else {
                // Initialise fullpage.js si la largeur de la fenêtre est supérieure à 1200 px
                if (!isFullPageInitialized) {
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
    </script>

</body>
</html>