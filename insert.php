<?php
//error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  
$name = $_POST['name'];
  $sports = $_POST['sports'];
  $fashion = $_POST['fashion'];
  $entertainment = $_POST['entertainment'];
  $health_and_care = $_POST['health_and_care'];
  $education = $_POST['eductaion'];
  $food = $_POST['food'];
  
  // Attempt insert query execution
$sql = "INSERT INTO predict (name,fashion,sports,entartainment,health_and_care,food,education) VALUES ('$name', '$fashion', '$sports','$entertainment','$health_and_care','$food','$education')";
if(mysqli_query($link, $sql)){
    //echo "Records inserted successfully.";
	header('Location: eg.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



  ?>