<?php
		echo nl2br ("\n\n L'utilisateur avec l'id ").$_GET["id"].(" :  </b><br /><br />");

		$myUser = $context->theuser;
		
			echo "Id : ".$myUser->id."<br />"  ; 
			echo "Identifiant : ".($myUser)->identifiant."<br />" ;
			echo "Mot de Passe : ".($myUser)->pass."<br />" ;
			echo "Nom : ".($myUser)->nom."<br />" ;
			echo "Prenom : ".($myUser)->prenom."<br />" ;
			echo "Avatar : ".($myUser)->avatar."<br />" ;
			echo nl2br ("\n\n");

		echo nl2br ("\n\n");  ?>