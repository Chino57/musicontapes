<?php 
session_start();
// objectif : traiter les données envoyés par le formulaire pour qu'ils soient inscrit dans la base de donnée


// Vérification du remplissage des cases obligatoires 
if (empty($_POST["nomAlbum"] AND $_POST["artisteAlbum"])) 
{
 	header('location:erreurSectionsObligatoiresAlbum.php');
 	exit();
}

else 
	// vérification du format de la case année de sortie 
	{
		if (!preg_match("#^[0-9]{4}$#",$_POST["anneeAlbum"])) 
		{
			header('location:erreurFormatAnneeAlbum.php');
			exit();
		}

		else {

			// appel à la base de donnée que j'ai crée sur le fichier "appelBDD"
			include('../appelBDD.php');
			// formatage et insertion des données dans la base de donnée correspondante 
			$nomAlbum = $_POST["nomAlbum"];
			$artisteAlbum = $_POST["artisteAlbum"];
			$critiqueAlbum = $_POST["critiqueAlbum"];
			$pochetteAlbum = $_POST["pochetteAlbum"];
			$anneeAlbum = $_POST["anneeAlbum"];

			$req=$bdd->prepare("INSERT INTO albums(nom,artistes,critique,pochette,annee)VALUES(:nomAlbum,:artisteAlbum,:critiqueAlbum,:pochetteAlbum,:anneeAlbum)");

			$req->execute(array
				('nomAlbum'=>$nomAlbum,
				'artisteAlbum'=>$artisteAlbum,
				'critiqueAlbum'=>$critiqueAlbum,
				'pochetteAlbum'=>$pochetteAlbum,
				'anneeAlbum'=>$anneeAlbum,
				));
			
			// insertion d'un message de validation
			header('Location: validationAlbum.php');
			exit();
		}
	}	