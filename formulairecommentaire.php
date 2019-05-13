
<form action="traitementCommentaires.php" method="POST">
            <h2>Formulaire de commentaire</h2>
            <p id="formatnews"><textarea name="commentaireNews" id="commentaireNews"></textarea></br>
            <input type="hidden" name="idNews" value=<?php echo $_GET["id"];?>>
            <input type="hidden" name="auteur" value=<?php echo $_SESSION["pseudo"];?>>
            <input type="submit" name="valider" id="validcom">
            </p>
      </form>