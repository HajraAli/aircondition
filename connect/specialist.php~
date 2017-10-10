<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet",  type="text/css" href="acmts.css"/>
</head>
<body background=>
<a href="http://localhost/aircondition/home.php">HOME</a>
<a href="index.php">VIEW RECORD PAGE</a>
<a href="http://localhost/aircondition/index.php">LOGOUT</a>

</br>
</br>
<p>USERS</p>
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

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>UserName</th><th>Title</th><th>Email</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["UserFName"]. "</td><td>" . $row["UserLName"]. "</td><td>" . $row["UserName"]. "</td><td>" . $row["Title"]. "</td><td>" . $row["Email"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?> 


</body>
</html>
