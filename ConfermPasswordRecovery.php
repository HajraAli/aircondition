
<?php

if(isset($_POST['SendButton'])) {
	$conn = mysqli_connect('localhost', 'Hajra', 'HidayA$9$0', 'ACMTS');



            $UserName = $_POST["UserName"]; 
            $Email= $_POST["Email"]; 

            $result1 = mysql_query($conn,"SELECT UserName FROM user WHERE UserName = '".$UserName."'");
            $result2 = mysql_query($conn,"SELECT Email FROM user WHERE Email = '".$."'");

            if($UserName == $result1 && $Email == $result2) 
            { 
                echo " your password  has been sent to your emai";
            }
            else
            {
                echo "The Username or mail are incorrect";
            }
    } 


?>
