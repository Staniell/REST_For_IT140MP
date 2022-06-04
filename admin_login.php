
<?php

include_once('connects.php');

	
	$adminusername = $_GET['adminusername'];
	$adminpassword = $_GET['adminpassword'];

	
	$result = mysqli_query($con,"SELECT * FROM admin_table WHERE admin_name = '$adminusername' AND admin_password = '$adminpassword'");
		
	if(!$row = mysqli_fetch_assoc($result)) 
        {
        echo "Invalid Username or Password";
	} 
	else 
	{
		echo "Login Successful";
	}

	mysqli_close($con);
?>