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
$rows=mysql_query("SELECT * FROM transaction",$db);
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
<title> Transaction Information </title>
</head>
<body>
<form action="home.php" method="POST">

<div class="form-group">
 <button type="submit" name="back" class=" btn btn-primary">Back</button>
    </div>
</form>
<table width='80%'border=0>
  <tr bgcolor='#CCCCCC'>
     <td> Transaction_Id </td>
     <td> Guest_Id </td>
     <td> Room_Id </td> 
      <td> Room_No </td>
     <td> Extra_Bed </td>
     <td> Status </td>
     <td> Days </td>
     <td> Checkin </td>
    <td> Checkin_Time </td>
    <td> Checkout </td>
    <td> Checkout_Time </td>
    <td> Bill </td>
  </tr>
<?php
while($res=mysql_fetch_array($rows))
  {
    echo "<tr>";
    echo "<td>".$res['transaction_id']."</td>";
    echo "<td>".$res['guest_id']."</td>";
    echo "<td>".$res['room_id']."</td>";
    echo "<td>".$res['room_no']."</td>";
    echo "<td>".$res['extra_bed']."</td>";
    echo "<td>".$res['status']."</td>";
    echo "<td>".$res['days']."</td>";
    echo "<td>".$res['checkin']."</td>";
    echo "<td>".$res['checkin_time']."</td>";
    echo "<td>".$res['checkout']."</td>";
    echo "<td>".$res['checkout_time']."</td>";
    echo "<td>".$res['bill']."</td>";
   }
}
?>
</table>
</body>
</html>


