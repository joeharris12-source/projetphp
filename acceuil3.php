<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="Bienvennue.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-e1lU4ZbF3wZnu8bSRXKGvHKLb9AOnVXwyDQc2FkgzAPxZ9fGEiAMwkEl3A/g9Cc" crossorigin="anonymous">
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    session_start();
    include("connection.php");
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = "Invité";
    }
    ?>
    <div class="entete">
        <a href="bienvenu.html"><img src="logoiai.jpg" alt="Logo de l'école" class="school-logo"></a>
        <p class="titre">IAI-TOGO</p>
        <div class="header-buttons">
            <a class="boutton2" href="#apropos">&Agrave; propos</a>
            <a class="boutton2" href="#admission">Admission</a>
            <a class="boutton2" href="#information">Informations</a>
            <a class="boutton" href="consulter.php" color="#f9f990">Consulter candidature</a>
            <a class="boutton" href="bienvenu.html">Retour &agrave; l'accueil</a>
        </div>
    </div>
    <center>
    
        <div class="image-container">
        <p class="paragraphe1">
    Bonjour <a class="a1" href="logout.php" class="username-link"><?php echo $username; ?></a>! Vous êtes sur le site d'inscription d'IAI Togo
</p>

            <img class="photo" src="iai-1920.jpg" alt="Votre Image">
            <div class="text-overlay">
                <p class="superposition">Bienvenue sur le site d'inscription de l'Institut Africain d'Informatique du
                    Togo (IAI-Togo)
                </p>
            </div>
            <hr>
            <div class="tab">
                <table>
                    <tr>
                        <td>
                            <div class="tab_contient1">
                                <p class="titre2" id="apropos">&Agrave; PROPOS</p>
                                <hr color="darkslategray"><br>
                                <p>L’institut Africain d’Informatique, Représentation du Togo (IAI-TOGO) est une
                                    représentation de l’IAI qui a été créé le 29 janvier 1971 à Fort Lamy (actuel
                                    Ndjaména) en
                                    république du TCHAD. Son siège est à Libreville au Gabon. <br> C’est un
                                    établissement d’enseignement
                                    supérieur en informatique. L’accord d’établissement entre l’IAI et la république
                                    Togolaise a
                                    été signé le 12 mai 2006 à Lomé.</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <div class="tab_contient">
                                <p class="titre2" id="admission">ADMISSION</p>
                                <hr color="darkslategray"><br>
                                <p>
                                    Notre INSTITUT INTER ETAT en informatique est ouverte à tout le monde.
                                    Nous croyons que la diversité de nos étudiants et nos apprenants est l'une de nos
                                    forces
                                    et nous sommes impatients de vous compter parmi nos apprenant pour vous
                                    aider à réussir dans votre parcours académique. <br>
                                    La réalisation de votre projet d’études commence ici :
                                <ol>
                                    <div class="liste">
                                        <li>
                                            Trouvez
                                            votre programme</li>
                                        <li>Préparez
                                            votre dossier</li>
                                    </div>

                                    <div class="liste">
                                        <li>Déposez
                                            votre demande</li>

                                        <li>Passez
                                            le test écrit</li>
                                    </div>

                                    <div class="liste">
                                        <li>Consultez
                                            des résultats</li>
                                        <li>Inscription
                                            définitive</li>
                                    </div>
                                </ol>
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div> <br><br>
                <table class="tab2">
                    <tr>
                        <td>
                            <div class="tab_contient">
                                <p id="information" class="titre2">INFORMATIONS CONCERNANT LE CONCOURS</p>
                                <hr color="darkslategray">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="tab_contient">
                                <p>Voici un appercu d&eacute;taill&eacute; des &eacute;l&eacute;ments essentiels
                                    &agrave;
                                    connaitre pour participer au concours:</p>
                            </div>
                            <div class="div3">
                                <div>
                                    <ul>
                                        <li>Avoir un BAC II dattant d'au maximum 2 ans</li>
                                        <li>Une demande manuscrite ecrite au Representant Résident de l'IAI-Togo;</li>
                                        <li>Une copie légalisée de l'acte de naissance;</li>
                                        <li>Une copie légalisée ou un duplicata de certificat de nationnalité;</li>
                                        <li>Une copie légalisée du diplôme requis(BAC,BTS,DUT)ou du relevé de note à
                                            defaut;</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Une copie de la carte de séjour en cours de validité pour les étudiants
                                            étrangers (à
                                            fournir chaque année);</li>
                                        <li>Deux(2)photos d'identité;</li>
                                        <li>Un certificat médical datant de moin de deux mois délivré par un medecin
                                            agrée;</li>
                                        <li>Une quittance de dix mille francs (10.000)Fcfa pour étude de dossiers en
                                            cours du jour;
                                        </li>
                                        <li>Le concours se deroule en une seule journée et est composé de trois 3
                                            matieres qui sont
                                            :Mathematique(2heures) ,Anglais(2heures), Français(2heures). </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
    </center>
    </center>
    <br>
    <footer>
        <div class="footer">
            <div class="div4">
                <center>
                    <img src="logoiai.jpg" alt="" class="school-logo">
                    <p>La r&eacute;f&eacute;rence en mati&egrave;re d'informatique</p>
                </center>
            </div>
            <div class="div5">
                <p>Contactez-nous:</p>
                <div class="contact-icons">
                    <ul>
                        <li><a class="boutton2" href="tel:+22822212706"><i class="fa fa-phone"> (00228) 22212706</i></a></li>
                        <li><a class="boutton2" href="tel:+22822204700"><i class="fa fa-phone"> (00228) 22204700</i></a></li>
                        <li><a class="boutton2" href="mailto:iaitogo@yahoo.fr"><i class="fa fa-envelope"> iaitogo@yahoo.fr</i></a></li>
                        <li><a class="boutton2" href="mailto:iaitogo@iai-togo.tg"><i class="fa fa-envelope"> iaitogo@iai-togo.tg</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="div5">
                <p>Suivez nous:</p>
                <div class="contact-icons">
                    <ul>
                        <li><a class="boutton2" href="https://www.instagram.com/iaitogo_officiel" target="_blank"><i class="fa fa-instagram"> iaitogo_officiel</i></a></li>
                    </ul>
                </div>
                <p>Localisation</p>
                <div class="contact-icons">
                    <ul>
                        <li> <a class="boutton2" href="https://maps.app.goo.gl/qT9jruKGCFFQPzWG9" target="_blank"><i class="fa fa-map-marker">59 rue de la Kozah Nyékonakpoè</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="div5">
                <p>Liens rapides:</p>
                <div class="contact-icons">
                    <ul>
                        <li><a class="boutton2" href="inscription.php">Cr&eacute;er un compte</a></li>
                        <li><a class="boutton2" href="">Se connecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>