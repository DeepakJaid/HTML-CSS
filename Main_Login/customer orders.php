<?php session_start(); ?>
<?php
$db=mysql_connect("localhost","root","","hotel_data_db");
  if($db)
  {
    echo "Successfully Connected....!!";
  }
 else
 {
   echo "Connection not Established...!!!";
 }
mysql_select_db("hotel_data_db",$db);
$rows=mysql_query("SELECT * FROM menu_data",$db);
  if(!$rows)
   {
     $error="<br>SQL error:".mysql_error();
     echo $error;
   }
 else
  {
    $error=FALSE;
?>
<html>
<head>
<title> Customer Order </title>
</head>
<body>
<form action="Admin Panel.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td> Customer_Name </td>
      <td>Phone_no</td>
     <td> Table_no </td>
     <td> Menu Name</td>
     <td> Date </td>
      <td> Count </td>
  </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['customer_name']."</td>";
echo "<td>".$res['phone_no']."</td>";
    echo "<td>".$res['table_no']."</td>";
echo "<td>".$res['name']."</td>";
    echo "<td>".$res['date']."</td>";
echo "<td>".$res['count']."</td>";
   }
}

?>

</table>

</body>
</html>
