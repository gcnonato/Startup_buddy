<!DOCTYPE html>
<head>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
  margin: 0 auto;
 color: black;
}
th,td {
  padding: 5px;
  text-align: center;
}
</style>
</head>
</html>

<?php
//error_reporting(0);
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

   
   
   if (isset($_GET['names']))
    {
    $names = $_GET['names'];
    }
   // Escape User Input to help prevent SQL Injection
   //$names = mysqli_real_escape_string($names);
   
   
//PHP array containing domain names.
$domainnames = array(
    '.com',
    '.net',
    '.org',
    '.gov',
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
    '.qa.com',
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
    '.ca',
    '.ac',
    '.academy',
    '.ae',
    '.africa',
    '.ag',
    '.art'

);

//PHP array containing domain description.
$domaindesc = array(
    'Commercial Domain',
    'Network Domain',
    'Organization Domain',
    'Government Domain',
    'Business Domain',
    'Name Domain',
    'United States Domain',
    'Information Domain',
    'Indian Domain',
    'Second Level Domain under .IN Available for organization',
    'Second Level Domain under .IN Available for organization',
    'Groups, Organizations, Assemblies, Communities, General Domain',
    'Blogs Domain',
    'Graphic Art and Fashion Domain',
    'Shops, Shopping Domain',
    'Education Domain',
    'Second Level Domain under .IN Available for organization',
    'General Domain',
    'Generic Domain',
    'Second Level Domain under .IN Available for organization',
    'Second Level Domain under .IN Available for organization',
    'Second Level Domain under .IN Available for organization',
    'European Union Domain',
    'Mobile Domain',
    'Mongolia Domain',
    'Belize Domain',
    'Cocos (Keeling) Islands Domain',
    'Television Domain',
    'European Union Commercial Domain',
    'Great Britain Commercial Domain',
    'United Arab Emirates Oraganizational Domain',
    'Korea Republic Commercial Domain',
    'United States Commercial Domain',
    'Qatar Commercial Domain',
    'Deutschland Commercial Domain',
    'Great Britain Network Domain',
    'Norway Commercial Domain',
    'Hungary Commercial Domain',
    'Japan Commercial Domain',
    'Uruguay Commercial Domain',
    'Zuid-Afrika Commercial Domain',
    'Brazil Commercial Domain',
    'People Republic of China Commercial Domain',
    'Saudi Arabia Commercial Domain',
    'Sweden Commercial Domain',
    'Sweden Network Domain',
    'Commercial UK Domain',
    'UK Network Domain',
    'Russain Domain',
    'Samoa Domain',
    'Commercial/ General Domain used in UK',
    'Non-profit Organizations Domain used in UK',
    'Personal Domain used in UK',
    'Montenegro Domain',
    'Canadain Domain',
    'Ascension Island Domain',
    'Academic Institutes Domain   ',
    'United Arab Emirates Domain',
    'African Domain',
    'Antigua and Barbuda Domain',
    'Artists, Museums, Art Galleries Domain'

);

  echo '<table> 
  <tr>      
  <th>Domain Name</th>        
  <th>Domain Description </th>
  <th>Status</th>      
  </tr>'; 
  
  foreach(array_combine($domainnames, $domaindesc) as $domain => $desc ) {
    echo "<p>";
  $r= $names.$domain;
    $check_name = $DBcon->query("SELECT name FROM naming WHERE name='$r'");
    $count=$check_name->num_rows;
     echo '      
   <tr>             
   <td>'.$r.'</td> 
   <td>'.$desc.'</td>  
    <td>';if ($count==0) {
       echo "<a href='domain.php' target='_blank'>Available</a>";
 
        }
        else 
        {
          echo "Taken";
          
        }
    ' </td>       
      </td> 
    </tr>'; 
  echo "</p>";
    }
echo ' </table>';
   
   
   
   
   $DBcon->close();
   
?>
