<?php
namespace de\RaumZeitLabor\PartDB2\Session;
declare(encoding = 'UTF-8');

use de\RaumZeitLabor\PartDB2\Auth\User;

/** @Entity @Table(name="sessions") */
class Session {
	
	/** @Id @Column(type="integer") 
	 *  @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/** @Column(length=50) */
	private $sessionid;
	
	/**
	 * @ManyToOne(targetEntity="de\RaumZeitLabor\PartDB2\Auth\User")
	 * @JoinColumn(name="user", referencedColumnName="username")
     */
	private $user;
	
	public function __construct () {
		
	}
	
	public function start () {
		session_start();
		
		$this->sessionid = session_id();
	}
	
	public function getSessionID () {
		return $this->sessionid;
	}
	
	public function resume ($session) {
		session_id($session);
		session_start();
		
		$this->sessionid = session_id();
	}
	
	public function getUser () {
		return $this->user;
	}
	
	public function setUser (User $user) {
		$this->user = $user;
	}
	
}
?>