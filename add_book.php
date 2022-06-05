<?php

include_once('connects.php');
$book_name = $_GET['book_name'];
$book_price = $_GET['book_price'];


$query = "INSERT INTO book_table(book_title, book_price) VALUES('$book_name', '$book_price')";
$check=mysqli_query($con,$query);
echo "Added Book."; 
?>