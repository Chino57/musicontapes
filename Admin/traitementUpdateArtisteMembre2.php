<?php
session_start();

// script modifiant le second membre du groupe dans la base de donnée artiste

if (empty($_POST["updateArtisteMembre2"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE artistes SET membre2 = :newMembre2 WHERE id = :IdArt');

	$req->execute(array
		('newMembre2'=>$_POST["updateArtisteMembre2"],
		'IdArt'=>$_POST["IdArtiste"]));


	header("location:validmodifBDD.php");
	exit();
	
}