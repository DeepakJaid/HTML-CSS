<?php 
    session_start();
    $join=mysqli_connect("localhost","root","","hotel_data_db");

if(isset($_POST['save_hotel_other_expences']))
{

    
      
     $Advertising=$_POST['Advertising'];
     $Count_A=$_POST['Count_A'];
     $Other=$_POST['Other'];
     $Count_B=$_POST['Count_B'];

     
$qry = "INSERT INTO hotel_other_expences(Advertising,count_A,Other,count_B)VALUES('$Advertising','$Count_A','$Other','$Count_B')";
                 
                $qry_run = mysqli_query($join, $qry); 
               
    if($qry_run)
       {
          $_SESSION['status'] = "Inserted Successfully";
          header("Location: Add Other Expences.php");  
       }
     else
       {
          $_SESSION['status']="Data is not Inserted";
          header("Location: Add Other Expences.php");  
       }
}
?>