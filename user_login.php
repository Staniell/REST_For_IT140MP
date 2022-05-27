
<?php

include_once('connects.php');

	
	$email = $_GET['email'];
	$password = $_GET['password'];

	
	$result = mysqli_query($con,"SELECT * FROM user_accounts WHERE email = '$email' AND password = '$password'");
		
	if(!$row = mysqli_fetch_assoc($result)) 
        {
        echo "Invalid Username or Password";
	} 
	else 
	{
		
		$query = "SELECT username FROM `user_accounts` WHERE email LIKE '".$email."'";
		$check=mysqli_query($con,$query);
		$row=mysqli_num_rows($check);
		$myArray = array();
		$myArray[] = mysqli_fetch_array($check);
		
		echo json_encode($myArray);
	}

	mysqli_close($con);
?>