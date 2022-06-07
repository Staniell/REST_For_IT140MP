<?php

include_once('connects.php');
$book_id = $_GET['book_id'];
$email = $_GET['email'];
$order_status = $_GET['order_status'];
$order_date = $_GET['order_date'];

$query = "INSERT INTO order_table(book_id, email, order_status, order_date) VALUES('$book_id', '$email', '$order_status', '$order_date')";
$check=mysqli_query($con,$query);
echo "Added Order."; 
?>