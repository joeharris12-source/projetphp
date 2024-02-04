<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function validate($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return$data;
        }
    
    $name = validate($_POST['nom']);
    $pass = validate($_POST['password']);

  
}
// Assurez-vous que les variables $name et $pass sont définies (remplacez cela par votre logique pour récupérer ces valeurs)
$name = isset($_POST['nom']) ? $_POST['nom'] : null;
$pass = isset($_POST['password']) ? $_POST['password'] : null;

// Ajoutez des déclarations d'écho pour déboguer
echo "Nom utilisateur : " . $name . "<br>";
echo "Mot de passe : " . $pass . "<br>";

if ($name && $pass) {
    // Utilisez des déclarations préparées pour éviter les problèmes de sécurité et d'injection SQL
    $script = "SELECT * FROM inscriptions WHERE username = :name AND mot_de_passe = :pass";

    try {
        $statement = $conn->prepare($script);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':pass', $pass);

        $statement->execute();

        // Vérification réussie
        if ($statement->rowCount() == 1) {
            session_start();
            $verif_conn_query = "SELECT i.id_candidature FROM informations i 
                                INNER JOIN inscriptions a 
                                ON i.username = a.username 
                                WHERE i.username = :name";
            try {
                $verif_statement = $conn->prepare($verif_conn_query);
                $verif_statement->bindParam(':name', $name);
                $verif_statement->execute();
            
                if ($verif_statement->rowCount() > 0) {
                    $_SESSION['username'] = $name;
                    header("Location: acceuil3.php");
                    exit();
                } else {
                    $_SESSION['username'] = $name;
                    header("Location: acceuil2.php");
                    exit();
                }
            } catch (PDOException $e) {
                echo "Erreur de requête : " . $e->getMessage();
            }
            
    }else {
        header("Location: connect.php?error=Nom ou mot de passe incorrect");
        exit();
    } 
    
    }catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
    }
}else {
    echo "Nom d'utilisateur et mot de passe requis.";
}

?>