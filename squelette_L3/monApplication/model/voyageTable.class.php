<?php
// Inclusion de la classe voyage
require_once "voyage.class.php";

class voyageTable {

  public static function getVoyagesByTrajet($trajet)
	{
				$em = dbconnection::getInstance()->getEntityManager() ;

				$voyageRep = $em->getRepository('voyage');
				$v = $voyageRep->findBy(array('trajet' => $trajet));	
	
	if ($v == false){
		echo ' Erreur';
			   }
	return $v; 
	}
}
?>
