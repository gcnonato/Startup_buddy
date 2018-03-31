<!DOCTYPE html>
<html lang="en">
<head>

  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Startup Buddy">
  <meta name="keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
  <link rel="stylesheet" href="css/home.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
<li><a href="postjob.php">Hire Interns</a></li>
</ul>
</li>
        
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="index.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect guide for the people who are going to start a start-up.</p> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2 style="margin: 0 300px;">About Us</h2><br>
      <h4> In order to guide the new startup this website will help you to take the necessary steps in a
    systematic way and can be used to check that all the appropriate steps are being taken so that the management 
    of the startup get's more easy.</h4><br>
    <p>This start-up buddy is for entrepreneurs who are looking to start a company as well as those
    in the process of building one. We don’t have all of the answers but we’re confident this website
    will put you on a much better path and help you avoid many obstacles.</p> 
      <p>We provide you with everything that you need to start and grow.</p>
      <br><a href="#contact" button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2 style="margin: 0 150px;">Our Values</h2><br>
      <h4><strong>MISSION:</strong> “ Made in india “ this has became a revolution for all the people.
    In order to encourage this moment it is important to make sure that the idea of the person who is going to
    start a business should have done a proper study and should follow all the appropriate steps.
    Our website will give all the necessary resources and guidelines to the person so that the chances of
    failure of startup should be minimized. We guarantee you the best outcome. </h4><br>
      <p><strong></strong> Scroll Down and let's get started. </p><p> It's time to set up your own company .</p> <p>All the best for your Start-up.!</p>
    </div>
  </div>
</div>

<?php
include_once 'footer.php';
?>

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