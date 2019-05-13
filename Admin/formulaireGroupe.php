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
	<title>Formulaire groupe</title>
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
		<!-- conception du formulaire d'insertion de groupe dans la base de donnée-->
			<form action="traitementGroupe.php" method="POST">
				<h2>Formulaire de la section groupe</h2>
				<p id = "nontransparence"> Nom du groupe*:<input type="text" name="nomGroupe" id="nomGroupe"><br>
				Genre musical:<input type="text" name="genreGroupe" id="genreGroupe"><br>
				Année de formation:<input type = "text" name="anneeGroupe" id="anneeGroupe"></textarea></br>
				Photo:<input type="text" name="photoGroupe" id="photoGroupe"><br>
				Membres du groupe:</br><input type="text" name="membreGroupe1" id="membreGroupe1"><br>
				<input type="text" name="membreGroupe2" id="membreGroupe2"><br>
				<input type="text" name="membreGroupe3" id="membreGroupe3"><br>
				<input type="text" name="membreGroupe4" id="membreGroupe4"><br>
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