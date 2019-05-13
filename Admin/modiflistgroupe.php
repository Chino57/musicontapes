<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../général.css">
    <link rel="stylesheet" href="../liste.css">
    <link rel="stylesheet" href="../normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Liste Artistes </title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">
    <!-- inclusion header et nav dans des fichiers à part  -->
    
    <?php include("../headerchoix.php");?>

    <?php include("navadmin.php");?>
    </div>

    <div class = "backgroundImage"></div>
    <section class = "sectionflex">
        <article>

               <!-- objectif : créer une liste pour sélectionner quelle fiche doit être modifié-->

     <h2 class="titrederubrique">Liste des artistes</h2>

        <!-- Appel à la base de donnée sur un fichier à part -->

    <?php include("../appelBDD.php");?>

    <?php 
    // Sélection des éléments à afficher 

    $reponse = $bdd->query("SELECT id,nom FROM artistes ORDER BY id DESC");

    while($donnees = $reponse->fetch())
    {

        ?>
        <!-- mise en forme des éléments à afficher suivi d'un formulaire pour la modification dans la base de donnée  -->
            <p class="groupe"><?php echo "<a href=modifartiste.php?id=" .$donnees["id"]." class=lienclique>". htmlspecialchars($donnees["nom"]) ."</a>";?></p>
    
        <?php
    } 

    $reponse->closeCursor();

    ?>  
        </article>
    </section>
    <div class="flexfoot">
    <?php include("../footeradmin.php");?>
    </div>
</div>
</body>
</html>