<!-- Script qui détruit la session de la personne au moment de sa déconnexion -->
<?php
session_start();

$_SESSION=array();

session_destroy();

header("location:messageDeconnexion.php");