<?php 
// objectif : traiter les données envoyés par le formulaire pour qu'ils soient inscrit dans la base de donnée


// Vérification du remplissage des cases obligatoires 
if (empty($_POST["nomGroupe"]))
{
 	header('Location:erreurSectionsObligatoiresGroupe.php');
 	exit();
}

else 
	// vérification du format de la case année de sortie 
	{
		if (!preg_match("#^[0-9]{4}$#",$_POST["anneeGroupe"])) 
		{
			header('location:erreurFormatAnneeGroupe.php');
			exit();
		}

		else {

			// appel à la base de donnée que j'ai crée sur le fichier "appelBDD"
			include('../appelBDD.php');
			// formatage et insertion des données dans la base de donnée correspondante 
			$nomGroupe = $_POST["nomGroupe"];
			$genreGroupe = $_POST["genreGroupe"];
			$anneeGroupe = $_POST["anneeGroupe"];
			$photoGroupe = $_POST["photoGroupe"];
			$membreGroupe1 = $_POST["membreGroupe1"];
			$membreGroupe2 = $_POST["membreGroupe2"];
			$membreGroupe3 = $_POST["membreGroupe3"];
			$membreGroupe4 = $_POST["membreGroupe4"];



			$req=$bdd->prepare("INSERT INTO artistes(nom,genremusical,anneeformation,membre1,membre2,membre3,membre4,photo)VALUES(:nomGroupe,:genreGroupe,:anneeGroupe,:membreGroupe1,:membreGroupe2,:membreGroupe3,:membreGroupe4,:photoGroupe)");

			$req->execute(array
				('nomGroupe'=>$nomGroupe,
				'genreGroupe'=>$genreGroupe,
				'anneeGroupe'=>$anneeGroupe,
				'membreGroupe1'=>$membreGroupe1,
				'membreGroupe2'=>$membreGroupe2,
				'membreGroupe3'=>$membreGroupe3,
				'membreGroupe4'=>$membreGroupe4,
				'photoGroupe'=>$photoGroupe,
				));
			
			// insertion d'un message de validation
			header('Location: validationGroupe.php');
			exit();





			 }

	}	