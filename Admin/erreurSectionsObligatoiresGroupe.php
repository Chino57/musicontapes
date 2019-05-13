<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Erreur sections obligatoires groupe</title>
	<link rel="stylesheet" type="text/css" href="../général.css">
	<link rel="stylesheet" type="text/css" href="validationadmin.css">
	<link rel="stylesheet" href="../normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<!-- Script rendant l'affichage de la page temporaire -->
	<script type="text/javascript">
		setTimeout(function(){
			window.location = "formulaireGroupe.php";
		}, 5000);
	</script>

</head>
<body>
	<!-- Message d'erreur avec lien en cas de disfonctionnement du script  -->
	<div class = "flexgénéral">
    	<div class = "flexheadnav">
		<?php include("../headerchoix.php");?>

		<?php include("navadmin.php");?>
	
		</div>
	<div class="backgroundImage"></div>
		<section class="sectionflex">
			<article>
				<p id="texterreur">Vous n'avez pas complété les sections obligatoires du formulaire</br>
				Veuillez les compléter.
				</p>
			</article>
		</section>
	<div class = "flexfoot">
	<?php include("../footeradmin.php");?>
	</div>
</div>

</body>
</html>