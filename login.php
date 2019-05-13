<?php 

// objectif de ce script : vérification des renseignements donnés par l'utilisateur pour s'identifier sur le site avant d'ouvrir une session
// 
// Création de deux variables qui seront utilisé dans le script
$pseudoLogin = $_POST["pseudoLogin"];
$MDPLogin = $_POST["MDPLogin"];

// Vérification que l'utilisateur à bien rempli les cases correspondantes

if (empty($pseudoLogin) OR empty($MDPLogin))
{
	header('location:erreurSectionsObligatoiresLogin.php');
 	exit();
}

else {
		// Vérification que l'utilisateur a bien écrit le bon mot de passe
		include('appelBDD.php');

		$req = $bdd->prepare("SELECT id,motdepasse FROM membres WHERE pseudo = :pseudoLog") or die(print_r($bdd->errorInfo()));

		$req->execute(array
		('pseudoLog' =>$pseudoLogin
		));

		$donnees = $req->fetch();

		$motdepasseverif = password_verify($_POST["MDPLogin"],$donnees['motdepasse']);

		if (!$motdepasseverif)
		{
				header('location:erreurLoginIncorrect.php');
				exit();
		}

		 else {
		 		// ouverture de la session
		 		session_start();

		 			$_SESSION["idMember"] = $donnees["id"];
		 			$_SESSION["pseudo"] = $pseudoLogin;

		 		header('location:validationIdentification.php');
		 		exit();
		 		}
		 	}
		