<?php

include_once('connects.php');
$book_id = $_GET['book_id'];

$query = "SELECT book_id, book_title, book_price FROM `book_table` WHERE book_id='".$book_id."'";

$check=mysqli_query($con,$query);
$row=mysqli_num_rows($check);
$myArray = array();

if($check == FALSE) { 
    echo ".".$row.".";
}

  while($row=mysqli_fetch_array($check))
  	{
  	
	 $myArray[] = $row;
	
  	}
  echo json_encode($myArray);

?>