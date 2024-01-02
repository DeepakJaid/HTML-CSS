<?php 
session_start(); 
?>
<html>
<head>
<title></title>
</head>
<body bgcolor="orange">
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
</form> 
</div> 
<div class = "image"> 
<img src = "image.jpg"> 
</div> 
</div>
</body>
</html>