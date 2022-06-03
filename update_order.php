<?php

include_once('connects.php');
$email = $_GET['email'];
$status_order = $_GET['status_order'];
$id_order = $_GET['order_id'];


$query = "UPDATE `order_table` SET `order_status`='$status_order' WHERE email ='". $email ."' and order_id = '".$id_order."'";
$check=mysqli_query($con,$query);

if($check == FALSE) { 
    echo ".".$row."."; 
}

else
    //Check if username exists
    // if(mysqli_num_rows(mysqli_query($con,"SELECT name FROM `studentdata` WHERE name LIKE '".$name."'"))==0)
    //     echo $name . " does not exist in the database";
    // else
    echo "Your order has been successfully updated."; 

?>