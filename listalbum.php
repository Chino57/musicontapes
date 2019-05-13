<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="général.css">
    <link rel="stylesheet" href="liste.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Liste Albums </title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">
    
    <!-- inclusion header et nav dans des fichiers à part  -->
    
    <?php include("headerchoix.php");?>

    <?php include("nav.php");?>
    </div>

    <div class = "backgroundImage"></div>
    <section class = "sectionflex">
        <article>

        <!-- Objectif : faire apparaitre la liste des albums en utilisant la base de donnée -->

     <h2 class="titrederubrique">Liste des albums</h2>

      
      <!-- Appel à la base de donnée par un fichier à part -->
      <?php include("appelBDD.php");?>
        
    <!-- requête définissant les données qui apparaissent sur la page -->
    <?php 

    $reponse = $bdd->query("SELECT id,nom,artistes,annee FROM albums ORDER BY id DESC");

    while ($donnees = $reponse->fetch())
    {

    ?>
        <!-- Mise en forme des données -->
     <p class= groupe>
        <?php echo "<a class=lienclique href=album.php?id=".$donnees["id"]?>>
        <?php echo"<i>". htmlspecialchars($donnees["artistes"]). "</i>";?>
        <?php echo "<strong>".htmlspecialchars($donnees["nom"])."</strong>";?>
         <?php echo"(". htmlspecialchars($donnees["annee"]).")</a>"?>
     </p>
    
    <?php
    }

    $reponse->closeCursor();

    ?>
        </article>

    </section>
    <div class="flexfoot">
    <!-- Inclusion du footer dans un fichier séparé -->
    <?php include("footerchoix.php");?>
    </div>
</div>
</body>
</html>