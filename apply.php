<?php
include 'connect.php';
if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}
$query1 = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query1->fetch_array();

$query=mysqli_query($DBcon,"SELECT * from post_job");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>start-up buddy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
<link rel="stylesheet" href="css/home.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect platform for the people want to get a job in Startup.</p> 
 </div>
 <div id='cssmenu' class="navbar-fixed-top">
<ul>
   <li><a href='home.html'><span>Home</span></a></li>
   <li><a href="about1.php">About</a></li>
   <li class='active has-sub'><a href='#services'><span>Services</span></a>
      <ul>
         <li class='has-sub'><a href='recom.php'><span>Get Startup Ideas</span></a></li>
         <li class='has-sub'><a href='naming.php'><span>Naming</span></a></li>
         <li class='has-sub'><a href=''><span>Logo</span></a></li>
         <li class='has-sub'><a href='domain.php'><span>Domain</span></a></li>
         <li class='has-sub'><a href=''><span>Marketing</span></a></li>
         <li class='has-sub'><a href='#'><span>Hire Interns</span></a>
            <ul>
               <li><a href='postjob.php'><span>Post Job</span></a></li>
               <li class='last'><a href='edit.php'><span>Edit Posted Job</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='contact1.php'><span>Contact</span></a></li>
   <li><a href='' style="margin-left: 18em"><span class="glyphicon glyphicon-user"></span>Hello <?php echo $userRow['username'];?></a></li>
   <li class='last'><a onclick="window.location.href='logout.php?logout'" >Logout</a></li>
</ul>
</div>


<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Available jobs for you</h2>
    <h4>Choose from thousands of companies</h4>
  </div>

<?php
while ($row = mysqli_fetch_array($query)) :
    $Company_Name = $row['Company_Name'];
    $Email = $row['Email'];
    $About_Company = $row['About_Company'];
    $output = " $Company_Name <br />";
     $output1= "Email: $Email <br /> ";
     $output2= "About Company: $About_Company";
     echo "<div class=\"row slideanim\">";
    echo "<div class=\"col-sm-12 col-xs-1\">";
      echo "<div class=\"panel panel-default\">"; 
    echo "<div class=\"panel-heading\"><p><strong>$output</strong></p></div>";
    echo "<div class=\"panel-body\">"; 
    echo "<p><strong>$output1</strong></p>";
    echo "<p><strong>$output2</strong></p>";
    echo "<button class=\"btn btn-lg\">View Details</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
endwhile;
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