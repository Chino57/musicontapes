<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="général.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="normalize.css">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<title>News</title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">

    <!-- inclusion du header et du nav dans des fichiers à part  -->
	<?php include("headerchoix.php");?>

    <?php include("nav.php");?>
    </div>

	<div class ="backgroundImage"></div>
    <section class = "sectionflex">
        <article>
            <!-- objectif : affichage des news avec les commentaires et le formulaire de commentaire pour les gens identifiés -->

        <h2>News</h2>

    <!-- Appel à la base de donnée dans un fichier à part  -->
        
        <?php include("appelBDD.php");?>
        
        <?php

        // requete qui cherche le contenu,la date (mit au format européen),le pseudo de l'auteur de la news qui sont dans la base de donnée

        $req = $bdd->prepare("SELECT n.contenu contenu_news,DATE_FORMAT(datenews, '%d/%m/%Y à %Hh%i') AS date_news, m.pseudo pseudo_membre FROM news n INNER JOIN membres m ON n.id_membre = m.id WHERE n.id = :idNews");

        $req->execute(array
            ("idNews"=>$_GET["id"]));
        
        $donnees = $req->fetch();

        ?>

            <!-- affichage de la requête dans la page d'accueil  -->


            <?php echo "<p id = formatnews>". htmlspecialchars($donnees["contenu_news"]) . "</br>"?>
        <?php echo "par ". htmlspecialchars($donnees["pseudo_membre"]) . " le ". htmlspecialchars($donnees["date_news"]). "</p>";?>
        </article>

        <?php include("AffichageCom.php");?>
        
            <article>
                <?php include("commentaire.php");?>
            </article>
        </section>
	<div class ="flexfoot">
    <?php include("footerchoix.php");?>
    </div>
</div>
</body>
</html>