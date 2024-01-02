<?php 
    session_start();
    $join=mysqli_connect("localhost","root","","hotel_data_db");

if(isset($_POST['save_data']))
{

    
      
     $a=$_POST['staff_Department'];
     $b=$_POST['name'];
     $c=$_POST['address'];
     $d=$_POST['phone_no'];
     $e=$_POST['age'];
     $f=$_POST['gender'];
     $g=$_POST['salary'];

$qry = "INSERT INTO staff_info(Staff_Department,Name,Address,Phone_no,Age,Gender,Salary)VALUES('$a','$b','$c','$d','$e','$f','$g')";
                 
                $qry_run = mysqli_query($join, $qry); 
               
    if($qry_run)
       {
          $_SESSION['status'] = "Inserted Successfully";
          header("Location: Add Staff.php");  
       }
     else
       {
          $_SESSION['status']="Data is not Inserted";
          header("Location: Add Staff.php");  
       }
}
?>