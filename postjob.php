<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


if(isset($_POST['post_job'])) {
	
	
  $Email=$_POST['Email'];
  $Company_Name=$_POST['Company_Name'];
  $About_Company=$_POST['About_Company'];
  $Job_Description=$_POST['Job_Description'];
  $No_of_Jobs_Available=$_POST['No_of_Jobs_Available'];
  $Who_Can_Apply=$_POST['Who_Can_Apply'];
  $Start_Date=$_POST['Start_Date'];
  $Apply_By=$_POST['Apply_By'];
  $Location=$_POST['Location'];
  $checkbox1=$_POST['Type_of_Job'];  
  $chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.","; 
   }  

$in_ch=mysqli_query($DBcon,"INSERT INTO request_quote(Email,Company_Name,About_Company,Job_Description,No_of_Jobs_Available,Who_Can_Apply,Start_Date,Apply_By,Location,Type_of_Job) VALUES('$Email','$Company_Name','$About_Company','$Job_Description','$No_of_Jobs_Available','$Who_Can_Apply','$Start_Date','$Apply_By','$Location','$chk')");  
  
  if($in_ch==1)  
   {  
      echo'<script>alert("Successfully Posted Job.")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Post")</script>';  
   }  

	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
<title> Post A Job</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
  <script type="text/javascript" src="js/count.js"></script>

  <link rel="stylesheet" href="css/home.css">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<style >
	


</style>

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

        <li><a  onclick="window.location.href='logout.php?logout'">Logout</a></li>
       </ul>
    </div>
  </div>
</nav>

<div class="signin-form">
	<div class="container">  
       <form class="form-signin" action="" method="post" id="register-form">
        <h2 class="form-signin-heading">Post A Job</h2><hr />
         
      

        <div class="form-group">
          <label for="Company_Name" >Company Name:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter your Company Name" name="Company_Name" required  />
       </div>

        <div class="form-group">
          <label for="Email" >Email:&nbsp;</label>
        <input type="email" class="form-control" placeholder="Enter Email address for Communication" name="Email" required  />
        </div>

        <div class="form-group">
          <label for="About_Company" >About Company:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write Something About Your Company (Max 1000 Characters)" id="About_Company" name="About_Company" required></textarea>
        <div class="result">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#About_Company').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result").text(charCount + " chars");
    });
  });
</script>


       <div class="form-group">
          <label for="Job_Description" >Job Description:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write About The Job Description(Max 1000 Characters)" id="Job_Description" name="Job_Description" required></textarea>
        <div class="result1">0 chars</div>
       </div>
      <script>
  $(document).ready(function(){
    $('textarea#Job_Description').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result1").text(charCount + " chars");
    });
  });
</script>


       <div class="form-group">
          <label for="No_of_Jobs_Available" >Number of Jobs Available:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter Vacany Count" name="No_of_Jobs_Available" required  />
       </div>

       <div class="form-group">
          <label for="Who_Can_Apply" >Who Can Apply:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="What Qualities Should Candidate Have to Apply?(Max 500 Characters)" id="Who_Can_Apply" name="Who_Can_Apply" required ></textarea>
        <div class="result2">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#Who_Can_Apply').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result2").text(charCount + " chars");
    });
  });
</script>


        <div class="form-group">
        	<label for="Start_Date" >Start Date:&nbsp;</label>
        <input type="date" class="form-control"  name="Start_Date" style="width: 25%" required  />
       </div>

       <div class="form-group">
          <label for="Apply_By" >Apply By Date:&nbsp;</label>
        <input type="date" class="form-control"  name="Apply_By" style="width: 25%" required  />
       </div>
     
     <div class="form-group">
          <label for="Location" >Location of Job:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Location of Job" name="Location" required  />
       </div>

       <div class="form-group">
          <label for="Type_of_Job" >Type of Job:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox"  value="Work From Home"  name="Type_of_Job[]"> Work From Home
        <input style="margin-left: 2.5em" type="checkbox"  value="Full Time Job"  name="Type_of_Job[]"> Full Time Job
        <input style="margin-left: 2.5em" type="checkbox"  value="Internship"  name="Type_of_Job[]"> Intern
       </div>
  
     	<hr />
        
        <div class="form-group">
            <button style="align-self: center;" type="submit" class="btn btn-default" name="post_job"> Post Job
			</button> &nbsp; &nbsp;  
</div>
            
      </form>
    </div>
    
</div>
<?php
include_once 'footer.php';
?>

</body>
</html>
