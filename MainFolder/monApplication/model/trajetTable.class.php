<?php
// Inclusion de la classe trajet
require_once "trajet.class.php";

class trajetTable {

  public static function getTrajet($depart,$arrivee)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$trajetRep = $em->getRepository('trajet');
	$trajet = $trajetRep->findOneBy(array('depart' => $depart, 'arrivee' => $arrivee));	
	
	if ($trajet == false){
		echo 'Erreur sql getTrajet';
			   }
	return $trajet; 
	}

	public static function getVilles()	{
		$em = dbconnection::getInstance()->getEntityManager() ;

		$trajetRep = $em->getRepository('trajet');
		$trajets = $trajetRep->findBy(array());	

		for ($row=0 ; $row<sizeof($trajets) ; $row ++){
			$villes[$row] = $trajets[$row]->depart;
		}
		
		return array_unique($villes); 
		}

}
?>
