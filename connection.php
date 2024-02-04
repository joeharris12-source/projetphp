<?php
$database = "candidature";
$serverName = "localhost";
$password= "";
$username= "root";
//$port=4306;
try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    // définir le mode d'erreur PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur: '. $e->getMessage());
}
?>