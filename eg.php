<?php
include 'header.php';
error_reporting(0);
$result = array();
$result = $_SESSION["result_array"];
//print_r($result);
echo"<br><br><br><br>";
$Startups =  array(
                
    "Bhavna" => array("fashion" => 4, "sports" => 2,
                    "entertainment" => 3, "education" => 3,
                    "health_and_care" => 2.5,
                    "food" => 3.5),
    
    "Krima" => array("fashion" => 2.5, "sports" => 3.5,
                      "entertainment" => 3, "education" => 3.5,
                      "health_and_care" => 2.5, "food" => 1),
    
    "sahil" => array(" fashion" => 5, "sports" => 3.5,
                    "entertainment" => 1),
    
    "sid" => array("education" => 5, "food" => 3.5),
    
    "ashraf" => array("fashion" => 1.5, "sports" => 2.5,
                    "entertainment" => 4, "education" => 3.5,
                    "health_and_care" => 2.5, "food" => 3.5),
    
    "rashmi" => array("fashion" => 3, "sports" => 1.5,
                     "entertainment" => 3, "education" => 3.5,
                     "health_and_care" => 2, "food" => 3),
    
    "radhika" => array("food" => 2.5)
    
    
);
require_once("recommend.php");

$re = new Recommend();
 

//print_r($re->getRecommendations($Startups, "sahil"));

include 'recommendationhomepage.html';



include 'footer.php';
?>