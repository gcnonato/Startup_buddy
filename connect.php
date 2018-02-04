<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db=mysqli_select_db($conn, "startup_buddy") or die('MYSQL DATABASE ERROR');
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//else{
//echo "Connected successfully";}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 1e7eb4fb61b2eea837f413b9c9829db9d7660043
