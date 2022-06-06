<?php

include_once('connects.php');

// $query = "SELECT book_title, order_id, book_price, order_table.book_id, email, order_status, order_date FROM `order_table` INNER JOIN book_table on book_table.book_id = order_table.book_id";
$query = "SELECT book_title, order_id, book_price, home_address, order_table.book_id, order_table.email, order_status, order_date FROM `order_table` INNER JOIN book_table on book_table.book_id = order_table.book_id INNER JOIN user_accounts on order_table.email = user_accounts.email";

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