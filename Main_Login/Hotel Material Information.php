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
$rows=mysql_query("SELECT * FROM hotel_material",$db);
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
<title> Hotel Material </title>
</head>
<body>
<form action="Admin Panel.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td> Vegetable </td>
      <td>Count_A</td>
     <td> Milk Material </td>
     <td>Count_B</td>
     <td> Groceries </td>
     <td>Count_C</td>
     <td> Fix Material </td> 
     <td>Count_D</td>
    
  </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['Vegetable']."</td>";
echo "<td>".$res['count_A']."</td>";
    echo "<td>".$res['Milk_Material']."</td>";
echo "<td>".$res['count_B']."</td>";
    echo "<td>".$res['Groceries']."</td>";
echo "<td>".$res['count_C']."</td>";
    echo "<td>".$res['Fix_Material']."</td>";
echo "<td>".$res['count_D']."</td>";    

   }
}
?>
</table>
</body>
</html>


