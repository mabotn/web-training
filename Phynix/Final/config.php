<?php

class config{
	private $conn;
	function __construct(){
		$servername="localhost";
		$dbname="formation";
		$username="root";
		$password="";
		$this->conn=new PDO("mysql:host=$servername;
		dbname=$dbname",$username,$password);

	}
	function getConnexion(){
		return $this->conn;
	}
}

?>
