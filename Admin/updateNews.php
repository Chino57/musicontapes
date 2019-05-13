<?php
session_start();


if (empty($_POST["updateNewsContenu"])) 
{
	

	header("location:erreurcasenonremplie.php");
	exit();

	
}

else
{
	include("../appelBDD.php");


	$req = $bdd->prepare('UPDATE news SET contenu = :newcontenu WHERE id = :IdNews');

	$req->execute(array
		('newcontenu'=>$_POST["updateNewsContenu"],
		'IdNews'=>$_POST["idNews"]));


	header("location:validmodifBDD.php");
	exit();
}
