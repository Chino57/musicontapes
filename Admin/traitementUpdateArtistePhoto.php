<?php
session_start();

// script modifiant la photo de l'artiste dans la base de donnée artiste

if (empty($_POST["updateArtistePhoto"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET photo = :newPhoto WHERE id = :IdArt');

	$req->execute(array
		('newPhoto'=>$_POST["updateArtistePhoto"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}