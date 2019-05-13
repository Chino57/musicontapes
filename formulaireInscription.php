<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="général.css">
	<link rel="stylesheet" href="formulairepublic.css">
	<link rel="stylesheet" href="normalize.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<title>Formulaire inscription</title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">
	<!-- inclusion header et nav dans des fichiers php à part -->
	<?php include("header.php");?>

    <?php include("nav.php");?>
    </div>


	<div class="backgroundImage"></div>
	<section class="sectionflex">
		<article>

		<!-- conception du formulaire d'insertion d'album -->
			<form action="traitementInscription.php" method="POST">
				<h2>Formulaire d'inscription</h2>
				<p id ="nontransparence">Pseudo*:</br><input type = "text" name="pseudoMembre" id = "pseudoMembre"></br>
				Email*:</br><input type="text" name="mailMembre" id="mailMembre"></br>
				Mot de passe*:</br><input type = "password" name="MDPMembre" id ="MDPMembre"></br>
				Confirmer votre mot de passe*:</br><input type = "password" name="confirmationMDP" id="confirmationMDP"></br>
				<input type="submit" name="valider" id="validform"></br>
				Les cases marquées d'une * sont à remplir obligatoirement</p>
			</form>
		</article>
			
        </section>
        <div class = "flexfoot">
        <?php include("footerchoix.php");?>
    </div>
</div>
    </body>
</html>