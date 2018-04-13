<?php

include "db_config.php";

class dbConn{

	public $db;
	public $conn;
	
	public function __construct(){
		$this->db=mysqli_connect(SERVERNAME,USER,PASS,DB);
		
		if($this->db->connect_error)
		{
			die('Error connecting Database');
		}

		
	}


}


?>