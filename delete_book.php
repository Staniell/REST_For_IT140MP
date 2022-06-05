<?php

include_once('connects.php');
$book_id = $_GET['book_id'];

$query = "DELETE FROM book_table WHERE book_id ='". $book_id ."'";
$check=mysqli_query($con,$query);

if($check == FALSE) { 
    echo ".".$row."."; 
}

else
    echo "Deleted Book Successfully";
?>