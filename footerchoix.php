<?php
	// script décidant quel type de footer doit apparaitre selon le statut du membre //
	
if (!isset($_SESSION["pseudo"]))
	{

		include("footermembre.php");
	}

	else {

		include("appelBDD.php");

	$req = $bdd->prepare("SELECT statut FROM membres WHERE id = :idMember");

	$req->execute(array
	('idMember' =>$_SESSION["idMember"] ));

	$donnees = $req->fetch(); 

 	if ($donnees["statut"] != "contributeur") 
		{
			include("footermembre.php");
		}

	else 
		{
			include("footercontrib.php");
		}
	};
	