<div
<?php
		echo nl2br ("<b>\n\n Les reservations correspondant au voyage ") .$_GET["voyage"] .(" :</b><br /><br />");

		$maTable = $context->reservations;
		for ($row=0 ; $row<sizeof($maTable) ; $row ++){
			echo "Id : ".($maTable[$row])->id."<br />"  ; 
			echo "Voyage : ".($maTable[$row])->voyage."<br />" ;
			echo "Voyageur : ".($maTable[$row])->voyageur."<br /><br /><br />" ;
		}

		echo nl2br ("\n\n");  ?>