<?php

include_once 'header.php';


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>Recommend</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>

  <link rel="stylesheet" href="css/home.css">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="container">
<form action="insert.php" method="post">
 <div class="form-group">
 Name:<input type="text" name="name" class="form-control" placeholder="Enter your name" required ><br><br>
 </div>
 <div class="form-group">
 Sports:<input type="text" name="sports" class="form-control" placeholder="Rate from 1 to 5" ><br><br>
 </div>
 <div class="form-group">
   Fashion:<input type="text" name="fashion" class="form-control" placeholder="Rate from 1 to 5" ><br>
   </div>
   <div class="form-group">
    Entertainment:<input type="text" name="entertainment" class="form-control" placeholder="Rate from 1 to 5"><br>
    </div>
    <div class="form-group">
	 Health_and_Care:<input type="text" name="health_and_care" class="form-control" placeholder="Rate from 1 to 5"><br>
 </div>
 <div class="form-group">
	  Education:<input type="text" name="education" class="form-control" placeholder="Rate from 1 to 5"><br>
  </div>
  <div class="form-group">
	   Food:<input type="text" name="food" class="form-control" placeholder="Rate from 1 to 5" ><br>
   </div>
  <input class="form-control" type="submit">
</form>
<br><br>
</div>
<?php 
include 'footer.php';
?>

</body>
</html>
