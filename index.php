<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio et CV en ligne - Tiffany Flore">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./emot_logo/logoPortfolio.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="lignes">
            <div class="l1"></div>
            <div class="l2"></div>
        </div>
        <div id="content-burger">
            <div id="burger-menu"></div>
        </div>
        <nav id="menu">
            <ul>
                <figure>
                    <a href="./index.php"><img src="./emot_logo/logoPortfolio.png" alt=""></a>
                </figure>
                <li class="navbar">
                    <a href="#about">À PROPOS</a>
                </li>
                <li class="navbar">
                    <a href="#skills">COMPÉTENCES</a>
                </li>
                <li class="navbar">
                    <a href="#journey">PARCOURS</a>
                </li>
                <li class="navbar">
                    <a href="#projet">PORTFOLIO</a>
                </li>
                <li class="navbar">
                    <a href="#contact">CONTACT</a>
                </li>
            </ul>
        </nav>
        <div class="container-first row-limit-size">
            <div class="container-presentation">
                <p class="intro">
                    <span>Bonjour, </span>
                    <span>je </span>
                    <span>m'appelle </span>
                    <span>Tiffany</span>
                </p>
                <p class="introWeb">
                    et je suis, stagiaire en développement web et applications mobiles
                </p>
                <p class="introStage">
                    Je suis à la recherche d'un <strong>stage</strong> à <strong>Lyon</strong> et ses alentours à partir
                    d' <strong>Otocbre 2022</strong>
                </p>
            </div>
        </div>
        <ul class="media">
            <li class="bulle">
                <a href="https://www.linkedin.com/in/tiffany-flore" target="_blank">
                    <img src="./emot_logo/linkedin.png" alt="">
                </a>
            </li>
            <li class="bulle">
                <a href="https://github.com/KayzPart" target="_blank">
                    <img src="./emot_logo/github.png" alt="">
                </a>
            </li>
            <li class="bulle">
                <a href="#contact" id="buttonContact">
                    <img src="./emot_logo/contact.png" alt="">
                </a>
            </li>
            <li class="bulle">
                <a href="./ressources/Tiffany Flore CV.pdf" target="_blank">
                    <img src="./emot_logo/cv.png" alt="">
                </a>
            </li>
        </ul>
    </header>
    <div id="form-contact">
        <form action="" method="POST" id="form">
            <?php require_once './contact.php' ?>
            <label for="firstname">Votre prénom :</label>
            <input type="text" name="firstname" id="firstname">

            <label for="lastname">Votre nom :</label>
            <input type="text" name="lastname" id="lastname">

            <label for="email">Votre adresse mail :</label>
            <input type="email" id="email" name="email">

            <label for="mytextarea"></label>
            <textarea name="mytextarea" id="mytextarea" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" id="submit" value="Envoyer votre message">
            <div id="form_close-btn"></div>
        </form>
    </div>
    <section class="img1" id="about">
        <div class="box box1 row-limit-size">
            <h2>À PROPOS DE MOI</h2>
            <div class="scene">
                <div class="cards">
                    <figure class="card_face card_front ">
                        <img class="card_face_img" src="./ressources/rosko.png" alt="Bimoji">
                    </figure>
                    <figure class="card_face card_back">
                        <img class="card_face_img" src="./ressources/tiff.png" alt="">
                    </figure>
                </div>
            </div>

            <div class="text">
                <p>
                    Jeune stagiaire en <strong>développement web</strong>
                    et <strong>applications mobiles</strong>, je recherche un stage à partir d'Octobre 2022.
                </p>
                <p>
                    Ce stage me permettra de découvrir le métier de <strong>développeur</strong>, d'appréhender
                    les
                    différents styles : <strong>Front-End</strong>, <strong>Back-End</strong>, pour ensuite
                    devenir
                    <strong>Full-Stack</strong>.
                </p>
                <p>
                    Je suis actuellement en formation qualifiante, au centre de formation <a href="https://www.onlineformapro.com/" target="_blank">ONLINE FORMAPRO</a> sur
                    <strong>Ambérieu-en-Bugey</strong> (01). Mon objectif est d'atteindre est de décrocher mon
                    diplôme, dans cette formation qualifiante afin de trouver une agence avec qui, je pourrais
                    grandir, collaborer, et fructifier les projets et ambitions communes.
                </p>
                <p>
                    Vous verrez dans mes compétences les différentes matières, technologies, et environement de
                    travail que j'ai pu étudier jusqu'à présent.
                    Vous verrez qu'avec les connaissances acquises à ce jour, je peux déjà vous présenter un
                    petit
                    bout de moi à travers mon travail, que je vous présente dans mon Portfolio.
                </p>
                <p>
                    Je suis ambitieuse et autonome de nature, je suis une personne dynamique et déterminée.
                    Je mets un point d'honneur à satisfaire les missions qui me sont données.
                    C'est avec conviction et motivation que j'atteindrais mes obejctifs !
                </p>
                <p>
                    Vous souhaitez poursuivre l'aventure avec moi ?
                </p>
                <p>
                    Restez connectés !
                </p>
                <p>
                    J'agrémenterais mon Portfolio au fil des projets réalisés ♥
                </p>
                <p>
                    Longue vie et prospérité à tous et à toutes ! ♥
                </p>
            </div>
            <div class="container-btns">
                <button id="clickHobbies" class="learn">Découvrez mes hobbies</button>
            </div>
        </div>
    </section>
    <section id="showHobbies">
        <h2>Mes Hobbies</h2>
        <div id="close_btn_showHobbies"></div>
        <div class="content s--inactive">
            <div class="content_inner">
                <div class="el">
                    <div class="elem_overflow">
                        <div class="elem_inner">
                            <div class="elem_bg">
                                <img src="./emot_logo/feather.jpg" alt="feather">
                            </div>
                            <div class="elem_preview-cont">
                                <h2 class="elem_heading">L'écriture</h2>
                            </div>
                            <div class="elem_content">
                                <div class="elem_text">description</div>
                                <div class="elem_close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elem_index">
                        <div class="elem_index-back">
                            <img src="./emot_logo/emot-plume.png" alt="plume">
                        </div>
                    </div>
                </div>
                <div class="el">
                    <div class="elem_overflow">
                        <div class="elem_inner">
                            <div class="elem_bg">
                                <img src="./emot_logo/kickboxer.jpg" alt="kickboxer">
                            </div>
                            <div class="elem_preview-cont">
                                <h2 class="elem_heading">La boxe</h2>
                            </div>
                            <div class="elem_content">
                                <div class="elem_text">description</div>
                                <div class="elem_close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elem_index">
                        <div class="elem_index-back">
                            <img src="./emot_logo/boxing.png" alt="boxing">
                        </div>
                    </div>
                </div>
                
                <div class="el">
                    <div class="elem_overflow">
                        <div class="elem_inner">
                            <div class="elem_bg">
                                <img src="./emot_logo/danse.jpg" alt="danse">
                            </div>
                            <div class="elem_preview-cont">
                                <h2 class="elem_heading">La danse</h2>
                            </div>
                            <div class="elem_content">
                                <div class="elem_text">description</div>
                                <div class="elem_close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elem_index">
                        <div class="elem_index-back">
                            <img src="./emot_logo/woman-danser.png" alt="danser">
                        </div>
                    </div>
                </div>
                
                <div class="el">
                    <div class="elem_overflow">
                        <div class="elem_inner">
                            <div class="elem_bg">
                                <img src="./emot_logo/horse.jpg" alt="horse">
                            </div>
                            <div class="elem_preview-cont">
                                <h2 class="elem_heading">L'équitation</h2>
                            </div>
                            <div class="elem_content">
                                <div class="elem_text">description</div>
                                <div class="elem_close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elem_index">
                        <div class="elem_index-back">
                            <img src="./emot_logo/horse-emot.png" alt="horse">
                        </div>
                    </div>
                </div>
                <div class="el">
                    <div class="elem_overflow">
                        <div class="elem_inner">
                            <div class="elem_bg">
                                <img src="./emot_logo/music.jpg" alt="music">
                            </div>
                            <div class="elem_preview-cont">
                                <h2 class="elem_heading">La musique</h2>
                            </div>
                            <div class="elem_content">
                                <div class="elem_text">description</div>
                                <div class="elem_close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elem_index">
                        <div class="elem_index-back">
                            <img src="./emot_logo/emot-music.png" alt="music">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#showHobbies" aria-label="Close"></button>
        </div>
    </section>


    <section class="img2" id="skills">
        <div class="box box2 row-limit-size">
            <h2>Formation Qualifiante - Onlineformapro</h2>
            <p class="date">03.01.2022 au 28.11.2022</p>
            <div class="text">
                <figure>
                    <img src="./ressources//logoForma.png" alt="logo_language_program">
                </figure>
                <p>
                    Dans cette catégorie, je vous présente, les différents languages informatiques, logiciels,
                    frameworks, et support numériques que j'ai pu découvrir lors de mes formations chez <a href="https://www.onlineformapro.com/" target="_blank">ONLINE FORMAPRO</a>.
                    <br>
                    J'ai commencé par m'initier aux languages basiques, tel que <strong>HTML</strong>,
                    <strong>CSS</strong>, pour ensuite m'exercer aux autres languages indispensables au
                    développement.
                    En voici quelques exemples :
                    <br>
                    <strong>Javascript</strong>, <strong>Sass</strong>, <strong>Wordpress</strong>,
                    <strong>PHP</strong>,
                    <strong>PhpMyAdmin (MySQL)</strong>,
                    <strong>Postman</strong>,
                    <strong>VirtualBox</strong>,
                    <strong>Bootstrap</strong>, <strong>Jquery</strong>,
                    <strong>Python</strong>, <strong>Figma</strong>, <strong>PhotoShop</strong>,
                    <strong>Illustrator</strong>, <strong>Canva</strong>, <strong>Whimsical</strong> ...
                </p>
            </div>
            <button class="learn">
                <a href="https://github.com/KayzPart" target="_blank">Rendez-vous sur Github.</a>
            </button>
        </div>
    </section>

    <section class="img3">
        <div class="box box3 row-limit-size">
            <h2>Environement de travail et Soft Skills</h2>
            <div class="text">
                <div>
                    <figure>
                        <img src="./emot_logo/environemment.png" alt="logo_responsive">
                    </figure>
                    <p>
                        <span>Systèmes d'exploitation : </span>
                        <strong>Windows 10</strong> et <strong> Linux</strong>.
                    </p>
                </div>
                <div>
                    <figure>
                        <img src="./emot_logo/code.png" alt="logo_code">
                    </figure>
                    <p>
                        <span>Environement de développement :</span>
                        <strong>Visual Studio Code</strong>, <strong>Github</strong>.
                    </p>
                </div>
                <div>
                    <figure>
                        <img src="./emot_logo/quality.png" alt="logo_arbre">
                    </figure>
                    <p>
                        <span>Soft Skills : </span>
                        Rigoureuse, organisée, Capacité d'adaptation, force de proposition, gestion du stress.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="img4" id="journey">
        <div class="box box4 row-limit-size">
            <h2>MON PARCOURS</h2>
            <div class="box-timeline text">
                <div class="ligne"></div>
                <div class="rond r1" data-anim="1">
                    <figure>
                        <img src="./emot_logo/portable.png" alt="pc-portable">
                    </figure>
                </div>
                <div class="rond r2" data-anim="2">
                    <figure>
                        <img src="./emot_logo/industrie.png" alt="industrie">
                    </figure>
                </div>
                <div class="rond r3" data-anim="3">
                    <figure>
                        <img src="./emot_logo/shop.png" alt="commerce">
                    </figure>
                </div>
                <div class="rond r4" data-anim="4">
                    <figure>
                        <img src="./emot_logo/restaurant.png" alt="restaurant">
                    </figure>
                </div>
                <div class="rond r5" data-anim="5">
                    <figure>
                        <img src="./emot_logo/livres.png" alt="livres">
                    </figure>
                </div>
                <div class="boxT b1" data-anim="1">
                    <h3>Formation qualifiante</h3>
                    <p class="date">03.01.2022 au 28.11.2022</p>
                    <p>
                        Du 3 Janvier au 28 Novembre 2022, vous me trouverez au centre de formation
                        Onlineformapro
                        sur Ambérien-en-Bugey,
                        afin de me préparer au métier de développeur web et applications mobiles.
                    </p>
                </div>
                <div class="boxT b2" data-anim="2">
                    <h3>Travail en industrie</h3>
                    <p class="date">De Juin 2017 à Décembre 2020</p>
                    <p>
                        Durant plusieurs années, suite à mon expérience dans le commerce, j'ai travailler dans
                        différentes structures
                        industrielles, notamment dans la production automobile, pharmaceutique, et cosmétiques.
                    </p>
                </div>
                <div class="boxT b3" data-anim="3">
                    <h3>Employée commerciale</h3>
                    <p class="date">De Janvier 2016 à Mai 2017</p>
                    <p>
                        L'accueil et la réponse aux besoins clientèles, tout en gérant l'attente que la demande
                        client peut engendrer
                        afin d'y répondre le plus rapidement possible, ont étés mes principales missions durant
                        ma
                        période commerciale.
                    </p>
                </div>
                <div class="boxT b4" data-anim="4">
                    <h3>Employée de restauration</h3>
                    <p class="date">De Septembre 2013 à Décembre 2015</p>
                    <p>
                        Dans la restauration collective en tant qu'employée polyvalente : Encaissement, service,
                        entretien ...
                    </p>
                </div>
                <div class="boxT b5" data-anim="5">
                    <h3>Bac Pro Commerce</h3>
                    <p class="date">De Septembre 2009 à Janvier 2010</p>
                    <p>
                        Niveau 2nd
                        <br>
                        Bac Pro Commerce
                        <br>
                        Apprentissage
                    </p>
                </div>
            </div>
            <div class="container-btns">
                <button class="learn" id="learncontact">ME CONTACTER</button>
                <a class="learn" href="./ressources/Tiffany Flore CV.pdf" target="_blank">TÉLÉCHARGER MON CV</a>
            </div>
        </div>
    </section>
    <!-- Portfolio Site Vitrine -->
    <section id="projet">
        <div class="stage boxS">
            <div class="container-portfolio ">
                <div class="carousel-ring">
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Jeu du nombre</h2>
                            <span>Jeu JS</span>
                        </div>
                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="Jeudunombre" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Ristorante</h2>
                            <span>Site vitrine</span>
                        </div>

                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>BOOTSTAP</li>
                            </ul>
                            <button>
                                <a href="RistoranteDellaStella" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Departement</h2>
                            <span>Site vitrine</span>
                        </div>
                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="ProjetDepartement" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Onlineformapro</h2>
                            <span>Reproduction</span>
                        </div>
                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="ReproductionOnline" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Memory</h2>
                            <span>Tuto formation préqualifiante</span>
                        </div>

                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="MemoryGameTutoMilan" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Beauty Elegance</h2>
                            <span>Site Onepage (en duo)</span>
                        </div>
                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="MemoryGameTutoMilan" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-carousel">
                        <div class="textC">
                            <h2>Bibliothèque de Lyon</h2>
                            <span>Site vitrine (en duo)</span>
                        </div>

                        <div class="overlay-carousel">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JAVASCRIPT</li>
                            </ul>
                            <button>
                                <a href="MemoryGameTutoMilan" target="_blank">Découvrir</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="logo-footer">
            <figure>
                <a href="./index.php"><img src="./emot_logo/logoPortfolio.png" alt=""></a>
            </figure>
        </div>
        <div id="form-contact-footer">
            <form action="" method="POST">
                <?php require_once './contact.php' ?>
                <label for="firstname2">Votre prénom :</label>
                <input type="text" name="firstname" id="firstname2" placeholder="Prénom">

                <label for="lastname2">Votre nom :</label>
                <input type="text" name="lastname" id="lastname2" placeholder="Nom">

                <label for="email2">Votre adresse mail :</label>
                <input type="email" id="email2" name="email" placeholder="Adresse e-mail">

                <label for="mytextarea2"></label>
                <textarea name="mytextarea" id="mytextarea2" cols="30" rows="10" placeholder="Votre message"></textarea>
                <input type="submit" name="submit" id="submit2" value="Envoyer votre message">
            </form>
        </div>

        <div class="copyright" id="contact">
            <p>
                © Copyright 2022 - <span>Tiffany FLORE</span> - Tous droits réservés.
            </p>
            <div class="contact-simply">
                <a href="mailto:tiffany.flore.codeur@gmail.com">
                    <img src="./emot_logo/signe-darroba.png" alt="logo-envoie-mail">
                </a>
                <a href="tel:+33778793785">
                    <img src="./emot_logo/appel-telephonique (1).png" alt="logo-passer-appel">
                </a>
            </div>
        </div>
        <div class="footer-end">
            <p>
                <button id="mntleg">Mentions légales</button>
                |
                <button id="politiqueConf">Politiques de confidentialité</button>
            </p>
        </div>
        <div id="mentions-légales">
            <div id="mention_close-btn"></div>
            <div class="text-mnt">
                <h6>1 - Édition du site</h6>
                <p>
                    En vertu de <a href="https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000801164/#LEGIARTI000042038977" target="_blank">l'article 6 de la loi n° 2004-575 du 21 juin 2004</a> pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet <a href="https://tiffanyf.promo-122.codeur.online/Portfolio/">Portfolio</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:

                    Propriétaire du site : ONLINE FORMAPRO - Contact : +33458005257 - Adresse : 244B Rue du Point du Jour, 01000 Saint-Denis-lès-Bourg.

                    Identification de l'entreprise : ONLINE FORMAPRO au capital social de € - SIREN : - RCS ou RM : - Adresse postale : 37 Avenue de la libération, 01500 Ambérieu-en-Bugey.

                    Directeur de la publication : Flore Tiffany - Contact : 07 XX XX XX XX.

                    Hébergeur : Autre
                </p>
                <h6>2 - Propriété intellectuelle et contrefaçons.</h6>
                <p>
                    Tiffany Flore est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.

                    Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Tiffany Flore.

                    Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.

                    NB => Certains logos provienne du site <a href="https://www.flaticon.com/fr/packs/font-awesome" target="_blank">Font-awesome</a>, les graphiste de ces derniers sont mentionner ci-dessous.
                <ul>
                    <li>Freepik</li>
                    <li>Eucalyp</li>
                    <li>Darius</li>
                    <li>Dan</li>
                    <li>popo2021</li>
                    <li>Bartama</li>
                    <li>Prosymbols</li>
                </ul>
                </p>

                <h6>3 - Limitations de responsabilité.</h6>
                <p>
                    Tiffany Flore ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site <a href="https://tiffanyf.promo-122.codeur.online/Portfolio/">Portfolio</a>.

                    Tiffany Flore décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur <a href="https://tiffanyf.promo-122.codeur.online/Portfolio/">Portfolio</a>.

                    Tiffany Flore s’engage à ne récolter aucunes données sur se site.

                    Des espaces interactifs (espace contact) sont à la disposition des utilisateurs.
                </p>
            </div>
        </div>
        <div id="politique">
            <div id="poli_close-btn"></div>
            <p>Aucune données n'est stockées.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>

</html>