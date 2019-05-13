<!-- script pour décider quel header sera affiché à l'utilisateur -->

<?php 

if (isset($_SESSION["pseudo"]))
{
	include("headersession.php");
}

else
	{
		include("header.php");

	}