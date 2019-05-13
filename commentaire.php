<?php 

if (isset($_SESSION["pseudo"])) 
{
	  include("formulairecommentaire.php");
}

else 
{
	include("notcommentaire.php");
}

