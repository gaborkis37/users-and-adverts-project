<?php

class  user {
	
	protected $users = [];
	
	public function __construct () {
		
	}
	
	private function load() {
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM user";
		$this->users = $mysqli->query($sql_query);
	}
	
	public function getUsers() {
		$this->load();
		return $this->users;
	}
	
	function findUsernameById($id,$usersList) {
			echo $usersList[$id-1]['name'];
	}
	
}