<?php 

$con=mysqli_connect("localhost","root","","hotel_data_db"); 

if(mysqli_connect_error())
{ 
   echo"Cannot connect to database";
   exit(); 
}

?>