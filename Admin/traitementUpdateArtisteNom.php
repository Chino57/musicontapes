<?php
session_start();

// script modifiant le nom de l'artiste dans la base de donnée artiste

if (empty($_POST["updateArtisteNom"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET nom = :newNom WHERE id = :IdArt');

	$req->execute(array
		('newNom'=>$_POST["updateArtisteNom"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}