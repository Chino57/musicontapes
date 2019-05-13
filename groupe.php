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
    <link rel="stylesheet" href="fiche.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Artistes</title>
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

    <!-- Objectif: afficher les renseignements de la table "album" et les mettre en forme -->

        <!-- appel de la base de donnée sur un fichier à part -->

    <?php include("appelBDD.php");?>

    <!-- sélection des données à afficher sur la page -->

    <?php
    $req = $bdd->prepare("SELECT nom,genremusical,anneeformation,membre1,membre2,membre3,membre4,photo FROM artistes WHERE id = :idGroupe ");
    $req->execute(array
        ("idGroupe"=>$_GET['id']));

    $donnees = $req->fetch();
    ?>
    
    <!-- Mise en forme des données  -->

    <p id ="formatfontfiche"><img src = <?php echo htmlspecialchars($donnees["photo"]);?> alt = "Metallica"><strong><br/>
    Nom:</strong> <?php echo htmlspecialchars($donnees["nom"]);?><br/>
    <strong>Genre musical:</strong><?php echo htmlspecialchars($donnees["genremusical"]);?><br/>
    <strong>Année de formation:</strong><?php echo htmlspecialchars($donnees["anneeformation"]);?><br/>
    <strong>Membres:</strong><br/><?php echo htmlspecialchars($donnees["membre1"]);?></br>
    <?php echo htmlspecialchars($donnees["membre2"]);?><br/>
    <?php echo htmlspecialchars($donnees["membre3"]);?><br/>
    <?php echo htmlspecialchars($donnees["membre4"]);?></p>

    <?php 

    $req->CloseCursor();

    ?>
    </section>
    <div class="flexfoot">
        <!-- Inclusion du footer dans un fichier séparé -->
    <?php include("footerchoix.php");?>
    </div>
</div>
</body>
</html>