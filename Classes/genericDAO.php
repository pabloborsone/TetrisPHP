<?php
class GenericDAO {
public $servername;
public $username;
public $password;
public $conn = null;	

function __construct() {
	$this->servername = "localhost";
	$this->username = "root";
	$this->password = "ftlimeira";
	$this->dbname ="gametetris";
}

function databaseAccess() {
	try {
	$conn = new PDO("mysql:host={$this->servername}; dbname={$this->dbname}", $this->username, $this->password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully";
	    return $conn;
    } catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
    }
}
}
?>