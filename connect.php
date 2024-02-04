<?php
session_start();
include("connection.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body class="corp">
    <!-- Barre de navigation -->
    <div class="entete">
        <a href="bienvenu.html"><img src="logoiai.jpg" alt="Logo de l'école" class="school-logo"></a>
        <p class="titre">IAI-TOGO</p>
        <div class="header-buttons">
            <a class="boutton" href="inscription.php">Cr&eacute;er un compte</a>
            <a class="boutton" href="bienvenu.html">Retour &agrave; l'accueil</a>
        </div>
    </div>
    <br><br><br><br><br>
    <?php 
            if (isset($_SESSION['message'])) {
                // Afficher le message
                echo $_SESSION['message'];
            
                // Supprimer le message pour éviter de l'afficher à nouveau
                unset($_SESSION['message']);
            }
            
            ?>
                    <center>
                        <div class="entourer">

                            <form action="after_create.php" method="post">
                                <center>
                                    <div class="contient">
                                        <div class="p1">
                                            <center>Connectez-vous!</center>
                                          <hr color="#3f5954">
                                        </div>
                                        <?php if(isset($_GET['error'])){ ?>
                                            <p class="error"><?php echo $_GET['error']; ?></p>
                                        <?php } ?>
                                        <label>Nom</label>
                                        <input type="text" name="nom" placeholder="Nom"><br>

                                        <label>Mot de passe</label>
                                        <input type="password" name="password" placeholder="Mot de passe"><br>

                                        <button type="submit">Connexion</button>
                                    </div><br>
                                </center>        
                            </form>
                        </div>
                    </center>
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
                        <li><a class="boutton2" href="tel:+22822212706"><i class="fa fa-phone"> (00228) 22212706</i></a>
                        </li>
                        <li><a class="boutton2" href="tel:+22822204700"><i class="fa fa-phone"> (00228) 22204700</i></a>
                        </li>
                        <li><a class="boutton2" href="mailto:iaitogo@yahoo.fr"><i class="fa fa-envelope">
                                    iaitogo@yahoo.fr</i></a></li>
                        <li><a class="boutton2" href="mailto:iaitogo@iai-togo.tg"><i class="fa fa-envelope">
                                    iaitogo@iai-togo.tg</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="div5">
                <p>Suivez nous:</p>
                <div class="contact-icons">
                    <ul>
                        <li><a class="boutton2" href="https://www.instagram.com/iaitogo_officiel" target="_blank"><i
                                    class="fa fa-instagram"> iaitogo_officiel</i></a></li>
                    </ul>
                </div>
                <p>Localisation</p>
                <div class="contact-icons">
                    <ul>
                        <li> <a class="boutton2" href="https://maps.app.goo.gl/qT9jruKGCFFQPzWG9" target="_blank"><i
                                    class="fa fa-map-marker">59 rue de la Kozah Nyékonakpoè</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="div5">
                <p>Liens rapides:</p>
                <div class="contact-icons">
                    <ul>
                        <li><a class="boutton2" href="inscription.php">Cr&eacute;er un compte</a></li>
                        <li><a class="boutton2" href="bienvenu.html">Retour &agrave; l'acceueuil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    
</body>
</html>
