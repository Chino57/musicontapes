<?php
session_start();

// script modifiant l'artiste d'un album dans la base de donnée album

if (empty($_POST["updateAlbumArtiste"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE albums SET artistes = :newArtiste WHERE id = :IdAlb');

	$req->execute(array
		('newArtiste'=>$_POST["updateAlbumArtiste"],
		'IdAlb'=>$_POST["IdAlbum"]));


	header("location:validmodifBDD.php");
	exit();
	
}