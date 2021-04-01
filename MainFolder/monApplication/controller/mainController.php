<?php

class mainController
{

	public static function helloWorld($request,$context) {

		$context->mavariable="hello world";
		return context::SUCCESS;
	}

	public static function superTest($request,$context)
    {
		if (empty($_GET["p1"]) or empty($_GET["p2"]))
			return context::NONE;

		$context->param1=$_GET["p1"];
		$context->param2=$_GET["p2"];
		return context::SUCCESS;
    }

	public static function index($request,$context){
		
		foreach (glob("monApplication/view/first*.php") as $filename) {
                  include $filename;
                }
		return context::SUCCESS;
	}

	public static function testGetVoyagesByTrajet($request,$context){
		
		if (empty($_GET["trajet"]))
			return context::NONE;
		$context->voyages=voyageTable::getVoyagesByTrajet($_GET["trajet"]);
		return context::SUCCESS;
	}

	public static function testGetReservationByVoyage($request,$context){
		
		if (empty($_GET["voyage"]))
			return context::NONE;
		$context->reservations=reservationTable::getReservationByVoyage($_GET["voyage"]);
		return context::SUCCESS;
	}

	public static function testGetUserById($request,$context){
		
		if (empty($_GET["id"]))
			return context::NONE;
		$context->theuser=utilisateurTable::getUserById($_GET["id"]);
		return context::SUCCESS;
	}

	public static function testGetUserByLoginAndPass($request,$context){
		
		if (empty($_GET["login"]) or empty($_GET["pass"]))
			return context::NONE;
		$context->theuser=utilisateurTable::getUserByLoginAndPass($_GET["login"],$_GET["pass"]);
		return context::SUCCESS;
	}

	public static function testGetTrajet($request,$context){
		
		echo 'testGetTrajet is called';

		if (empty($_GET["depart"])or empty($_GET["arrivee"]) )
			return context::NONE;
		$context->trajet=trajetTable::getTrajet($_GET["depart"],$_GET["arrivee"]);
		return context::SUCCESS;
	}

	public static function testGetAllUsers($request,$context){
		
		$context->users=utilisateurTable::getAllUsers();
		return context::SUCCESS;
	}

	public static function rechercherVoyage($request,$context){
		
		if(key_exists("depart",$request) && key_exists("arrivee",$request)){
            $trajet = trajetTable::getTrajet($request['depart'], $request['arrivee']);
            $context->voyages = voyageTable::getVoyagesByTrajet($trajet->id);
		}
		
		$context->villes = trajetTable::getVilles();
        return context::SUCCESS;
	}

	public static function ajaxRechercherVoyage($request,$context){
		
		if(key_exists("depart",$request) && key_exists("arrivee",$request)){
            $trajet = trajetTable::getTrajet($_REQUEST['depart'], $_REQUEST['arrivee']);
			$context->voyages = voyageTable::getVoyagesByTrajet($trajet->id);
			return context::SUCCESS;
		}
		
        return context::ERROR;
	}

	public static function testGetVoyagesByDepartArrivee($request,$context){
		
			if(key_exists("depart",$request) && key_exists("arrivee",$request)){
				$trajet = trajetTable::getTrajet($request['depart'], $request['arrivee']);
				$context->voyages = voyageTable::getVoyagesByTrajet($trajet->id);
				return context::SUCCESS;
			}
			return context::ERROR;
	}
}