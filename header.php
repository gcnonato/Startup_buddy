<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/home.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect guide for the people who are going to start a start-up.</p> 
  </div>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php">Home</a></li>
        <li><a href="about1.php">About</a></li>
         <li>
<a href="#services">Services <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="recom.php">Get Startup Ideas</a></li>
<li><a href="naming.php">Naming</a></li>
<li><a href="#">Logo</a></li>
<li><a href="domain.php">Domain</a></li>
<li><a href="#">Marketing</a></li>
<li><a href="#">Hire Interns</a></li>
</ul>
</li>
        
        <li><a href="contact1.php">Contact</a></li>
        <li><a href="" ><span class="glyphicon glyphicon-user"></span> 
  Hello <?php echo $userRow['username'];?></a></li>

        <li><a onclick="window.location.href='logout.php?logout'">Logout</a></li>
       </ul>
    </div>
  </div>
</nav>


</body>
</html>