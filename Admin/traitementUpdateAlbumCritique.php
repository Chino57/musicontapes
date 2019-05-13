<?php
session_start();

// script modifiant la critique de l'album dans la base de donnée album

if (empty($_POST["updateAlbumCritique"])) 
{
	header("location:erreurcasenonremplie.php");
	exit();
}

else 
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE albums SET critique = :newCritique WHERE id = :IdAlb');

	$req->execute(array
		('newCritique'=>$_POST["updateAlbumCritique"],
		'IdAlb'=>$_POST["IdAlbum"]));


	header("location:validmodifBDD.php");
	exit();
	
}