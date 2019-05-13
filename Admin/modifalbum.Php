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
    <link rel="stylesheet" href="modif.css">
    <link rel="stylesheet" href="../normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Modification Album </title>
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

        <!-- objectif : faire une page qui permet de modifier les données des fiches albums sélectionnés -->

        <!-- Appel à une base de donnée dans un fichier à part -->

    <?php include("../appelBDD.php");?>

    <?php 

    // sélection des éléments à afficher sur la page

    $req = $bdd->prepare("SELECT id,nom,artistes,critique,pochette,annee FROM albums WHERE id = :idAlbum");
    $req->execute(array
            ("idAlbum"=>$_GET["id"]));

    $donnees = $req->fetch();

    ?>

    <article>

    <h2>Element de la fiche album à modifier</h2>

    <!-- affichage du nom de l'album puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->
    
     <form action="traitementUpdateAlbumNom.php" method="POST">
      <p id="nontransparence">Nom de l'album:</br>
        <input type="text" name="updateAlbumNom" value=<?php echo htmlspecialchars($donnees["nom"]);?>></br>
        <input type="hidden" name="IdAlbum" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>

    </article>

    <article>

    <!-- affichage de l'artiste de l'album puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->
    <form action="traitementUpdateAlbumArtiste.php" method="POST">
      <p id="nontransparence">Artiste:</br>
        <input type="text" name="updateAlbumArtiste" value=<?php echo htmlspecialchars($donnees["artistes"]);?>></br>
        <input type="hidden" name="IdAlbum" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>
    <!-- affichage de la critique de l'album puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->
    <form action="traitementUpdateAlbumCritique.php" method="POST">
      <p id="nontransparence">Critique:<?php echo htmlspecialchars($donnees["critique"]);?></br>
        <textarea name="updateAlbumCritique" value></textarea></br>
        <input type="hidden" name="IdAlbum" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>
    <!-- affichage de la pochette de l'album puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->
    <form action="traitementUpdateAlbumPochette.php" method="POST">
      <p id="nontransparence">Pochette:</br>
        <input type="text" name="updateAlbumPochette" value=<?php echo htmlspecialchars($donnees["pochette"]);?>></br>
        <input type="hidden" name="IdAlbum" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>
        <!-- affichage de l'année de sortie de l'album puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->
     <form action="traitementUpdateAlbumAnnee.php" method="POST">
      <p id="nontransparence">Année de sortie:</br>
        <input type="text" name="updateAlbumAnnee" value=<?php echo htmlspecialchars($donnees["annee"]);?>></br>
        <input type="hidden" name="IdAlbum" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
</article>

</section>
    <div class="flexfoot">
    <?php include("../footeradmin.php");?>
    </div>
</div>
</body>
</html>