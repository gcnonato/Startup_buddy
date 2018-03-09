
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

<!-- Container (Contact Section) -->
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