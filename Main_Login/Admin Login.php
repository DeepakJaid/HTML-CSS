	<?php require("Connection.php") ?>
<html> 
<head> 
<title>Admin Login Panel</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>  
<body>
<style> h1{text-align:center;} </style>
          <h1>Hotel Balaji Pure Veg</h1>


<div class = "container"> 
<div class = "myform"> 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"> 
<h2>ADMIN LOGIN</h2> 
<input type = "text" placeholder = "Admin Name" name="AdminName"> 
<input type = "password" placeholder = "Password" name="AdminPass">
<button type = "submit" name="Login"> LOGIN</button>
<button type = "submit" name="Home"> Home</button>
<h2>Customer Login</h2> 
 
<button type="submit" name="Customer_Login">Customer LOGIN</button> 
<button type = "submit" name="Home"> Home</button> 
</form> 
</div> 
<div class = "image"> 
<img src = "image.jpg"> 
</div> 
</div>
 

<?php

     function input_filter($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

    if(isset($_POST['Login'])){

$AdminName=input_filter($_POST['AdminName']);
$AdminPass=input_filter($_POST['AdminPass']);

$AdminName=mysqli_real_escape_string($con,$AdminName);
$AdminPass=mysqli_real_escape_string($con,$AdminPass);

$query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

if($stmt=mysqli_prepare($con,$query))
{
mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
if(mysqli_stmt_num_rows($stmt)==1)
{
session_start();
$_SESSION['AdminLoginId']=$AdminName;
header("location: Admin Panel.php");
}
else
{
echo "<script>alert('Invalid Admin Name or Password');</script>";
}
mysqli_stmt_close($stmt);
}
else
{
echo "<script>alert('SQL Query cannot be prepared');</script>";
}
}
if(isset($_POST['Customer_Login']))
       
{
      
    session_destroy();
    
    header("location: mainorder.php");
        
}
if(isset($_POST['Home']))
       
{
      
    session_destroy();
    
    header("location: http://localhost/TY%20BSC%20CS%20Project/Hotel_Balaji_Pure_Veg/Hotel_Balaji_Management/");
        
}
?>
</body>
</html> 