<?php
include_once('connection.php');
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirige l'utilisateur vers la page de connexion s'il n'est pas connecté
    exit();
}

$name = $_SESSION['username'];
$sql = "SELECT * FROM informations i 
        INNER JOIN inscriptions a ON i.username = a.username 
        WHERE i.username = :name";

try {
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
    $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur la candidature</title>
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <link rel="stylesheet" href="consultation.css">
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

    <table>
        <tr>
            <th colspan="3">Informations sur la candidature</th>
        </tr>
        <?php foreach ($resultat as $element) : ?>
            <tr>
                <td>Nom</td>
                <td><?php echo isset($element['nom']) ? $element['nom'] : ''; ?></td>
                <td><a href="candidature.html">Modifier</a></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><?php echo isset($element['prenom']) ? $element['prenom'] : ''; ?></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><?php echo isset($element['date']) ? $element['date'] : ''; ?></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td><?php echo isset($element['sexe']) ? $element['sexe'] : ''; ?></td>
            </tr>
            <tr>
                <td>Nationalité</td>
                <td><?php echo isset($element['nation']) ? $element['nation'] : ''; ?></td>
            </tr>
            <tr>
                <td>Année d'obtention du BAC</td>
                <td><?php echo isset($element['anneebac']) ? $element['anneebac'] : ''; ?></td>
            </tr>
            <tr>
                <td>Serie</td>
                <td><?php echo isset($element['serie']) ? $element['serie'] : ''; ?></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><?php echo isset($element['photo']) ? $element['photo'] : ''; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <footer>
        
    </footer>
</body>

</html>
