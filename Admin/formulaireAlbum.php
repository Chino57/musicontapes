<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../général.css">
	<link rel="stylesheet" href="formulaire.css">
	<link rel="stylesheet" href="../normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<title>Formulaire album</title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">
	<!-- inclusion header et nav dans des fichiers php à part -->
	<?php include("../headerchoix.php");?>

    <?php include("navadmin.php");?>
    </div>


	<div class="backgroundImage"></div>
	<section class="sectionflex">
		<article>

		<!-- conception du formulaire d'insertion d'album dans la base de donnée -->
			<form action="traitementAlbum.php" method="POST">
				<h2>Formulaire de la section album</h2>
				<p id = "nontransparence">Nom de l'album*:<input type="text" name="nomAlbum" id="nomAlbum"><br>
				Artiste*:<input type="text" name="artisteAlbum" id="artisteAlbum"></br>
				Critique :</br><textarea name="critiqueAlbum" id="critiqueAlbum"></textarea></br>
				Pochette (mettre un lien):<input type="text" name="pochetteAlbum" id="pochetteAlbum"></br>
				Année de sortie*:<input type="text" name="anneeAlbum" id="anneeAlbum"></br>
				<input type="submit" name="valider" id="validform"></br>
				Les cases marquées d'une * sont à remplir obligatoirement</p>
			</form>
		</article>
			
        </section>
        <div class = "flexfoot">
        <?php include("../footeradmin.php");?>
    </div>
</div>
    </body>
</html>