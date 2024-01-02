<?php 
    session_start();
    $con=mysqli_connect("localhost","root","","hotel_data_db");

if(isset($_POST['save_multipal_checkbox']))
{

    
      
     $customer_name=$_POST['customer_name'];
     $phone_no=$_POST['phone_no'];
     $table_no=$_POST['table_no'];
    $brands = $_POST['brands'];
    $da=$_POST['da'];      
$text=$_POST['count'];

      
     foreach($brands as $item)
            {      

              $query = "INSERT INTO menu_data (name,count,customer_name,phone_no,table_no,date) VALUES ('$item','$text','$customer_name','$phone_no','$table_no','$da')";
                 
                $query_run = mysqli_query($con, $query);              
            }    

    if($query_run)
       {
          $_SESSION['status'] = "Inserted Successfully";
          header("Location: mainorder.php");  
       }
     else
       {
          $_SESSION['status']="Data is not Inserted";
          header("Location: mainorder.php");  
       }
}
?>