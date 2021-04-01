<?php

use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity
 * @Table(name="jabaianb.reservation")
 */
class reservation{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string", length=45) */ 
	public $voyage;

	/** @Column(type="string", length=45) */ 
	public $voyageur;
	
}

?>
