<?php
session_start();
// vérification pour savoir si l'utilisateur a bien inscrit quelque chose dans le formulaire

if (empty($_POST["commentaireNews"]))

	{
		header("location:erreurCommentaireInexistant.php");
		exit();
	}

	else
		{
			// appel a la base de donnée
			include("appelBDD.php");
			// création de variable qui contienne les données envoyées
			$contenuCommentaire = $_POST["commentaireNews"];
			$idNews = $_POST["idNews"];
			$auteurCommentaire = $_POST["auteur"];

			// Insertion dans la base de donnée
			$req = $bdd->prepare("INSERT INTO commentaire(auteur,id_news,contenu)VALUES(:auteurCom,:idnews,:contenuCom)");


			$req->execute(array
			('auteurCom' =>$auteurCommentaire,
			'idnews'=>$idNews,
			'contenuCom'=>$contenuCommentaire));

			// redirection vers un message de validation
			header("location:validationCommentaire");
			exit();
		}