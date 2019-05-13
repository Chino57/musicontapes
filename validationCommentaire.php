<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation commentaire</title>
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
			window.location = "listnews.php";
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
		<p id="texterreur">Votre commentaire est bien ajouté.<br>
		Si vous n'avez pas été redirigé vers le formulaire,cliquez sur ce lien <a href="listnews.php" class="lienclique">ici</a>
		</p>
		</article>
		</section>
	<div class = "flexfoot">
	<?php include("footerchoix.php");?>
	</div>
</div>

</body>
</html>