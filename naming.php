<?php

include_once 'header.php';

?>

<html>
<head>
<title>Naming</title>
<style>

#myForm
      {
         margin: 0 400px;
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
<body>
   
		
      <form id = 'myForm'>
          <input type = 'text' id = 'names' name='names' style="width: 50%;"
           placeholder="Enter name of your brand eg.purse"/>
         
			 <input type = 'button' onclick = 'ajaxFunction()' value = ' Get Your Own Domain Name'/>
    <br><br>
			
      </form>
      
      <div id = 'ajaxDiv'>
<p style="text-align:center"> The secret to naming a business is a name that serves as an extension of your brand.</p>
<p style="text-align:center">Some startups focus on affordability, while other focus on high quality product or service.</p>
<p style="text-align:center">The aspects of your business, also known as your branding and positioning, are more important to your naming process than your vertical.
</p>
<p style="text-align:center">Think about it, a lot of startups today have catchy names while the more high-end ones have classic names.
</p>

      </div>
      <br><br>
      <?php
include_once 'footer.php';
?>

   </body>
</html>
