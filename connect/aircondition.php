<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="acmts.css"/>
</head>
<body>
<a href="http://localhost/aircondition/home.php">HOME</a>
<a href="index.php">VIEW RECORD PAGE</a>
<a href="http://localhost/aircondition/index.php">LOGOUT</a>

</br>
</br>
<p>AIRCONDITIONS</p>

<?php
$servername = "localhost";
$username = "Hajra";
$password = "HidayA$9$0";
$dbname = "ACMTS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aircondition";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>AC Serial Number</th><th>AC Brand</th><th>Purchase Date</th><th>Purchase Cost</th><th>Warranty</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ACSNo"]. "</td><td>" . $row["ACBrand"]. "</td><td>". $row["PurchDate"] ."</td><td>".$row["PurchCost"]."</td><td>" . $row["warranty"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?> 

</body>
</html>
