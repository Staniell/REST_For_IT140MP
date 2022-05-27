<?php 

include_once('connects.php');
$username = $_GET['username'];
$email =  $_GET['email'];
$passwordx = $_GET['password'];

//Checking if username is already taken
if(mysqli_num_rows(mysqli_query($con,"SELECT username FROM `user_accounts` WHERE username LIKE '".$username."'"))!=0)
    echo "The name ". $username ." is already taken. Please insert another name.";
else{
    $result = mysqli_query($con,"INSERT INTO user_accounts (username,email,password) VALUES('$username','$email','$passwordx')");
    echo "Account Registered";
}
?>