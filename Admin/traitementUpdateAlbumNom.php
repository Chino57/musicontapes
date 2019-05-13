<?php
session_start();

// script modifiant le nom de l'album dans la base de donnée album

if (empty($_POST["updateAlbumNom"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE albums SET nom = :newNom WHERE id = :IdAlb');

	$req->execute(array
		('newNom'=>$_POST["updateAlbumNom"],
		'IdAlb'=>$_POST["IdAlbum"]));


	header("location:validmodifBDD.php");
	exit();
	
}