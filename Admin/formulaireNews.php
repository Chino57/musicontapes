<?php
session_start();
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
	<title>Formulaire news</title>
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
		<article id="formatformnews">

		<!-- conception du formulaire d'insertion de news dans la base de donnée -->
			<form action="traitementNews.php" method="POST" id="formdata">
				<h2>Formulaire de la section news</h2>
				<p id="nontransparence"><input type="hidden" name="idMember" value=<?php echo $_SESSION["idMember"];?>></br>
				Contenu*:</br>
				<textarea name = "contenuNews" id = "contenuNews"></textarea></br>
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