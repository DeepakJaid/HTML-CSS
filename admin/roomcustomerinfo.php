<?php
$db=mysql_connect("localhost","root","","hotel_db");
  if($db)
  {
    echo "Successfully Connected....!!";
  }
 else
 {
   echo "Connection not Established...!!!";
 }
mysql_select_db("hotel_db",$db);
$rows=mysql_query("SELECT * FROM guest",$db);
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
<title> Room Customer Information </title>
</head>
<body>
<form action="Home.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td> Guest_Id </td>
     <td> First_Name </td> 
      <td> Middle_Name </td>
     <td> Last_Name </td>
     <td> Address </td>
     <td> Contact_No </td>
   </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['guest_id']."</td>";
    echo "<td>".$res['firstname']."</td>";
    echo "<td>".$res['middlename']."</td>";
    echo "<td>".$res['lastname']."</td>";
    echo "<td>".$res['address']."</td>";
    echo "<td>".$res['contactno']."</td>";
   }
}
?>
</table>
</body>
</html>


