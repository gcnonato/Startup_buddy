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

<!-- Trigger/Open The Modal -->
<button id="Login">Login</button>

<button id="Register">Register</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span> <br><br>
    </div>
    <div class="modal-body">
     <form class="form" action="" method="post" >
    <input type="button" id="login1" name="login1" value="I need a Photographer">
	<p align="centre" style="font-size:20px "> ----------------or---------------- </p>
	<input type="button" id="register" name="register" value="I am a Photographer">
    </form>
	<br>
    </div>
    
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("Login");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
