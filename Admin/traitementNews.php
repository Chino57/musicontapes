<?php
session_start();

// objectif : traiter les données envoyés par le formulaire pour qu'ils soient inscrit dans la base de donnée


// Vérification du remplissage des cases obligatoires 
if (empty($_POST["contenuNews"]))
{
 	header('location:erreurSectionsObligatoiresNews.php');
 	exit();
}

else 
		{
			// appel à la base de donnée que j'ai crée sur le fichier "appelBDD"
			include('../appelBDD.php');
			// formatage et insertion des données dans la base de donnée correspondante 
			$contenuNews = $_POST["contenuNews"];
			$idmember = $_POST["idMember"];

			$req=$bdd->prepare("INSERT INTO news(contenu,id_membre)VALUES(:contenuNews,:idmember)");

			$req->execute(array
				('contenuNews'=>$contenuNews,
				  'idmember'=>$idmember));
			
			// insertion d'un message de validation
			header('Location: validationNews.php');
			exit();
		}
			