<!-- Mise en forme du Header utilisé après login -->
  <header>
  <div class="logonom">
  <img src="\projet\sunset80.png" alt="logo music on tapes" id="logo">
  <h1 id="nomSite">Music on tapes</h1></div>
  <form action="deconnexion.php" action="POST" id="deconnexion">
  <p class="loginformat">Bienvenue <?php echo $_SESSION["pseudo"];?></br>
  <input type="submit" name="deconnexion" id="bouton" value="deconnexion">
</p>
  </form>
  </header>