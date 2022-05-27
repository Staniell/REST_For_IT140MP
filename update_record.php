<?php

include_once('connects.php');
$name = $_GET['name'];
$school =  $_GET['school'];
$country = $_GET['country'];
$gender =  $_GET['gender'];
$pieces = explode("$", $name);


$query = "UPDATE `studentdata` SET `school`='$school',`country`='$country',`gender`='$gender' WHERE name ='". $name ."'";
$check=mysqli_query($con,$query);

if($check == FALSE) { 
    echo ".".$row."."; 
}

else
    //Check if username exists
    if(mysqli_num_rows(mysqli_query($con,"SELECT name FROM `studentdata` WHERE name LIKE '".$name."'"))==0)
        echo $name . " does not exist in the database";
    else
        echo $name ."'s data successfully updated."; 

?>