<?php
session_start();
// script modifiant l'année de l'album dans la base de donnée album

if (empty($_POST["updateAlbumAnnee"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE albums SET annee = :newAnnee WHERE id = :IdAlb');

	$req->execute(array
		('newAnnee'=>$_POST["updateAlbumAnnee"],
		'IdAlb'=>$_POST["IdAlbum"]));


	header("location:validmodifBDD.php");
	exit();
	
}