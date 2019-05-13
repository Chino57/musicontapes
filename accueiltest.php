<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="général.css">
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="normalize.css">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<title>Music on Tapes</title>
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

    <!-- Appel à la base de donnée dans un fichier à part  -->
            <div class="flexrubrique">
                <h2 class="titrederubrique">Les derniers</br> albums chroniqués</h2>
        
                    <?php include("appelBDD.php");?>
        
                    <?php

        // requete qui cherche les nom,artistes et pochettes des deux derniers albums rajouté dans la base de donnée

                    $reponse = $bdd->query("SELECT id,nom,artistes,pochette FROM albums ORDER BY id DESC LIMIT 0,2");
        
                   while($donnees = $reponse->fetch())
                {

                    ?>

            <!-- affichage de la requête dans la page d'accueil  -->

             
                <p id = "nontransparence">
                <?php echo "<a href =album.php?id=".$donnees['id']."><img alt=". htmlspecialchars($donnees["nom"]). " id=pochettealbum src =".htmlspecialchars($donnees["pochette"]).">". "<br/>" ?></a>
            <?php echo htmlspecialchars($donnees["artistes"]). "<br/>"?>
            <?php echo htmlspecialchars($donnees["nom"])."</p>"?>
        
        <?php
        }

        $reponse->closeCursor();

        ?>
    

        <a href="listalbum.php"><p id = "nontransparence">+ d'albums</p></a>
        </div>
        <div class="flexrubrique">
        <h2 class="titrederubrique">Les dernières news</h2>


            <!-- section affichant les news contenues dans la base de donnée -->

            <!-- appel à la base de donnée dans un fichier séparé -->
            <?php include("appelBDD.php");?>

            <?php

            // requête dans la base de donnée pour extraire le contenu de la news dans la table news

            $reponse = $bdd->query("SELECT contenu FROM news ORDER BY id DESC LIMIT 0,8 ");

            while($donnees = $reponse->fetch())
            {
            

            ?>

            <!-- affichage du contenu des news en utilisant php  -->

            <?php echo "<p id = formatfontnews>".htmlspecialchars($donnees["contenu"])." </p>";?>


            <?php
            }

            $reponse->closeCursor();


            ?>

            <a href="listnews.php"><p id = "nontransparence">+ de news</p></a>


            </div>

            <!-- section affichant le nom des groupes répertoriés sur le site. -->


            <div class="flexrubrique">
            <h2 class="titrederubrique">Les derniers groupes</br> ajoutés</h2>
                <!-- Appel à la base de donnée dans un fichier séparé  -->
                <?php include("appelBDD.php");?>

                <!-- Requête récupérant les 8 derniers groupes répertoriés sur le site -->

                <?php
                 $reponse = $bdd->query("SELECT id,nom FROM artistes ORDER BY id DESC LIMIT 0,8 ");
                 while($donnees = $reponse->fetch())
                 {
                    ?>
                    <!-- Affichage des données sur la page d'accueil  -->

                    <?php echo "<p id = accueilartistes><a id= lienartist href=groupe.php?id=".$donnees["id"].">" .$donnees["nom"] ."</a></p>";?>

                    <?php

                    }

                    $reponse->closeCursor();

                    ?>

                    <a href="listgroupe.php"><p id ="nontransparence">+ d'artistes</p></a>
            </div>
        </section>
	<div class ="flexfoot">
        <!-- Inclusion du footer dans un fichier séparé -->
    <?php include("footerchoix.php");?>
    </div>
</div>
</body>
</html>