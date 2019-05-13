<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation album</title>
	<link rel="stylesheet" type="text/css" href="../général.css">
	<link rel="stylesheet" type="text/css" href="../validation.css">
	<link rel="stylesheet" href="../normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<!-- Script rendant l'affichage de la page temporaire -->
	<script type="text/javascript">
		setTimeout(function(){
			window.location = "formulaireAlbum.php";
		}, 5000);
	</script>

</head>
<body>
	<!-- Message de validation avec lien en cas de disfonctionnement du script  -->
	<div class = "flexgénéral">
    	<div class = "flexheadnav">
		<?php include("../headerchoix.php");?>

		<?php include("navadmin.php");?>
	
		</div>
	<div class="backgroundImage"></div>
		<section class="sectionflex">

			<article>
				<p id="texterreur">L'album est bien enregistré dans la base de donnée<br>
				Si vous n'avez pas été redirigé vers le formulaire,cliquez sur ce lien <a href="formulaireAlbum.php" class="lienclique">ici</a>
				</p>
			</article>
			
		</section>
	<div class = "flexfoot">
	<?php include("../footeradmin.php");?>
	</div>
</div>

</body>
</html>