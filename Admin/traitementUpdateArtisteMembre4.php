<?php
session_start();

// script modifiant le quatrième membre du groupe dans la base de donnée artiste

if (empty($_POST["updateArtisteMembre4"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET membre4 = :newMembre4 WHERE id = :IdArt');

	$req->execute(array
		('newMembre4'=>$_POST["updateArtisteMembre4"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}