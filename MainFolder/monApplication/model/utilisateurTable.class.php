<?php
// Inclusion de la classe utilisateur
require_once "utilisateur.class.php";

class utilisateurTable {

  public static function getUserByLoginAndPass($login,$pass)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
	
	if ($user == false){
		echo 'Erreur sql';
			   }
	return $user; 
	}

	public static function getAllUsers()
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$users = $userRepository->findBy(array());	
	if ($users == false){
		echo 'Erreur sql get All Users';
			   }
			   
	return $users; 
	}

	public static function getUserById($id)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$myuser = $userRepository->findOneBy(array('id' => $id));	
	
	if ($myuser == false){
		echo 'Erreur sql';
			   }
	return $myuser; 
	}

}


?>
