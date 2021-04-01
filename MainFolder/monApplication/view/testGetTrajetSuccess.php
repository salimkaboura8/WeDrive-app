<?php
		echo nl2br ("\n\n Trajet de ") .$_GET["depart"].(" vers ").$_GET["arrivee"].(" :<br /><br />");

		$monTrajet = $context->trajet;

			echo "Id : ".$monTrajet->id."<br />"  ; 
			echo "Depart : ".$monTrajet->depart."<br />" ;
			echo "Arrivee : ".$monTrajet->arrivee."<br />" ;
			echo "Distance : ".$monTrajet->distance."<br /><br /><br />" ;  ?>