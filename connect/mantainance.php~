<!DOCTYPE html>
<html>
<head>
<style>
p{
size:350%;
color:rgb(76, 190, 110);

}
table, th, td {
padding:3px;
position:center;
text-align:center;
     border: 3px solid rgb(255, 154, 0);
}
</style>
</head>
<body>
<a href="http://localhost/aircondition/home.php">HOME</a>
<a href="index.php">VIEW RECORD PAGE</a>
<a href="http://localhost/aircondition/index.php">LOGOUT</a>

</br>
</br>
<p>WORKERS WHO PERFORMED MAINTENANCE</p>

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

$sql = "SELECT * FROM mantainance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>AC Serial Number</th><th>UserID</th><th>Maintenance Cost</th><th>Maintenance Date</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ACSNo"]. "</td><td>" . $row["UserID"] . "</td><td>" . $row["MCost"]. "</td><td>" . $row["MDate"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?> 

</body>
</html>
