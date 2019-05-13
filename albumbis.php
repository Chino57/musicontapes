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
    <link rel="stylesheet" href="fichebis.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <title>Album</title>
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

        <!-- Objectif: afficher les renseignements de la table "album" et les mettre en forme -->

        <!-- appel de la base de donnée sur un fichier à part -->

    <?php include("appelBDD.php");?>

    <!-- sélection des données à afficher sur la page -->

    <?php
    $req = $bdd->prepare("SELECT id,nom,artistes,critique,pochette,annee FROM albums WHERE id = :idAlbum");
    $req->execute(array
        ("idAlbum"=>$_GET['id']));

    $donnees = $req->fetch()
    
    ?>

    <!-- Mise en forme des données  -->

    <p id ="formatfontfiche"><img src = <?php echo htmlspecialchars($donnees["pochette"]);?> alt = "pochette"><strong><br/>
    Nom:</strong><?php echo htmlspecialchars($donnees["nom"]);?><br/>
    <strong>Artiste:</strong><?php echo htmlspecialchars($donnees["artistes"]);?><br/>
    <strong>Année de sortie:</strong><?php echo htmlspecialchars($donnees["annee"]);?><br/>
    <strong>Critique:</strong><br/><?php echo htmlspecialchars($donnees["critique"]);?>

    <?php 
    

    $req->CloseCursor();

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