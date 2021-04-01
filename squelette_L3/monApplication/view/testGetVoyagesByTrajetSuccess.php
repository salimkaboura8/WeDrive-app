<?php
		echo nl2br ("<b>\n\n Les voyages correspondant au trajet ") .$_GET["trajet"] .(" :  </b><br /><br />");

		$maTable = $context->voyages;
		for ($row=0 ; $row<sizeof($maTable) ; $row ++){
			echo "Id : ".($maTable[$row])->id."<br />"  ; 
			echo "Conducteur : ".($maTable[$row])->conducteur."<br />" ;
			echo "Trajet : ".($maTable[$row])->trajet."<br />" ;
			echo "Tarif : ".($maTable[$row])->tarif."<br />" ;
			echo "Nombre de places : ".($maTable[$row])->nbplace."<br />" ;
			echo "Heure de depart : ".($maTable[$row])->heuredepart."<br />" ;
			echo nl2br ("\n\n");
		}

		echo nl2br ("\n\n");  ?>