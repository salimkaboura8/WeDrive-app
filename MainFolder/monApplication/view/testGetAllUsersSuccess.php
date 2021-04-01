<?php
        echo nl2br ("<b>\n\n Liste users ");

		$maTable = $context->users;
		for ($row=0 ; $row<sizeof($maTable) ; $row ++){
			echo "nom : ".($maTable[$row])->nom."<br />"  ; 
			echo "prenom : ".($maTable[$row])->prenom."<br />" ;
		}

		echo nl2br ("\n\n");  ?>