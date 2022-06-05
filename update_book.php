<?php

include_once('connects.php');
$book_id = $_GET['book_id'];
$book_name = $_GET['book_name'];
$book_price = $_GET['book_price'];
$book_img = $_GET['book_img'];


$query = "UPDATE book_table SET book_title = '$book_name', book_price = '$book_price', book_img ='$book_img' WHERE book_id = $book_id";
$check=mysqli_query($con,$query);

if($check == FALSE) { 
    echo ".".$row."."; 
}

else
    echo "Book information has been successfully updated."; 

?>