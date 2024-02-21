<?php

$servername = "localhost";
$serveruser = "root";
$password = "";
$dbname = "radoc";

$conn = new mysqli($servername, $serveruser, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". mysqli_connect_error());
}

?>