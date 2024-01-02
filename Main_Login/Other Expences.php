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
$rows=mysql_query("SELECT * FROM hotel_other_expences",$db);
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
<title> Hotel Other Expences </title>
</head>
<body>
<form action="Admin Panel.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td>Advertising</td>
      <td>Count_A</td>
     <td>Other</td>
     <td>Count_B</td>
    
  </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['Advertising']."</td>";
    echo "<td>".$res['count_A']."</td>";
    echo "<td>".$res['Other']."</td>";
    echo "<td>".$res['count_B']."</td>";
   }
}
?>
</table>
</body>
</html>

