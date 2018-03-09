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
error_reporting(0);
require_once 'connect.php';

$names = $_POST['names'];

//PHP array containing domain names.
$surnames = array(
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
    '.org.in',
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
    '.me.uk'

);

  echo '<table> 
  <tr>      
  <th>Domain Name</th>        
  <th>Status</th>      
  </tr>'; 
  
  foreach($surnames as $sname) {
    echo "<p>";
  $r= $names.$sname;
    $check_name = $DBcon->query("SELECT name FROM naming WHERE name='$r'");
    $count=$check_name->num_rows;
    
    if ($count==0) {
       $txt = "Available";
 
 //echo "<a href='naming.php'>Next Page</a>";
        }
        else 
        $txt = "Taken";
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
