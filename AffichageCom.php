<?php

	// Script Php permettant de décider si on affiche les commentaires ou pas selon le contenu

$req = $bdd->prepare("SELECT contenu FROM commentaire WHERE id_news = :idNews");

$req->execute(array
	('idNews' =>$_GET["id"]));

$donnees = $req->fetch();

if (empty($donnees["contenu"])) 
{
	include("nocommentaire.php");
}

else 
{
	include("affichagecommentaire.php");
}