<?php
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = 'Trial156295';
	private $_database = 'useradvert';

	public static function getInstance() {
		if(!self::$_instance) { 
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		if(mysqli_connect_error()) {
			trigger_error("Connection not successfull:  " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}

	public function getConnection() {
		return $this->_connection;
	}
}
?>