<?php
include_once("connection.php");
if (isset($_POST['bouton'])) {
    $sql = "SELECT * From informations where  Id = :Id
            ";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(":Id", $_POST['nom']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    header('location:consulter.php');
}
if (isset($_POST['btnupd'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $query = $bdd->prepare("UPDATE informations SET nom = :nom WHERE id = :id");
        $query->bindParam(':nom', $nom, PDO::PARAM_STR);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        header("Location:consulter.php");
        exit();
}
else {
    die("Méthode non autorisée.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exercice.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="exercice1.js"></script>
</head>

<body class="corp">
<form action="recuperation.php" method="post" enctype="multipart/form-data">
            <div class="entourer">
                <div class="first_title">
                    <center>
                        <legend><i>Remplissez le formulaire pour soumettre votre candidature <br>Informations
                                personnelles</i></legend>
                    </center>
                </div>

                <div class="contient">
                    <div class="mb-4">
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text"  class="form-control" name="nom" id="nom" value="<?php echo $row['lib_cat']; ?>">
                        <input type="hidden" name="nom" class="form-control" id="nom" value="<?php echo $_POST['txtid'] ?>">
                        <button type="submit" name="btnupd" id="btnupd">Enregistrer</button>
                    </div>
                        </form>