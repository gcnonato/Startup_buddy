<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>

<head>

 <meta charset="UTF-8">
  <meta name="description" content="Startup Buddy">
  <meta name="keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
  <meta name="author" content="Krima">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<!-- home -->
	<link rel="stylesheet" href="css/welcomecss.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>

<body>
	
<header>

<h1 > Startup Buddy
	</h1>
	<h3> Welcome to Startup Buddy </h3>
   </header>
<font size="5px" color="black" style="float:right"><span class="glyphicon glyphicon-user"></span> Hello <?php echo $userRow['username'];?></font>

<button  class="button" onclick="window.location.href='logout.php?logout'" /><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</button>

</script>



</body>
</html>
