<?php

include_once('connects.php');
$name = $_GET['name'];

//Check if name exists or not
if(mysqli_num_rows(mysqli_query($con,"SELECT name FROM `studentdata` WHERE name LIKE '".$name."'"))==0)
    echo $name . " does not exist in the database";
else{
    $query = "DELETE FROM `studentdata` WHERE name ='". $name ."'";
    $check=mysqli_query($con,$query);

    echo $name ."'s data successfully deleted."; 
}
?>