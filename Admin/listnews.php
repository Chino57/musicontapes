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
    <link rel="stylesheet" href="../normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Liste News </title>
</head>
<body>
    <div class = "flexgénéral">
    <div class = "flexheadnav">
    <!-- inclusion header et nav dans des fichiers à part  -->
    
    <?php include("header.php");?>

    <?php include("navadmin.php");?>
    </div>

    <div class = "backgroundImage"></div>
    <section class = "sectionflex">

     <h2 class="titrederubrique">Liste des albums</h2>



    <?php include("appelBDD.php");?>

    <?php 

    $reponse = $bdd->query("SELECT id,contenu FROM news");

    $donnees = $reponse->fetch()

    ?>

    <p class="groupe"><?php echo "<a href=news.php?id=" .$donnees["id"]." class=lienclique>"?>
        <i><?php echo htmlspecialchars($donnees["artistes"])?></i>
        <strong><?php echo htmlspecialchars($donnees["nom"])?></strong>
        <?php echo "(". htmlspecialchars($donnees["annee"]).")</a>";?></p>
    
    <?php 

    $reponse->closeCursor();

    ?>  

    </section>
    <div class="flexfoot">
    <?php include("../footeradmin.php");?>
    </div>
</div>
</body>
</html>