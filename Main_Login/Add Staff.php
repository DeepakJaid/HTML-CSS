<?php 
session_start(); 
?>

<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE-edge">
          <meta name="viewport" content="width=device-width, initial-scale=1,0">
<title>Add Data For Staff</title>
</head>
<body bgcolor="orange">
<form action="Admin Panel.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<div class="container">
     <div class="row justify-content-center">
           <div class="col-md-8">

                 <?php 
                       if(isset($_SESSION['status']))
                         {
                             echo "<h4>".$_SESSION['status']."</h4>";
                             unset($_SESSION['status']);
                         }
                  ?>

<center>
<table>
                 <div class="card mt-5">
                       <div class="card-header">
                    <center>   <h1>Hotel Balaji Pure Veg</h1>  </center> 
                       </div>
                       <div class="card-body">
                             <form action="Add.php" method="POST">

<div class = "image"> 
<center><img src = "image.jpg" hight="500" width="1000"></center> 
</div> 

                              <div class="form-group mb-3">

<tr>
<th>Staff Details</th>
</tr>
<tr>
<td>Staff Department <input type="text" name="staff_Department"> </td>
</tr>
<tr>
<td>Name <input type="text" name="name"> </td>
</tr>
<tr>
<td>Address <input type="text" name="address"> </td>
</tr>
<tr>
<td>Phone No <input type="text" name="phone_no"></td>
</tr>
<tr>
<td>Age <input type="text" name="age"></td>
</tr>
<tr>
<td>Gender <input type="text" name="gender"></td>
</tr>
<tr>
<td>Salary <input type="text" name="salary"> </td>
</tr>
 
</table>                             
</center>
<style>
table, th, td { 
border : 1px solid black; 
}
</style> 
 



                       

</div>
   <div class="form-group">
<center><button type="submit" name="save_data" class=" btn btn-primary">Add Data</button></center>

                                 </div>
                             </form>
                       </div>
                </div>
          </div>
     </div>
</div>


</body>
</html>
