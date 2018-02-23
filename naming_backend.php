<!DOCTYPE html>
<head>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
</head>
</html>

<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
   
   
   if (isset($_GET['names']))
    {
    $names = $_GET['names'];
    }
   // Escape User Input to help prevent SQL Injection
   $names = mysql_real_escape_string($names);
   
   
//PHP array containing domain names.
$domainnames = array(
    '.com',
    '.net',
    '.org',
    '.biz',
    '.name',
    '.us',
    '.info',
    '.in',
    '.co.in',
    '.net.in',
    '.club',
    '.blog',
    '.design',
    '.shop',
    '.edu',
    '.org.in',
    '.site',
    '.online',
    '.firm.in',
    '.gen.in',
    '.ind.in',
    '.eu',
    '.mobi',
    '.mn',
    '.bz',
    '.cc',
    '.tv',
    '.eu.com',
    '.gb.com',
    '.ae.org',
    '.kr.com',
    '.us.com',
    '.qc.com',
    '.de.com',
    '.gb.net',
    '.no.com',
    '.hu.com',
    '.jpn.com',
    '.uy.com',
    '.za.com',
    '.br.com',
    '.cn.com',
    '.sa.com',
    '.se.com',
    '.se.net',
    '.uk.com',
    '.uk.net',
    '.ru.com',
    '.ws',
    '.co.uk',
    '.org.uk',
    '.me.uk',
    '.me',
    '.us',
    '.ca',
    '.ac',
    '.academy',
    '.ae',
    '.africa',
    '.ag',
    '.art'

);

  echo '<table> 
  <tr>      
  <th>Domain Name</th>        
  <th>Status</th>      
  </tr>'; 
  
  foreach($domainnames as $domain) {
    echo "<p>";
  $r= $names.$domain;
    $check_name = $DBcon->query("SELECT name FROM naming WHERE name='$r'");
    $count=$check_name->num_rows;
    
    if ($count==0) {
       $txt = "Available";
      //echo "<a href='naming.php'>Next Page</a>";
 
        }
        else 
        {
          $txt = "Taken";
          
        }
    echo '      
   <tr>             
   <td>'.$r.'</td>   
    <td>'.$txt.' </td>       
      </td> 
    </tr>'; 
  echo "</p>";
   //<a href="naming.php" target="_blank">A</a>
    }
echo ' </table>';
   
   
   
   
   
   
?>