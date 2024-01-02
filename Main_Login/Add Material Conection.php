<?php 
    session_start();
    $join=mysqli_connect("localhost","root","","hotel_data_db");

if(isset($_POST['save_material']))
{

    
      
     $Vegetable=$_POST['Vegetable'];
     $Count_A=$_POST['Count_A'];
     $Milk_Material=$_POST['Milk_Material'];
     $Count_B=$_POST['Count_B'];
     $Groceries=$_POST['Groceries'];
     $Count_C=$_POST['Count_C'];
     $Fix_Material=$_POST['Fix_Material'];
     $Count_D=$_POST['Count_D'];
     


$qry = "INSERT INTO hotel_material(Vegetable,count_A,Milk_Material,count_B,Groceries,count_C,Fix_Material,count_D)VALUES('$Vegetable','$Count_A','$Milk_Material','$Count_B','$Groceries','$Count_C','$Fix_Material','$Count_D')";
                 
                $qry_run = mysqli_query($join, $qry); 
               
    if($qry_run)
       {
          $_SESSION['status'] = "Inserted Successfully";
          header("Location: Add Hotel Material.php");  
       }
     else
       {
          $_SESSION['status']="Data is not Inserted";
          header("Location: Add Hotel Material.php");  
       }
}
?>