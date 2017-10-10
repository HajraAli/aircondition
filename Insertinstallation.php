



    <?php
        $RoomNo= $_POST['RoomNo'];
        $ACSNo = $_POST['ACSNo'];
       $UserID =$_POST['UserID'];
	$InstDate = $_POST['InstDate'];
	
	

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'Hajra' with no password) */

    $link = mysqli_connect("localhost", "Hajra", "HidayA$9$0", "ACMTS");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Attempt insert query execution

    $sql = "INSERT INTO installation(ACSNo,RoomNo,UserID,InstDate) VALUES ('$ACSNo','$RoomNo','$UserID','$InstDate')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);

    ?>
</br>
</br>
<a href="home.php">HOME</a>  <a href="airconditionform.php">INSERT ANOTHER DATA</a>  <a href="about.html">ABOUT</a>  <a href="index.php">LOG OUT</a>



