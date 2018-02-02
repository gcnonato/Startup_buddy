<!DOCTYPE html>

<html>

<head>

<title> Login for Customer</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style >
	

.form {
   margin-left:auto;
   margin-right:auto;
   width:50%;
   align-self: center;
   
}

.heading{
	text-align: center;
}

</style>

</head>

<body>

	<h1 class="heading"> Login to Startup Buddy </h1>

<form class="form" action="/action_page.php">

        <div class="w3-section">
		  
		  <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:50%"><br><br>
		  		  
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:50%"><br><br>
		  
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Me <br><br>
		  
		  <button class="w3-button w3-block w3-green w3-section w3-padding" id="loginbtn" type="submit">Login</button>
		  
		  <p> New to Startup Buddy? <a href="register.php"> Sign Up</a></p>

        </div>

      </form>

</body>

</html>