<?php
$hostname = "localhost";
$username = "root";
$password = "";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
//select a database to work with
$selected = mysql_select_db("startup_buddy",$dbhandle) 
  or die("Could not select examples");
?>
