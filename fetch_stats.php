<?php

include_once('connects.php');

$query = "SELECT (SELECT Count(*) FROM book_table) AS 'BookCount', (SELECT Count(*) FROM order_table) AS 'OrderCount'";
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