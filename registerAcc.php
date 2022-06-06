<?php 

include_once('connects.php');
$username = $_GET['username'];
$email =  $_GET['email'];
$passwordx = $_GET['password'];
$home_address = $_GET['home_address'];

//Checking if username is already taken
if(mysqli_num_rows(mysqli_query($con,"SELECT email FROM `user_accounts` WHERE email LIKE '".$email."'"))!=0)
    echo "The name ". $username ." is already taken. Please insert another name.";
else{
    $result = mysqli_query($con,"INSERT INTO user_accounts (username,email,home_address,password) VALUES('$username','$email','$home_address','$passwordx')");
    echo "Account Registered";
}
?>