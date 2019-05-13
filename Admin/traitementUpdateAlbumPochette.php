<?php
session_start();

// script modifiant la pochette de l'album dans la base de donnée album

if (empty($_POST["updateAlbumPochette"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE albums SET pochette = :newPochette WHERE id = :IdAlb');

	$req->execute(array
		('newPochette'=>$_POST["updateAlbumPochette"],
		'IdAlb'=>$_POST["IdAlbum"]));


	header("location:validmodifBDD.php");
	exit();
	
}