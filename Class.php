<?php
namespace jas\wind;
class cap
{
	# private $servername = "localhost";
	# private $username = "root";
	# private $password = "";
	# private $databasename = "students";
	
	public function __contruct() {
		# $servername = "localhost";
		# $username = "root";
		# $password = "";
		# $databasename = "students";
	}

	# function to return data from the database
	public function executeSelectQuery($conn, $sql) {
		return mysqli_query($conn, $sql);
	}
	
	# function to add data to the database
	public function executeQuery($conn, $sql) {
		return mysqli_query($conn, $sql);
	
	}
	
	public function getConnection() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "cap";

		return mysqli_connect($servername, $username, $password, $databasename);
	}
}

?>