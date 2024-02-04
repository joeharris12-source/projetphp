<?php
include_once('connection.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['username'];

// Charger les informations actuelles de l'utilisateur
$sql = "SELECT * FROM informations i 
        INNER JOIN inscriptions a ON i.username = a.username 
        WHERE i.username = :name";

try {
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
    $resultat = $statement->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
}

// Traitement du formulaire de modification
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validation et mise à jour des champs dans la base de données
    // Assurez-vous d'ajouter la logique de validation appropriée pour vos champs
    $nouveauNom = $_POST['nouveauNom'];
    $nouveauPrenom = $_POST['nouveauPrenom'];

    // Exemple de requête de mise à jour
    $updateSql = "UPDATE informations SET nom = :nouveauNom, prenom = :nouveauPrenom WHERE username = :name";

    try {
        $updateStatement = $conn->prepare($updateSql);
        $updateStatement->bindParam(':nouveauNom', $nouveauNom);
        $updateStatement->bindParam(':nouveauPrenom', $nouveauPrenom);
        $updateStatement->bindParam(':name', $name);
        $updateStatement->execute();

        // Redirection vers la page de consultation après la mise à jour
        header("Location: consultation.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur de mise à jour : " . $e->getMessage();
    }
}
?>