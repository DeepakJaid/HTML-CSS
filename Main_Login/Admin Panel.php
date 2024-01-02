<?php
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId']))
{
header("location: Admin Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Admin Panel</title>
<style>
  

 body{
    
    margin: 0;
}
    
div.header
{
       
  color: #f0f0f0;
     
    font-family: poppins;
   
      display: flex;
 
        flex-direction: row;

         align-item: center;
     
    justify-content: space-between;
   
      padding: 0 60px;
  
       background-color: Green;//#1c1c1e

   }
 div.header button
{
         
background-color: pink;
       
  font-size: 16px;
     
    font-weight: 550;
  
       padding: 8px 12px;
  
         border: 5px solid black;
   
      border-radius: 5px;

}  
div.pagebutton
{
}
div.pagebutton button
{
background-color: blue;
       
  font-size: 16px;
     
    font-weight: 550;
  
       padding: 8px 12px;
  
         border: 5px solid green;
   
      border-radius: 5px;


}
</style>
</head>
<body>
<div class="header">
<h1>HOTEL BALAJI PURE VEG - <?php echo $_SESSION['AdminLoginId'] ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">


<h3>Open Time - 8:00.am to 1:00.am</h3>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">


<h3>Address - Pune-Nashik Hwy, Near Ghumatkar Punp, Malegoan,Tal-Khed, Dist-Pune </h3>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">


<button type="submit" name="Logout"> LOG OUT<button>
</div>




 
<style>
table, th, td { 
border : 1px solid black; 
}
</style>
<body  bgcolor = "Sky Blue" > 






<center>
<header>
		
		<h1 id="top1">Hotel Balaji Pure Veg</h1>
	</header>
	<hr>
<center>
	<nav id="navbar">
		<img src="image.jpg">
		
	</nav>
</center>
	<div id="container1">
		<div id="row1">
			<h3>Hotel Balaji Pure Veg</h3>
		</div>

<div class="pagebutton">

<div id="container3">
<div id="row2">
<br><button type="submit" name="C_O">Customer Orders</button>
<br>
</div>
      
<div id="row3">     
          <br><button type="submit" name="Staff_Info">Staff  Information</button></td>
                               <br><button type="submit" name="Add_Staff">Add Staff</button>
</div>		
                                      
			<div id="row4">
	<br><button type="submit" name="H_M_I">Hotel Material Information</button>
                <br><button type="submit" name="A_H_M">Add Hotel Material</button>
			</div>
			<div id="row5">
	<br><button type="submit" name="Other_Expences">Other Expences</button>
           <br><button type="submit" name="Add_Other_Expences">Add Other Expences</button>
			
                                               </div>
		</div>
	</div>
</div>
	<hr>
	

<?php

if(isset($_POST['Logout']))
       
{
      
    session_destroy();
    
    header("location: Admin Login.php");
        
}
 
if(isset($_POST['C_O']))
       
{
      
    session_destroy();
    
    header("location: customer orders.php");
        
}


if(isset($_POST['Staff_Info']))
       
{
      
    session_destroy();
    
    header("location: Staff Information.php");
        
}

if(isset($_POST['Add_Staff']))
       
{
      
    session_destroy();
    
    header("location: Add Staff.php");
        
}

if(isset($_POST['H_M_I']))
       
{
      
    session_destroy();
    
    header("location: Hotel Material Information.php");
        
}
if(isset($_POST['A_H_M']))
       
{
      
    session_destroy();
    
    header("location: Add Hotel Material.php");
        
}
if(isset($_POST['Other_Expences']))
       
{
      
    session_destroy();
    
    header("location: Other Expences.php");
        
}
if(isset($_POST['Add_Other_Expences']))
       
{
      
    session_destroy();
    
    header("location: Add Other Expences.php");
        
}
?>



 </body>
 </html>