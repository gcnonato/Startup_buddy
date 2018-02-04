</!DOCTYPE html>
<html>

<head>
	
	<title>Register</title>
	
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

.label:after{
     content:"*" ;
     color:red   
     }

</style>

</head>

<body>

<h1 class="heading"> Register for Startup Buddy </h1>

<form class="form" action="/action_page.php">

        <div class="w3-section">

		  <label class="label" for="name">Name:</label>
		  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Full Name" name="name" required style="width:50%"><br><br>

		   <label class="label" for="email">Email:</label>
		   <input class="w3-input w3-border" type="email" placeholder="eg. abc@xyz.com" name="email" required style="width:50%"><br><br>
		  
           <label class="label" for="contact">Contact No.:</label>
          <input class="w3-input w3-border" type="number" placeholder="Enter Contact Number" name="contact" min="10" max="10"  required style="width:50%"><br><br>

          <label class="label" for="dob">Date of birth:</label>
          <input class="w3-input w3-border" type="date"  name="dob" required style="width:50%"><br><br>

          <label class="label" for="type">Type of signup:</label>
		  <input class="w3-input w3-border w3-margin-bottom" type="radio"  name="name" value="Startup_Planner" ">Startup Planner
		  	<input class="w3-input w3-border w3-margin-bottom" type="radio"  name="name" value="Intern" >Intern<br><br>

		  	<label class="label" for="password">Password:</label>
		  <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Password" name="pwd" required style="width:50%"><br><br>

		  <label class="label" for="confirm">Confirm Password:</label>
		  <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Confirm Password" name="con_pwd" required style="width:50%"><br><br>

	  

		  <button class="w3-button w3-block w3-green w3-section w3-padding" id="loginbtn" type="submit">Login</button>
		  
		  <p> Already Registered to Startup Buddy? <a href="login.php"> Login</a></p>

        </div>

      </form>


</body>

</html>