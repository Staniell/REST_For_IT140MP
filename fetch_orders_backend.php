<?php

include_once('connects.php');

$query = "SELECT book_title, order_id, book_price, order_table.book_id, email, order_status, order_date FROM `order_table` INNER JOIN book_table on book_table.book_id = order_table.book_id";

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