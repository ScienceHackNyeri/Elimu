<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "elimu";

$bd = mysql_connect($server, $username, $password) or die("Could not connect database");
mysql_select_db($database, $bd) or die("Could not select database");

?>



