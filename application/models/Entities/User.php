<?php
namespace Entitiy;
/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"user" = "User", "admin" = "AdminUser"})
 */
class User {
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $username;
	
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $password;
	
	/**
	 * @Column(type="string", length=255, unique=true, nullable=false)
	 */
	protected $email;
	
	public function getId() {
		return $this->id;
	}
		
	public function getUsername() {
		return $this->username;
	}
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
}