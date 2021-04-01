<?php

use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity
 * @Table(name="jabaianb.voyage")
 */
class voyage{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	
	public $id;

	/**
	* @ManyToOne(targetEntity="utilisateur")
	* @JoinColumn(name="conducteur", referencedColumnName ="id")
	*/
	public $conducteur;
		
	/**
	* @ManyToOne(targetEntity="trajet")
	* @JoinColumn(name="trajet", referencedColumnName ="id")
	*/
	public $trajet;

	/** @Column(type="string", length=45) */ 
	public $tarif;

	/** @Column(type="string", length=45) */ 
    public $nbplace;
	
	/** @Column(type="string", length=45) */ 
	public $heuredepart;
	
	/** @Column(type="string", length=45) */ 
    public $contraintes;
}

?>