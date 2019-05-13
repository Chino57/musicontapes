<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation album</title>
	<link rel="stylesheet" type="text/css" href="général.css">
	<link rel="stylesheet" type="text/css" href="validation.css">
	<link rel="stylesheet" href="normalize.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<!-- Script rendant l'affichage de la page temporaire -->
	<script type="text/javascript">
		setTimeout(function(){
			window.location = "accueil.php";
		}, 5000);
	</script>

</head>
<body>
	<!-- Message de validation avec lien en cas de disfonctionnement du script  -->
	<div class = "flexgénéral">
    	<div class = "flexheadnav">
		<?php include("headerchoix.php");?>

		<?php include("nav.php");?>
	
		</div>
	<div class="backgroundImage"></div>
		<section class="sectionflex">

		<article>
		<p id="texterreur">Vous êtes maintenant deconnecté.</br>
		Cliquez sur le lien suivant si vous n'êtes pas revenu automatiquement sur la page d'accueil<a href="\projet\accueiltest.php" class ="lienclique"> ici</a>
		</p>
		</article>
		</section>
	<div class = "flexfoot">
	<?php include("footerchoix.php");?>
	</div>
</div>

</body>
</html>