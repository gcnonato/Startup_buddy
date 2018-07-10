<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$a=$userRow['email'];
$result = $DBcon->query("SELECT * FROM post_job WHERE Email='$a'");
$count = $result->num_rows;
$flag=false;
$flag1=false;
$flag2=false;

while ($row = mysqli_fetch_assoc($result)) {
$Company_Name1= $row['Company_Name'];
$Email1= $row['Email'];
$About_Company1= $row['About_Company'];
$Job_Post1=$row['Job_Post'];
$Job_Description1= $row['Job_Description'];
$No_of_Jobs_Available1= $row['No_of_Jobs_Available'];
$Who_Can_Apply1= $row['Who_Can_Apply'];
$Start_Date1= $row['Start_Date'];
$Apply_By1= $row['Apply_By'];
$Location1= $row['Location'];
$Type_of_Job1= $row['Type_of_Job'];

$split=explode(',',$Type_of_Job1);
$size = sizeof($split);
for($i=0;$i<$size;$i++) 
{ 
  if($split[$i]=="Work From Home") 
  {
    $flag=true;
  } 
  elseif ($split[$i]=="Full Time Job") {
    $flag1=true;
  }
  elseif ($split[$i]=="Internship"){
    $flag2=true;
  }
}
}

if(isset($_POST['edit_job'])) {
  $Email=$_POST['Email'];
  $Company_Name=$_POST['Company_Name'];
  $About_Company=$_POST['About_Company'];
  $Job_Post=$_POST['Job_Post'];
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

$in_ch=mysqli_query($DBcon,"update post_job"." set Email='$Email',Company_Name='$Company_Name',About_Company='$About_Company',Job_Post='$Job_Post',Job_Description= '$Job_Description', No_of_Jobs_Available='$No_of_Jobs_Available', Who_Can_Apply='$Who_Can_Apply', Start_Date='$Start_Date', Apply_By='$Apply_By', Location='$Location', Type_of_Job='$chk'"."where Email='$a'");  
  
  if($in_ch==1)  
   {  
      echo'<script>alert("Successfully Edited Posted Job.")
      window.location.href="home.php";
      </script>';  

   }  
else  
   {  
      echo'<script>alert("Failed To Edit")</script>';  
   }  
}

if(isset($_POST['delete_job']))
{
  $in_ch=mysqli_query($DBcon,"DELETE FROM post_job WHERE Email = '$a'");
  if($in_ch==1)  
   {  
      echo'<script>alert("Successfully Removed Posted Job.");
      window.location.href="home.php";
      </script>';
       
   }  
else  
   {  
      echo'<script>alert("Failed To Remove.")</script>';  
   } 
}
$DBcon->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Edit Posted Job</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
<link rel="stylesheet" href="css/home.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect guide for the people who are going to start a Startup.</p> 
  </div>
  <div id='cssmenu' class="navbar-fixed-top">
<ul>
   <li><a href='home.html'><span>Home</span></a></li>
   <li><a href="about1.php">About</a></li>
   <li class='active has-sub'><a href='#services'><span>Services</span></a>
      <ul>
         <li class='has-sub'><a href='recom.php'><span>Get Startup Ideas</span></a></li>
         <li class='has-sub'><a href='naming.php'><span>Naming</span></a></li>
         <li class='has-sub'><a href='logo.php'><span>Logo</span></a></li>
         <li class='has-sub'><a href='domain.php'><span>Domain</span></a></li>
         <li class='has-sub'><a href='marketing.php'><span>Marketing</span></a></li>
         <li class='has-sub'><a href='#'><span>Hire Interns</span></a>
            <ul>
               <li><a href='postjob.php'><span>Post Job</span></a></li>
               <li class='last'><a href='edit.php'><span>Edit/Delete Posted Job</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='contact1.php'><span>Contact</span></a></li>
   <li><a href='' style="margin-left: 18em" ><span class="glyphicon glyphicon-user"></span>Hello <?php echo $userRow['username'];?></a></li>
   <li class='last'><a onclick="window.location.href='logout.php?logout'" >Logout</a></li>
</ul>
</div>

<div class="signin-form">
  <div class="container">  
       <form class="form-signin" action="" method="post" id="register-form">
<?php        if($count==0)
{
  
?>
  <div class="alert alert-info" id="message">
    <strong>No Job Posted!!!</strong> 
  </div>
  <?php  
}
?>
        <h2 class="form-signin-heading"> Edit/Delete Posted Job</h2><hr />
         
        <div class="form-group">
          <label for="Company_Name" >Company Name:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter your Company Name" name="Company_Name" value="<?php if ($count==0) echo ""; else echo $Company_Name1 ?>" required  />
       </div>

        <div class="form-group">
          <label for="Email" >Email:&nbsp;</label>
        <input type="email" class="form-control" placeholder="Enter Email address for Communication" name="Email" value="<?php if ($count==0) echo ""; else echo $Email1 ?>" required  />
        </div>

        <div class="form-group">
          <label for="About_Company" >About Company:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write Something About Your Company (Max 1000 Characters)" id="About_Company" name="About_Company" required> <?php if ($count==0) echo ""; else echo $About_Company1 ?> </textarea>
        <div class="result1">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#About_Company').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result1").text(charCount + " chars");
    });
  });
</script>

        <div class="form-group">
          <label for="Job_Post" >Job Post:&nbsp;</label>
        <input class="form-control" placeholder="Write The Post for Application." id="Job_Post" name="Job_Post" value="<?php if ($count==0) echo ""; else echo $Job_Post1 ?> " required/> 
       </div>
      

       <div class="form-group">
          <label for="Job_Description" >Job Description:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write About The Job Description(Max 1000 Characters)" id="Job_Description" name="Job_Description" required> <?php if ($count==0) echo ""; else echo $Job_Description1 ?> </textarea>
        <div class="result2">0 chars</div>
       </div>
      <script>
  $(document).ready(function(){
    $('textarea#Job_Description').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result2").text(charCount + " chars");
    });
  });
</script>


       <div class="form-group">
          <label for="No_of_Jobs_Available" >Number of Jobs Available:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter Vacany Count" name="No_of_Jobs_Available" value="<?php if ($count==0) echo ""; else echo $No_of_Jobs_Available1 ?>" required  />
       </div>

       <div class="form-group">
          <label for="Who_Can_Apply" >Who Can Apply:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="What Qualities Should Candidate Have to Apply?(Max 500 Characters)" id="Who_Can_Apply" name="Who_Can_Apply" required ><?php if ($count==0) echo ""; else echo $Who_Can_Apply1 ?> </textarea>
        <div class="result3">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#Who_Can_Apply').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result3").text(charCount + " chars");
    });
  });
</script>


        <div class="form-group">
          <label for="Start_Date" >Start Date:&nbsp;</label>
        <input type="date" class="form-control" name="Start_Date" value="<?php if ($count==0) echo ""; else echo $Start_Date1 ?>" style="width: 25%" required  />
       </div>

       <div class="form-group">
          <label for="Apply_By" >Apply By Date:&nbsp;</label>
        <input type="date" class="form-control"  name="Apply_By" value="<?php if ($count==0) echo ""; else echo $Apply_By1 ?>" style="width: 25%" required  />
       </div>
     
     <div class="form-group">
          <label for="Location" >Location of Job:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Location of Job" name="Location" value="<?php if ($count==0) echo ""; else echo $Location1 ?>" required  />
       </div>
<?php
       if($flag==true) 
{
      ?>
      <div class="form-group">
          <label for="Type_of_Job" >Type of Job:&nbsp;</label>
  <input  type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Work From Home" ?>" checked  > Work From Home 
  <?php
  $flag=false;
} 
else 
{ 
  ?>
  <input  type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Work From Home" ?>"> Work From Home 
  <?php
}
if($flag1==true) 
{
      ?>
  <input style="margin-left: 2.5em" type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Full Time Job" ?>" checked  >  Full Time Job 
  <?php
  $flag1=false;
} 
else 
{ 
  ?>
  <input style="margin-left: 2.5em" type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Full Time Job" ?>"> Full Time Job 
  <?php
}
if($flag2==true) 
{
      ?>
  <input style="margin-left: 2.5em" type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Intern" ?>" checked  >Internship 
  <?php
  $flag2=false;
} 
else 
{ 
  ?>
  <input style="margin-left: 2.5em" type='checkbox' name='Type_of_Job[]' value="<?php if ($count==0) echo ""; else echo "Intern" ?>"> Internship 
  <?php
}

?>
</div>

      <hr />
        
        <div class="form-group">
            <button style="align-self: center; margin-left: 10em" type="submit" class="btn btn-default" name="edit_job"> Edit Job Posted
      </button> &nbsp; &nbsp;
      <button style="align-self: center;" type="submit" class="btn btn-default" name="delete_job"> Delete Job
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
