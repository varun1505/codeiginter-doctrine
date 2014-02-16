<?php
namespace Entitiy;

/**
 * @Entity 
 * @Table(name="admin_user")
 */

class AdminUser extends User {
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $firstName;
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @param unknown_type $id        	
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 *
	 * @param unknown_type $firstName        	
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	
	
	
}