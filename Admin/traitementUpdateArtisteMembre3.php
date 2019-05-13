<?php
session_start();

// script modifiant le troisième membre du groupe dans la base de donnée artiste

if (empty($_POST["updateArtisteMembre3"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET membre3 = :newMembre3 WHERE id = :IdArt');

	$req->execute(array
		('newMembre3'=>$_POST["updateArtisteMembre3"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}