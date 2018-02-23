<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="Startup Buddy">
  <meta name="keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
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
      <style type="text/css">
      #myForm
      {
         width: 300px;
    margin: 0 auto;
      }
      </style>
      <script language = "javascript" type = "text/javascript">
         
            //Browser Support Code
            function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDiv');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var names = document.getElementById('names').value;
               ajaxRequest.open("GET", "naming_backend.php?names="+names, true);
               ajaxRequest.send(); 
            }
        
      </script>

      <h1 > Startup Buddy
   </h1>
   <h3> Welcome to Startup Buddy </h3>
   </header>
   <button  class="button" style="float: right;" onclick="window.location.href='logout.php?logout'" /><span class="glyphicon glyphicon-log-out">
</span>&nbsp;Logout</button>
<font size="5px" color="black" style="float:right"><span class="glyphicon glyphicon-user"></span> Hello <?php echo $userRow['username'];?></font>
&nbsp;&nbsp;


		
      <form id = 'myForm'>
          <input type = 'text' id = 'names' name='names'/>
         
			 <input type = 'button' onclick = 'ajaxFunction()' value = ' Generate Names'/>
			
      </form>
      
      <div id = 'ajaxDiv'></div>
   </body>
</html>
