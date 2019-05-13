<?php
session_start();

// script modifiant l'année de début de l'artiste dans la base de donnée artiste

if (empty($_POST["updateArtisteAnneeFormation"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET anneeformation = :newAnneeFormation WHERE id = :IdArt');

	$req->execute(array
		('newAnneeFormation'=>$_POST["updateArtisteAnneeFormation"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}