
<?php

session_start();

if(isset($_POST['logInButton'])) {
	$conn = mysqli_connect('localhost', 'Hajra', 'HidayA$9$0', 'ACMTS');
	$userName = $_POST['UserName'];
	$passWord = md5($_POST['Password']);
	$resulta = mysqli_query($conn, 'SELECT * FROM user WHERE UserName="'.$userName.'" AND Password="'.$passWord.'"');

	if(mysqli_num_rows($resulta)==1) {
		$_SESSION['UserName'] = $userName;
		header('Location: ./home.php');}
	       else{
     	        echo "your password is incorrect!!"; 
				}
}
?>
