<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM predict";
$result = $conn->query($sql);

$result_array = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> id: ". $row["predict_id"]. " - Name: ". $row["name"]. " " . $row["fashion"] . " " . $row["sports"] . " " . $row["entartainment"]. " " . $row["health_and_care"] . " " . $row["food"]. " " . $row["education"]. " " ."<br>" ;
		array_push($result_array,$row);
		//print_r($row);
	}
} else {
    echo "0 results";
}
//print_r($result_array);

$_SESSION["result_array"] = $result_array;
//print_r($_SESSION["result_array"]);

$conn->close();
?> 

</body>
</html>