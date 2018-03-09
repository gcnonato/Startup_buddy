<?php

session_start();

require_once 'connect.php';

if (isset($_SESSION['userSession'])!="") 
{
	header("Location: home.php");
	
exit;

}


if (isset($_POST['btn-login'])) {
	
	
$email = strip_tags($_POST['email']);
	
$password = strip_tags($_POST['password']);
	
	
$email = $DBcon->real_escape_string($email);
	
$password = $DBcon->real_escape_string($password);
	
	
$query = $DBcon->query("SELECT user_id, email, password FROM register WHERE email='$email'");
	
$row=$query->fetch_array();
	
	
$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	
if (password_verify($password, $row['password']) && $count==1) {
		
$_SESSION['userSession'] = $row['user_id'];
		
header("Location: home.php");
	
} 
else
 {
		
$msg = "<div class='alert alert-danger'>
					
<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password!
</div>";
	
}
	
$DBcon->close();

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="css/home.css">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="style.css" type="text/css" />



</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
  <h1>Start-Up Buddy</h1> 
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
      <li><a href="home.html">Home</a></li>
        <li><a href="about.php">About</a></li>
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
        
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="index.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="signin-form">

	
<div class="container">

<form class="form-signin" method="post" id="login-form">

<h2 class="form-signin-heading">Login.</h2>
<hr/>

<?php
if(isset($msg))
{
echo $msg;
}

?>
        
        
<div class="form-group">
        
<input type="email" class="form-control" placeholder="Email address" name="email" required />
        
<span id="check-e"></span>
        
</div>

<div class="form-group">

<input type="password" class="form-control" placeholder="Password" name="password" required />
        
</div>      
     	
<hr />
       
<div class="form-group">
            
<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		
<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
	</button> &nbsp;&nbsp;&nbsp;
             
<a href="home.html" class="btn btn-default" style="float:right;">Cancel</a>           
<a href="register.php" class="btn btn-default">Register Here</a>
                   
</div>      
</form>    
</div>
</div>
<?php
include_once 'footer.php';
?>

</body>
</html>
