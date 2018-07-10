<?php
include 'connect.php';
session_start();
if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$email=$userRow['email'];
$query1=mysqli_query($DBcon,"SELECT * from post_job LIMIT 1");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apply</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
<link rel="stylesheet" href="css/home.css">

<style type="text/css">
  p{
    font-size: 20px;
    text-align: center;
  }
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect platform for the people want to get a job in Startup.</p> 
 </div>
 <div id='cssmenu' class="navbar-fixed-top">
<ul>
   <li><a href='index_Intern.php'><span>Home</span></a></li>
   <li><a href='#contact'><span>Contact</span></a></li>
   <li><a href='' style="margin-left: 38em"><span class="glyphicon glyphicon-user"></span>Hello <?php echo $userRow['username'];?></a></li>
   <li class='last'><a onclick="window.location.href='logout.php?logout'" >Logout</a></li>
</ul>
</div>
<?php
while ($row = mysqli_fetch_array($query1)) :
    $Company_Name = $row['Company_Name'];
    $Email = $row['Email'];
    $About_Company = $row['About_Company'];
    $Job_Post=$row['Job_Post'];
$Job_Description= $row['Job_Description'];
$No_of_Jobs_Available= $row['No_of_Jobs_Available'];
$Who_Can_Apply= $row['Who_Can_Apply'];
$Start_Date= $row['Start_Date'];
$Apply_By= $row['Apply_By'];
$Location= $row['Location'];
$Type_of_Job= $row['Type_of_Job'];

    $output = " Company Name: $Company_Name <br />";
     $output1= "Email: $Email <br /> ";
     $output2= "About Company: $About_Company";
     $output3= "Job Post: $Job_Post";
     $output4= "Job Description: $Job_Description";
     $output5= "No of Jobs Available: $No_of_Jobs_Available";
     $output6= "Who Can Apply: $Who_Can_Apply";
     $output7= "Start Date: $Start_Date";
     $output8= "Apply By: $Apply_By";
     $output9= "Location: $Location";
     $output10= "Type of Job: $Type_of_Job";
     echo "<p><strong>$output</strong></p><br></div>";
    echo "<p><strong>$output1</strong></p><br>";
    echo "<p><strong>$output2</strong></p><br>";
    echo "<p><strong>$output3</strong></p><br>";
    echo "<p><strong>$output4</strong></p><br>";
    echo "<p><strong>$output5</strong></p><br>";
    echo "<p><strong>$output6</strong></p><br>";
    echo "<p><strong>$output7</strong></p><br>";
    echo "<p><strong>$output8</strong></p><br>";
    echo "<p><strong>$output9</strong></p><br>";
    echo "<p><strong>$output10</strong></p><br>";
    echo "<p><div class=\"alert alert-info\" id=\"message\"><strong>To apply for Job, email your resume to Company's Email Address mentioned above.</strong> </div></p>";
    endwhile;
$DBcon->close();

?>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chembur, Mumbai</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8550955534</p>
      <p><span class="glyphicon glyphicon-envelope"></span> dhirenkewlani@gmail.com</p>
     <p><span class="glyphicon glyphicon-envelope"></span> bhavna.khatwani@ves.ac.in</p>
      <p><span class="glyphicon glyphicon-envelope"></span> krima.shah@ves.ac.in</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
<p>&copy  2018start-up buddy</p>
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>