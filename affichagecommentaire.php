<article>
        <!-- Affichage des commentaires si il y en a dans la news -->
        <h2>Commentaire</h2>

        <?php

        $req = $bdd->prepare("SELECT auteur,contenu,DATE_FORMAT(datecom,'%d/%m/%Y à %Hh%i') AS date_com FROM commentaire WHERE id_news = :idnews");

        $req->execute(array
        ('idnews' => $_GET["id"]));

        $donnees = $req->fetch();
        ?>

        <p id="nontransparencecommentaire"><?php echo htmlspecialchars($donnees["contenu"]);?></br>

            par <?php echo htmlspecialchars($donnees["auteur"]);?> le <?php echo htmlspecialchars($donnees["date_com"]);?>
        </p>
        </article>