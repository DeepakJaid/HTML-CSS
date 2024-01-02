<?php 
session_start(); 
?>

<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE-edge">
          <meta name="viewport" content="width=device-width, initial-scale=1,0">
<title>Add Hotel Material</title>
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
                             <form action="Add Material Conection.php" method="POST">

<div class = "image"> 
<center><img src = "image.jpg" hight="500" width="1000"></center> 
</div> 

                              <div class="form-group mb-3">

<tr>
<th>Hotel Material</th>
</tr>
<tr>
<td>Vegetable <input type="text" name="Vegetable"> </td>
</tr>
<tr>
<td>Count_A <input type="text" name="Count_A"> </td>
</tr>
<tr>
<td>Milk Material <input type="text" name="Milk_Material"> </td>
</tr>
<tr>
<td>Count_B <input type="text" name="Count_B"></td>
</tr>
<tr>
<td>Groceries <input type="text" name="Groceries"></td>
</tr>
<tr>
<td>Count_C <input type="text" name="Count_C"></td>
</tr>
<tr>
<td>Fix Material <input type="text" name="Fix_Material"> </td>
</tr>
<tr>
<td>Count_D <input type="text" name="Count_D"> </td>
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
<center><button type="submit" name="save_material" class=" btn btn-primary">Add Material</button></center>  
                                 </div>
                             </form>
                       </div>
                </div>
          </div>
     </div>
</div>


</body>
</html>
