<?php

include_once('connects.php');
$book_name = $_GET['book_name'];
$book_price = $_GET['book_price'];
$book_img = $_GET['book_img'];

$query = "INSERT INTO book_table(book_title, book_price, book_img) VALUES('$book_name', '$book_price', '$book_img')";
$check=mysqli_query($con,$query);
echo "Added Book."; 
?>