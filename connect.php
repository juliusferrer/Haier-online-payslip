<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_payroll";

$mysqli = new mysqli($servername, $username, $password, $dbname);

 # Code block if the database is connected
	// if($mysqli -> connect_errno){
	// 	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
 //  exit();
	// }
	// else {
	// 	echo "Database Connected";
	// }

?>