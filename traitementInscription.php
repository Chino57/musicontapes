<?php 

if (empty($_POST["pseudoMembre"] AND $_POST["mailMembre"] AND $_POST["MDPMembre"] AND $_POST["confirmationMDP"])) 
{
 	header('location:erreurSectionsObligatoiresInscription.php');
 	exit();
}

else {

	// vérification de la présence du pseudo dans la base de donnée

	include('appelBDD.php');

	$pseudoMembre = $_POST["pseudoMembre"];

	$req = $bdd->prepare("SELECT pseudo FROM membres WHERE pseudo = :pseudo");
	$req->execute(array("pseudo"=>$pseudoMembre));
	$donnees = $req->fetch();
	if ($donnees)
	{
		header('location:erreurPseudoInscription.php');
		exit();
	}

	else {
			if (!preg_match("#^[a-z0-9._-]+@[a-z0-9]{2,}\.[a-z]{2,4}$#",$_POST["mailMembre"])) 
			
			{

			header('location:erreurFormatMailInscription.php');

			exit();
			}

		else 
		{
			// vérification de la présence de l'adresse email dans la base de donnée 

			include('appelBDD.php');

			$mailMembre = $_POST["mailMembre"];
			
			$req = $bdd->prepare("SELECT email FROM membres WHERE email = :mail");
			
			$req->execute(array('mail' =>$mailMembre));
			
			$donnees = $req->fetch();
				if ($donnees) 
				{
					header('location:erreurMailIdentiqueBDDInscription.php');
				exit();
				}


				else

				{ 

				// Vérification de la confirmation de mot de passe du formulaire 

						if ($_POST["MDPMembre"]!= $_POST["confirmationMDP"]) 
					{
					header("location:erreurConfirmationMDPInscription.php");
					exit();
					
					}


						else {

							// enregistrement du nouveau membre dans la base de donnée

							include('appelBDD.php');

							$pseudoMembre = $_POST["pseudoMembre"];
							$mailMembre = $_POST["mailMembre"];
							$MDPHacheMembre = password_hash($_POST["MDPMembre"],PASSWORD_DEFAULT);

							$req = $bdd->prepare("INSERT INTO membres(pseudo,email,motdepasse,statut)VALUES(:pseudoMembre,:mailMembre,:MDPMembre,'membre')") or die(print_r($bdd->errorInfo()));

							$req->execute(array(
								'pseudoMembre'=>$pseudoMembre,
								'mailMembre'=>$mailMembre,
								'MDPMembre'=>$MDPHacheMembre, 
							));

							header("location:validationInscription");
							exit();

						}
					}
				}
			}
		}