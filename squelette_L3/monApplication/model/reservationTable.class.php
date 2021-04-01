<?php
// Inclusion de la classe reservation
require_once "reservation.class.php";

class reservationTable {

  public static function getReservationByVoyage($voyage)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$reservationRep = $em->getRepository('reservation');
	$res = $reservationRep->findBy(array('voyage' => $voyage));	
	
	if ($res == false){
		echo 'Erreur sql';
			   }
	return $res; 
	}

}
?>
