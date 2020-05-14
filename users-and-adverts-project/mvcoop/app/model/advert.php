<?php

class  advert {
	
	protected $adverts = [];
	protected $users = [];
	
	public function __construct () {
		
	}
	
	private function loadAdverts() {
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM advertisement";
		$this->adverts = $mysqli->query($sql_query);
	}
	
	private function loadUsers() {
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM user";
		$result = $mysqli->query($sql_query);
		$this->users = $result->fetch_all(MYSQLI_ASSOC);
	}
	
	public function getAdverts() {
		$this->loadAdverts();
		return $this->adverts;
	}
	
	public function getUsers() {
		$this->loadUsers();
		return $this->users;
	}
	
}