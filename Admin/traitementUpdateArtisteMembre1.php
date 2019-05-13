<?php
session_start();

// script modifiant le premier membre du groupe dans la base de donnée artiste

if (empty($_POST["updateArtisteMembre1"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET membre1 = :newMembre1 WHERE id = :IdArt');

	$req->execute(array
		('newMembre1'=>$_POST["updateArtisteMembre1"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}