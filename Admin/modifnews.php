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
    <title>Modification News</title>
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

         <!-- objectif : faire une page qui permet de modifier les données des news sélectionnés -->

        <!-- Appel à une base de donnée dans un fichier à part -->

    <?php include("../appelBDD.php");?>

    <?php 

    // sélection des données à faire apparaitre sur la page

    $req = $bdd->prepare("SELECT id,contenu FROM news WHERE id = :idNews");
    
    $req->execute(array
         ('idNews'=>$_GET["id"]));


    $donnees = $req->fetch();

    ?>
    <!-- mise en forme des données affichés suivi d'un formulaire pour modifier cette donnée dans la base de donnée -->

    <article>
    <h2>Modification de la news</h2>
    <form action="updateNews.php" method="POST">

    <p id="nontransparence">
    <input type="hidden" name="idNews" value=<?php echo $_GET["id"];?>></p>
    <p id="nontransparence">
    Contenu:<?php echo htmlspecialchars($donnees["contenu"])?></br>
    <textarea name="updateNewsContenu"></textarea></p>

    <p id="nontransparence">
    <input type="submit" name="validform" value="modifier" id="validform"></p>
    </form>

    </article>

    <?php
    ?>  

    </section>
    <div class="flexfoot">
    <?php include("../footeradmin.php");?>
    </div>
</div>
</body>
</html>