<?php
session_start();

// script modifiant le style musical de l'artiste dans la base de donnée artiste

if (empty($_POST["updateArtisteGenre"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET genremusical = :newGenre WHERE id = :IdArt');

	$req->execute(array
		('newGenre'=>$_POST["updateArtisteGenre"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}