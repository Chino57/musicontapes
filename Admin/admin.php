<?php
session_start()
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
    <title>Espace contributeur</title>
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

        <!-- menu de selection de la partie administration du site -->

     <h2 class="titrederubrique">Album</h2>

     <p id = "nontransparence" class="groupe">Pour rajouter ou modifier une fiche album sur le site</p>

     <p id = "nontransparence"><a href="formulaireAlbum.php" class="bouton">Ajouter</a>
     <a href="modiflistalbum.php" class="bouton">Modifier</a></p>
        </article>
        <article>
     <h2 class="titrederubrique">Groupe</h2>

     <p id="nontransparence" class="groupe">Pour rajouter ou modifier une fiche groupe sur le site</br>

     <p id = "nontransparence"><a href="formulaireGroupe.php" class="bouton">Ajouter</a>
     <a href="modiflistgroupe.php" class="bouton">Modifier</a></p>
        </article>
        <article>
     <h2 class="titrederubrique">News</h2>

     <p id="nontransparence" class="groupe">Pour rajouter ou modifier une news sur le site</p></br>

     <p id = "nontransparence"><a href="formulaireNews.php" class="bouton">Ajouter</a>
     <a href="modiflistnews.php" class="bouton">Modifier</a></p>
        </article>
    </section>
    <div class="flexfoot">
    <?php include("../footeradmin.php");?>
    </div>
</div>
</body>
</html>