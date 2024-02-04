<?php 
session_start();
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
    session_destroy();
}

session_destroy();
header("Location: bienvenu.html");
exit();
?>
