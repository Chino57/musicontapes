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
    <title>Modification Artiste </title>
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

        <!-- Objectif : créer une page pour que les contributeurs du site puissent modifier des données -->

        <!-- Appel à une base de donnée sur un fichier à part -->

    <?php include("../appelBDD.php");?>

    <?php

        // sélection des données à afficher sur la page

      $req = $bdd->prepare("SELECT id,nom,genremusical,anneeformation,membre1,membre2,membre3,membre4,photo FROM artistes WHERE id = :idArtiste");

      $req->execute(array
            ("idArtiste"=>$_GET["id"]));

      $donnees = $req->fetch();

      ?>
      <article>

        <h2>Modification artiste</h2>

        <!-- affichage du nom de l'artiste puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->

      <form action="traitementUpdateArtisteNom.php" method="POST">
      <p id="nontransparence">Nom:</br>
        <input type="text" name="updateArtisteNom" value=<?php echo $donnees["nom"];?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
</article>

<article>

    <!-- affichage du genre musical de l'artiste puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->

     <form action="traitementUpdateArtisteGenre.php" method="POST">
      <p id="nontransparence">Genre musical:</br>
        <input type="text" name="updateArtisteGenre" value=<?php echo htmlspecialchars($donnees["genremusical"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>
    <!-- affichage de l'année des débuts de l'artiste puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->

      <form action="traitementUpdateArtisteAnneeFormation.php" method="POST">
      <p id="nontransparence">Année de formation</br>
        <input type="text" name="updateArtisteAnneeFormation" value=<?php echo htmlspecialchars($donnees["anneeformation"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>
        <!-- affichage du ou des membres d'un groupe puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->

    <p id="nontransparence">membres du groupe:</p>

    <form action="traitementUpdateArtisteMembre1.php" method="POST">
      <p id="nontransparence">
        <input type="text" name="updateArtisteMembre1" value=<?php echo htmlspecialchars($donnees["membre1"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>

    <form action="traitementUpdateArtisteMembre2.php" method="POST">
      <p id="nontransparence"></br>
        <input type="text" name="updateArtisteMembre2" value=<?php echo htmlspecialchars($donnees["membre2"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>

    <form action="traitementUpdateArtisteMembre3.php" method="POST">
      <p id="nontransparence">
        <input type="text" name="updateArtisteMembre3" value=<?php echo htmlspecialchars($donnees["membre3"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>

    <form action="traitementUpdateArtisteMembre4.php" method="POST">
      <p id="nontransparence">
        <input type="text" name="updateArtisteMembre4" value=<?php echo htmlspecialchars($donnees["membre4"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    <article>

        <!-- affichage de la photo de l'artiste puis d'un formulaire permettant de modifier la donnée dans la base de donnée -->

    <form action="traitementUpdateArtistePhoto.php" method="POST">
      <p id="nontransparence">Photo:</br>
        <input type="text" name="updateArtistePhoto" value= <?php echo htmlspecialchars($donnees["photo"]);?>></br>
        <input type="hidden" name="IdArtiste" value=<?php echo $_GET["id"];?>>
        <input type="submit" name="valid" value="modifier" id="validform"></p>
    </form>
    </article>

    </section>
    <div class="flexfoot">
    <?php include("../footer.php");?>
            </div>
        </div>
    </body>
</html>

