<?php
session_start();
include("connection.php");

if (isset($_POST['nom']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['nom']);
    $pass = validate($_POST['password']);

    if (empty($name) || empty($pass)) {
        $_SESSION['error'] = "Nom d'utilisateur et mot de passe requis";
        header("location: inscription.php");
        exit();
    }

    // Vérifier l'unicité du nom d'utilisateur
    $check_username_script = "SELECT username FROM inscriptions WHERE username = :name";

    try {
        $check_statement = $conn->prepare($check_username_script);
        $check_statement->bindParam(':name', $name);
        $check_statement->execute();

        if ($check_statement->rowCount() > 0) {
            $_SESSION['error'] = "Veuillez changer de nom d'utilisateur. Le nom d'utilisateur existe déjà.";
            header("location: inscription.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Erreur de vérification du nom d'utilisateur : " . $e->getMessage();
        header("location: inscription.php");
        exit();
    }

    // Utilisation de déclarations préparées pour l'insertion
    $script = "INSERT INTO inscriptions (username, mot_de_passe) VALUES (:name, :pass)";

    try {
        $statement = $conn->prepare($script);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':pass', $pass);
        $statement->execute();

        // Enregistrement réussi
        $_SESSION['username'] = $name;
        $_SESSION['message'] = "Bienvenue, $name ! Vous venez de créer votre compte. Connectez-vous pour accéder à votre page.";
        header("Location: connect.php");
    } catch (PDOException $e) {
        $_SESSION['error'] = "Erreur d'insertion : " . $e->getMessage();
        header("location: inscription.php");
        exit();
    }
} else {
    header("location: inscription.php");
    exit();
}
?>
