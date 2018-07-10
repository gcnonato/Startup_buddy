<?php

include_once 'header.php';

?>

<html>
<head>
<title>Logo</title>
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
               ajaxRequest.open("GET", "logo_backend.php?names="+names, true);
               ajaxRequest.send(); 
            }
        
      </script>
<body>
   
		
      <form id = 'myForm'>
          <input type = 'text' id = 'names' name='names' style="width: 50%;"
           placeholder="Enter name of your company eg.purse"/>
         
			 <input type = 'button' onclick = 'ajaxFunction()' value = ' Get Your Own Logo'/>
    <br><br>
			
      </form>
      
      <div id = 'ajaxDiv'>
<p style="text-align:center"> What Your Logo Says About You – Advice about creating a logo to reflect your brand identity.</p>
<p style="text-align:center"> What Makes a Good Logo? – More advice to create a great logo to enhance your company’s image.</p>
<p style="text-align:center"> Logo – Its Elements and Inevitable Importance for Your Business – A logo is a magical symbol that represents your company and provides the kind of image no other attribute of the business can provide.
</p>
<p style="text-align:center"> Is A Good Logo Important? – Most people don’t realize how important a good logo is and how valuable it can be to their online business.
</p>

      </div>
      <br><br>
      <?php
include_once 'footer.php';
?>

   </body>
</html>
