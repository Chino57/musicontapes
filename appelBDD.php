<?php 

// connexion à la base de donnée


try {
	$bdd = new PDO('mysql:host=localhost;dbname=basetest;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));
	} 

catch (Exception $e) 

	{

	die('Erreur ' .$e->getMessage());
	}
?>