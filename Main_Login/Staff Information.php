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
$rows=mysql_query("SELECT * FROM staff_info",$db);
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
<title> Staff Information </title>
</head>
<body>
<form action="Admin Panel.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td> Staff_Department </td>
     <td> Name </td>
     <td> Address </td> 
      <td> Phone_no</td>
     <td> Age </td>
     <td> Gender </td>
     <td> Salary </td>
  </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['Staff_Department']."</td>";
    echo "<td>".$res['Name']."</td>";
    echo "<td>".$res['Address']."</td>";
    echo "<td>".$res['Phone_no']."</td>";
    echo "<td>".$res['Age']."</td>";
    echo "<td>".$res['Gender']."</td>";
    echo "<td>".$res['Salary']."</td>";
   }
}
?>
</table>
</body>
</html>


