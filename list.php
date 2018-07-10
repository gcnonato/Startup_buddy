<?php
include "connect.php";
session_start();
if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$query1= $DBcon-> query("SELECT * From apply where Email='krima.shah@gmail.com'");
//$userRow1= $query1->fetch_array();
while ($row = mysqli_fetch_assoc($query)) {
echo $row['username'];
echo $row['email'];
echo $row['contact'];
echo $row['dob'];
}

?>