<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation modification base de donnée</title>
	<link rel="stylesheet" type="text/css" href="../général.css">
	<link rel="stylesheet" type="text/css" href="../validation.css">
	<link rel="stylesheet" href="../normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<!-- Script rendant l'affichage de la page temporaire -->
	<script type="text/javascript">
		setTimeout(function(){
			window.location = "admin.php";
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
		<section class="sectionflex"></section>

			<article>
				<p id="texterreur">La base de donnée a bien été modifié.</br>
				Si vous ne revenez pas au menu d'administration cliquez sur le lien suivant <a href="admin.php" class ="lienclique">ici</a>
				</p>
			</article>
			
		</section>
	<div class = "flexfoot">
	<?php include("../footeradmin.php");?>
	</div>
</div>

</body>
</html>