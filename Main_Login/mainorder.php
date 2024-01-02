<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE-edge">
          <meta name="viewport" content="width=device-width, initial-scale=1,0">
<title>Funda of web</title>
</head>
<body>
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
                             <form action="code.php" method="POST">

<div class = "image"> 
<center><img src = "image.jpg" hight="500" width="1000"></center> 
</div> 

                              <div class="form-group mb-3">

<tr>
<th>Customer Details</th>
</tr>
<tr>
<td>Customer Name <input type="text" name="customer_name"> </td>
</tr>
<tr>
<td>Phone No <input type="text" name="phone_no"></td>
</tr>
<tr>
<td>Table No <input type="text" name="table_no"></td>
</tr>
<tr>
 <td><input type="date" name="da"></td>
</tr>
</table>                             
</center>
<style>
table, th, td { 
border : 1px solid black; 
}
</style>
<body  bgcolor = "Sky Blue" > 

<center> <h2> Menu Card </h2> </center> 

<table style = "width:100%"> 
<tr>
<tr>
<th> South Indian </th>
<th> Chinese Starter </th>
<th> Maharashtrian</th> 
<th> Tandoor Starter </th>
<th> Papad </th> 
</tr>

<tr> 
<td><input type="checkbox" name="brands[]" value="Idali Samber ...........Rs.70" >Idali Samber ...........Rs.70<input type="text" name="count" >

<td><input type="checkbox" name="brands[]" value="Veg Manchurian .....Rs.160">Veg Manchurian .....Rs.160<input type="text" name="count"></td>

<td><input type="checkbox" name="brands[]" value="Balaji Special Misal .............Rs.120" >Balaji Special Misal .........Rs.120<input type="text" name="count"></td>

<td><input type="checkbox" name="brands[]" value="Paneer Tikka ..........Rs.200">Paneer Tikka ..........Rs.200 <input type="text" name="count"></td>

<td><input type="checkbox" name="brands[]" value="Roasted Papad ....Rs.20" >Roasted Papad ....Rs.20<input type="text" name="count"></td> 
</tr>
<tr> 
<td><input type="checkbox" name="brands[]" value="Mendu vada ............Rs.70">Mendu vada ............Rs.70</td> 
<td><input type="checkbox" name="brands[]" value="Veg Chilli ...............Rs.180">Veg Chilli ...............Rs.180</td> 
<td><input type="checkbox" name="brands[]" value="Misal Pav ....................Rs.70">Misal Pav ....................Rs.70</td> 
<td><input type="checkbox" name="brands[]" value="Paneer Malai Tikka .Rs.220">Paneer Malai Tikka .Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Fry Papad ..Rs.25">Fry Papad ..Rs.25</td>
</tr> 
<tr>
<td><input type="checkbox" name="brands[]" value="Sadha Dhosa .............Rs.90">Sadha Dhosa .............Rs.90</td> 
<td><input type="checkbox" name="brands[]" value="Paneer Chilli ..............Rs.180">Paneer Chilli ..............Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Vadapav Plate .............Rs.30">Vadapav Plate .............Rs.30</td> 
<td><input type="checkbox" name="brands[]" value="Paneer Pahadi Tikka ..Rs.220">Paneer Pahadi Tikka ..Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Masala Papad .......Rs.30">Masala Papad .......Rs.30</td>
 <tr> 
<td><input type="checkbox" name="brands[]" value="Masala Dhosa .......Rs.120">Masala Dhosa .......Rs.120</td>
<td><input type="checkbox" name="brands[]" value="Mashroom Chilli ...Rs.180">Mashroom Chilli ...Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Vada Sample ..........Rs.80">Vada Sample ..........Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Paneer Banjara .....Rs.230">Paneer Banjara .....Rs.230</td>
<td><input type="checkbox" name="brands[]" value="Masala Nachani Papad ..Rs.35">Masala Nachani Papad ..Rs.35</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Upama .............Rs.60">Upama .............Rs.60</td>
<td><input type="checkbox" name="brands[]" value="Soyabean Chilli ..Rs.140">Soyabean Chilli ..Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Batata Bhaji ....................Rs.50">Batata Bhaji ....................Rs.50</td>
<td><input type="checkbox" name="brands[]" value="Veg Shikh Kabab ..Rs.200">Veg Shikh Kabab ..Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Nachani Fry Papad ..Rs.30">Nachani Fry Papad ..Rs.30</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Shira ...............Rs.60">Shira ...............Rs.60</td>
<td><input type="checkbox" name="brands[]" value="Mashroom Manchurian ..Rs.180">Mashroom Manchurian ..Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Kanda Bhaji ....................Rs.60">Kanda Bhaji ....................Rs.60</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mysore Dhosa .........Rs.120">Mysore Dhosa .........Rs.120</td>
<td><input type="checkbox" name="brands[]" value="Gobi Manchurian .......Rs.160">Gobi Manchurian .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Kanda Goal Bhaji ..........Rs.50">Kanda Goal Bhaji ..........Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Cut Dhosa .........Rs.110">Cut Dhosa .........Rs.110</td>
<td><input type="checkbox" name="brands[]" value="Paneer Manchurian .......Rs.180">Paneer Manchurian .......Rs.180</td>
<td><input type="checkbox", name="brands[]" value="Kanda Poha ....................Rs.50">Kanda Poha ....................Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Spunj Dhosa ..........Rs.90">Spunj Dhosa ..........Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Veg65 ............Rs.150">Veg65 ............Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Mataki Bhel ..............Rs.80">Mataki Bhel ..............Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Paper Masala Dhosa ....Rs.110">Paper Masala Dhosa ....Rs.110</td>
<td><input type="checkbox" name="brands[]" value="Potato Chilli ............Rs.140">Potato Chilli ............Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Sabudana Vada ..............Rs.70">Sabudana Vada ..............Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Cheese Sadha Dhosa ....Rs.90">Cheese Sadha Dhosa ....Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Paneer65 ............Rs.160">Paneer65 ............Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Sabudana Khichadi ............Rs.70">Sabudana Khichadi ............Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Cheese Masala Dhosa ..Rs.110">Cheese Masala Dhosa ..Rs.110</td>
<td><input type="checkbox" name="brands[]" value="Paneer Hot Pan ............Rs.200">Paneer Hot Pan ............Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Finger Chips ..............Rs.70">Finger Chips ..............Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Butter Sadha Dhosa ....Rs.90">Butter Sadha Dhosa ....Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Veg Hot Pan ............Rs.190">Veg Hot Pan ............Rs.190</td>
<td><input type="checkbox" name="brands[]" value="PavBhaji .................Rs.80">PavBhaji .................Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Butter Masala Dhosa ....Rs.100">Butter Masala Dhosa ....Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Veg Crispy .......Rs.160">Veg Crispy .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Pav(1 ps)................Rs.5">Pav(1 ps)................Rs.5</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Sadha Uttappa .......Rs.60">Sadha Uttappa .......Rs.60</td>
<td><input type="checkbox" name="brands[]" value="Paneer Crispy .......Rs.180">Paneer Crispy .......Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Butter Pav(1 ps)...........Rs.10">Butter Pav(1 ps)...........Rs.10</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Onion Uttappa ...........Rs.70">Onion Uttappa ...........Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Crispy .......Rs.180">Mushroom Crispy .......Rs.180</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Tomato Uttappa .......Rs.80">Tomato Uttappa .......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Harbhara Kabab .....Rs.200">Veg Harbhara Kabab .....Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Tomato Onion Uttappa ....Rs.80">Tomato Onion Uttappa ....Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Chana Kolivada .......Rs.120">Chana Kolivada .......Rs.120</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Butter Onion Uttappa ....Rs.90">Butter Onion Uttappa ....Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Chana Dry .......Rs.100">Chana Dry .......Rs.100</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Cheese Uttappa .......Rs.90">Cheese Uttappa .......Rs.90</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Masala Uttappa .......Rs.90">Masala Uttappa .......Rs.90</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Cheese Tomato Uttappa ....Rs.100">Cheese Tomato Uttappa ....Rs.100</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mix Vada Samber .......Rs.80">Mix Vada Samber .......Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Idli Vada Samber .......Rs.80">Idli Vada Samber .......Rs.80</td>
</tr>



<tr>
<th> Punjabi Dish </th>
<th> Paneer Ki Pasand </th> 
<th> Balaji Special </th>
<th> Veg Ki Barat </th>
<th> Raita </th>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Dum Aloo Punjabi ......Rs.220">Dum Aloo Punjabi ......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Paneer Tikka Masala ......Rs.180">Paneer Tikka Masala ......Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Veg Balaji Special ......Rs.250">Veg Balaji Special ......Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Veg Jaipuri ........Rs.180">Veg Jaipuri ........Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Bundi Raita ........Rs.80">Bundi Raita ........Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mix Veg ...........Rs.150">Mix Veg ...........Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Paneer Patiyala .......Rs.220">Paneer Patiyala .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Paneer Rajwada .......Rs.200">Paneer Rajwada .......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Veg Haydrabadi .......Rs.170">Veg Haydrabadi .......Rs.170</td>
<td><input type="checkbox" name="brands[]" value="Veg Rayata ..........Rs.70">Veg Rayata ..........Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chana Masala .........Rs.130">Chana Masala .........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Makkhanwala .....Rs.180">Paneer Makkhanwala .....Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Paneer Khanjana ......Rs.240">Paneer Khanjana ......Rs.240</td>
<td><input type="checkbox" name="brands[]" value="Veg Kahima Masala ......Rs.190">Veg Kahima Masala ......Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Pineapple Raita ......Rs.80">Pineapple Raita ......Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Aloo Mutter .......Rs.130">Aloo Mutter .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Palak Paneer .......Rs.150">Palak Paneer .......Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Paneer Lajij .......Rs.220">Paneer Lajij .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Veg Patiyala .......Rs.200">Veg Patiyala .......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Green Salad .......Rs.50">Green Salad .......Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Aloo Palak .........Rs.130">Aloo Palak .........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Pasanda .......Rs.220">Paneer Pasanda .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Paneer Maharaja ........Rs.210">Paneer Maharaja ........Rs.210</td>
<td><input type="checkbox" name="brands[]" value="Veg Chilli-Milli .......Rs.190">Veg Chilli-Milli .......Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Dahi Plate ........Rs.50">Dahi Plate ........Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Aloo Methi ........Rs.130">Aloo Methi ........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Kadhai .......Rs.180">Paneer Kadhai .......Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Paneer Lahori .......Rs.220">Paneer Lahori .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Veg Kofta .......Rs.180">Veg Kofta .......Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Dahi Wati .......Rs.30">Dahi Wati .......Rs.30</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bhendi Masala .......Rs.130">Bhendi Masala .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Bhurji .......Rs.200">Paneer Bhurji .......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Veg Tiranga ........Rs.250">Veg Tiranga ........Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Veg Bhunna .......Rs.160">Veg Bhunna .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Lasoon Fry .......Rs.90">Lasoon Fry .......Rs.90</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bhendi Fry .......Rs.140">Bhendi Fry .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Mutter .......Rs.150">Paneer Mutter .......Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Veg Angara .......Rs.220">Veg Angara .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Masala .......Rs.160">Mushroom Masala .......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Gobi Masala ........Rs.130">Gobi Masala ........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Masala .......Rs.160">Paneer Masala .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Veg Tufani ........Rs.230">Veg Tufani ........Rs.230</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Mutter Masala .......Rs.160">Mushroom Mutter Masala .......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bengan Bharta .......Rs.140">Bengan Bharta .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Kaju Masala .......Rs.200">Paneer Kaju Masala .......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Paneer Angara ........Rs.230">Paneer Angara ........Rs.230</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Paneer Masala .......Rs.170">Mushroom Paneer Masala .......Rs.170</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bengan Masala .......Rs.130">Bengan Masala .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Hydrabadi .......Rs.160">Paneer Hydrabadi .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Paneer Toofani .......Rs.250">Paneer Toofani .......Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Kaju Masala .......Rs.200">Kaju Masala .......Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Plain Palak ........Rs.130">Plain Palak ........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Chatpata ........Rs.170">Paneer Chatpata ........Rs.170</td>
<td><input type="checkbox" name="brands[]" value="Veg Banjara ........Rs.180">Veg Banjara ........Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Babycom Masala .......Rs.160">Babycom Masala .......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Lasoon Palak .......Rs.140">Lasoon Palak .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Lababdar .......Rs.190">Paneer Lababdar .......Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Veg Jalfiji .......Rs.200">Veg Jalfiji .......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Babycom Butter Masala ........Rs.170">Babycom Butter Masala ........Rs.170</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Green Peas Masala .......Rs.140">Green Peas Masala .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Mushroom ........Rs.180">Paneer Mushroom ........Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Palak Kofta ........Rs.200">Palak Kofta ........Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Kadhai ........Rs.160">Veg Kadhai ........Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Paneer Da Payasa ........Rs.170">Paneer Da Payasa ........Rs.170</td>
<td><input type="checkbox" name="brands[]" value="Veg Lajij ........Rs.200">Veg Lajij ........Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chana Fry .......Rs.140">Chana Fry .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Rajma ........Rs.160">Paneer Rajma ........Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Rajma Masala ........Rs.130">Rajma Masala ........Rs.130</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Aloo Jeera .......Rs.130">Aloo Jeera .......Rs.130</td>
</tr>



<tr>
<th> Maharashraian Dishesh </th>
<th> Handi Special (Full) </th>
<th> Handi Special (Half) </th>
<th> Tandoori Item </th>
<th> Rice </th>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Shev Bhaji .......Rs.130">Shev Bhaji .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Paneer Handi ............Rs.430">Paneer Handi ............Rs.430</td>
<td><input type="checkbox" name="brands[]" value="Paneer Handi ............Rs.250">Paneer Handi ............Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Roti .........Rs.15">Roti .........Rs.15</td>
<td><input type="checkbox" name="brands[]" value="Steam Rice(Full) .......Rs.70">Steam Rice(Full) .......Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Akkha Masoor .......Rs.130">Akkha Masoor .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Veg Handi .................Rs.400">Veg Handi .................Rs.400</td>
<td><input type="checkbox" name="brands[]" value="Veg Handi .................Rs.230">Veg Handi .................Rs.230</td>
<td><input type="checkbox" name="brands[]" value="Butter Roti ........Rs.20">Butter Roti ........Rs.20</td>
<td><input type="checkbox" name="brands[]" value="Steam Rice(Half) .......Rs.50">Steam Rice(Half) .......Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Maratha ........Rs.160">Veg Maratha ........Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Handi ........Rs.430">Mushroom Handi ........Rs.430</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Handi ........Rs.250">Mushroom Handi ........Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Gehu Roti ........Rs.20">Gehu Roti ........Rs.20</td>
<td><input type="checkbox" name="brands[]" value="Jeera Rice (Full) .......Rs.80">Jeera Rice (Full) .......Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Paneer Maratha ........Rs.180">Paneer Maratha ........Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Kaju-Paneer Handi ......Rs.450">Kaju-Paneer Handi ......Rs.450</td>
<td><input type="checkbox" name="brands[]" value="Kaju-Paneer Handi ......Rs.260">Kaju-Paneer Handi ......Rs.260</td>
<td><input type="checkbox" name="brands[]" value="Gehu Butter Roti .......Rs.25">Gehu Butter Roti .......Rs.25</td>
<td><input type="checkbox" name="brands[]" value="Jeera Rice (Half) ........Rs.60">Jeera Rice (Half) ........Rs.60</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Kolhapuri ........Rs.160">Veg Kolhapuri ........Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Green Peas Handi .......Rs.380">Green Peas Handi .......Rs.380</td>
<td><input type="checkbox" name="brands[]" value="Green Peas Handi .......Rs.230">Green Peas Handi .......Rs.230</td>
<td><input type="checkbox" name="brands[]" value="Plain Naan ........Rs.40">Plain Naan ........Rs.40</td>
<td><input type="checkbox" name="brands[]" value="Veg Pulav ........Rs.130">Veg Pulav ........Rs.130</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Paneer Kolhapuri .....Rs.170">Paneer Kolhapuri .....Rs.170</td>
<td><input type="checkbox" name="brands[]" value="Kaju Handi ............Rs.480">Kaju Handi ............Rs.480</td>
<td><input type="checkbox" name="brands[]" value="Kaju Handi ............Rs.270">Kaju Handi ............Rs.270</td>
<td><input type="checkbox" name="brands[]" value="Butter Naan .......Rs.50">Butter Naan .......Rs.50</td>
<td><input type="checkbox" name="brands[]" value="Paneer Pulav ......Rs.140">Paneer Pulav ......Rs.140</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Methi Lasoon ........Rs.140">Methi Lasoon ........Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Shevbhaji Handi ........Rs.320">Shevbhaji Handi ........Rs.320</td>
<td><input type="checkbox" name="brands[]" value="Shevbhaji Handi ........Rs.190">Shevbhaji Handi ........Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Kulcha .........Rs.50">Kulcha .........Rs.50</td>
<td><input type="checkbox" name="brands[]" value="Kashmiri Pulav  .......Rs.160">Kashmiri Pulav  .......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Methi Masala .......Rs.130">Methi Masala .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Akkha Masoor Handi ......Rs.320">Akkha Masoor Handi ......Rs.320</td>
<td><input type="checkbox" name="brands[]" value="Akkha Masoor Handi ......Rs.190">Akkha Masoor Handi ......Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Butter Kulcha ......Rs.60">Butter Kulcha ......Rs.60</td>
<td><input type="checkbox" name="brands[]" value="">Green Peas Pulav ......Rs.130</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Malwani ......Rs.200">Veg Malwani ......Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Dal Tadka Handi ..........Rs.320">Dal Tadka Handi ..........Rs.320</td>
<td><input type="checkbox" name="brands[]" value="Dal Tadka Handi ..........Rs.190">Dal Tadka Handi ..........Rs.190</td>
<td><input type="checkbox" name="brands[]" value="Garlic Butter Naan .....Rs.80">Garlic Butter Naan .....Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Tawa Pulav ......Rs.160">Veg Tawa Pulav ......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mataki Masala ......Rs.130">Mataki Masala ......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Mumtaj Handi ..........Rs.480">Mumtaj Handi ..........Rs.480</td>
<td><input type="checkbox" name="brands[]" value="Mumtaj Handi ............Rs.270">Mumtaj Handi ............Rs.270</td>
<td><input type="checkbox" name="brands[]" value="Cheese Garlic Butter Naan .....Rs.90">Cheese Garlic Butter Naan .....Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Paneer Tawa Pulav .....Rs.170">Paneer Tawa Pulav .....Rs.170</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mataki Fry .........Rs.140">Mataki Fry .........Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Paneer Tikka Handi ........Rs.450">Paneer Tikka Handi ........Rs.450</td>
<td><input type="checkbox" name="brands[]" value="Paneer Tikka Handi ........Rs.250">Paneer Tikka Handi ........Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Cheese Butter Naan ....Rs.80">Cheese Butter Naan ....Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Biryani ....Rs.160">Veg Biryani ....Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Pithal .......Rs.130">Pithal .......Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Diwani Handi ........Rs.450">Diwani Handi ........Rs.450</td>
<td><input type="checkbox" name="brands[]" value="Diwani Handi ........Rs.250">Diwani Handi ........Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Alloo Parotha .......Rs.70">Alloo Parotha .......Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Haidrabadi Biryani ......Rs.160">Haidrabadi Biryani ......Rs.160</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Soyabean Masala .......Rs.13">Soyabean Masala .......Rs.130</td>
<td></td>
<td></td>
<td><input type="checkbox" name="brands[]" value="Gobi Parotha ......Rs.70">Gobi Parotha ......Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Masala Rice ......Rs.130">Masala Rice ......Rs.130</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Soyabean Fry ......Rs.140">Soyabean Fry ......Rs.140</td>
<td></td>
<td></td>
<td><input type="checkbox" name="brands[]" value="Paneer Parotha ......Rs.90">Paneer Parotha ......Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Dal Khichadi ......Rs.110">Dal Khichadi ......Rs.110</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" name="brands[]" value="Veg Parotha ......Rs.8">Veg Parotha ......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Curd Rice ......Rs.100">Curd Rice ......Rs.100</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" name="brands[]" value="Missi Parotha ......Rs.50">Missi Parotha ......Rs.50</td>
<td><input type="checkbox" name="brands[]" value="Palak Khichadi ......Rs.120">Palak Khichadi ......Rs.120</td>
</tr>



<tr>
<th> Chinese </th>
<th> Dal Special </th>
<th> Soup </th>
<th> Soup 1/2 </th>
<th> Sweet Dish Curry </th>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Fried Rice .......Rs.140">Veg Fried Rice .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Dal Tadaka ........Rs.11">Dal Tadaka ........Rs.110</td>
<td><input type="checkbox" name="brands[]" value="Veg Manchow Soup .......Rs.80">Veg Manchow Soup .......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Manchow Soup .......Rs.100">Veg Manchow Soup .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Shahi Paneer ........Rs.18">Shahi Paneer ........Rs.180</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Schezwan Fried Rice ........Rs.150">Veg Schezwan Fried Rice ........Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Dal Kolhapuri ........Rs.12">Dal Kolhapuri ........Rs.120</td>
<td><input type="checkbox" name="brands[]" value="Cream Of Tomato ........Rs.70">Cream Of Tomato ........Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Cream Of Tomato ........Rs.90">Cream Of Tomato ........Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Methi Malai Mutter .......Rs.190">Methi Malai Mutter .......Rs.190</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Schezwan Triple Rice .......Rs.180">Veg Schezwan Triple Rice .......Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Butter Dal Fry ........Rs.130">Butter Dal Fry ........Rs.130</td>
<td><input type="checkbox" name="brands[]" value="Cream Of Mushroom .......Rs.80">Cream Of Mushroom .......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Cream Of Mushroom .......Rs.100">Cream Of Mushroom .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Kaju Curry ........Rs.200">Kaju Curry ........Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mushroom Fried Rice .......Rs.150">Mushroom Fried Rice .......Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Dal Fry ........Rs.100">Dal Fry ........Rs.100</td>
<td><input type="checkbox" name="brands[]" value=Dal Fry........Rs.80>"Dal Fry........Rs.80"</td>
<td><input type="checkbox" name="brands[]" value="Veg Sweet Corn Soup ........Rs.100">Veg Sweet Corn Soup ........Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Malai Kofta ........Rs.200">Malai Kofta ........Rs.200</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Hakka Noodles .......Rs.140">Veg Hakka Noodles .......Rs.140</td>
<td><input type="checkbox" name="brands[]" value="Plain Dal .......Rs.90">Plain Dal .......Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Veg Hot & Sour Soup .......Rs.80">Veg Hot & Sour Soup .......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Hot & Sour Soup .......Rs.100">Veg Hot & Sour Soup .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Dum Aloo Kashmiri ........Rs.220<">Dum Aloo Kashmiri ........Rs.220</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Schezwan Noodles .......Rs.150">Veg Schezwan Noodles .......Rs.150</td>
<td><input type="checkbox" name="brands[]" value="Dal Wati ......Rs.30">Dal Wati ......Rs.30</td>
<td><input type="checkbox" name="brands[]" value="Clear Soup .......Rs.70">Clear Soup .......Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Clear Soup ........Rs.90">Clear Soup ........Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Paneer Butter Masala .......Rs.180">Paneer Butter Masala .......Rs.180</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Chow Mein .......Rs.150">Veg Chow Mein .......Rs.150</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chinese Bhel .......Rs.100">Chinese Bhel .......Rs.100</td>
</tr>



<tr>
<th> Sandwitch </th>
<th> Tawa Special </th>
<th> Thali </th>
<th> Beverages </th>
<th> Special Lassi </th>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chinese Bhel .......Rs.100">Veg Sandwitch .......Rs.50</td>
<td><input type="checkbox" name="brands[]" value="Kaju Tawa ........Rs.200">Kaju Tawa ........Rs.200</td>
<td><input type="checkbox" name="brands[]" value="Balaji Veg Thali .......Rs.160">Balaji Veg Thali .......Rs.160</td>
<td><input type="checkbox" name="brands[]" value="Tea .......Rs.20">Tea .......Rs.20</td>
<td><input type="checkbox" name="brands[]" value="Sweet Lassi ........Rs.60<">Sweet Lassi ........Rs.60</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Toast Sandwitch ........Rs.80">Veg Toast Sandwitch ........Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Paneer Tawa ........Rs.180<">Paneer Tawa ........Rs.180</td>
<td><input type="checkbox" name="brands[]" value="Deluxe Thali ........Rs.250">Deluxe Thali ........Rs.250</td>
<td><input type="checkbox" name="brands[]" value="Special Tea ........Rs.25">Special Tea ........Rs.25</td>
<td><input type="checkbox" name="brands[]" value="Dry Fruit Lassi ........Rs.90">Dry Fruit Lassi ........Rs.90</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Grill Sandwitch ......Rs.80">Veg Grill Sandwitch ......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Veg Tawa ........Rs.17">Veg Tawa ........Rs.170</td>
<td><input type="checkbox" name="brands[]" value="Maharashtrian Veg Thali .......Rs.220">Maharashtrian Veg Thali .......Rs.220</td>
<td><input type="checkbox" name="brands[]" value="Coffee ........Rs.25">Coffee ........Rs.25</td>
<td><input type="checkbox" name="brands[]" value="Mango Lassi ........Rs.70">Mango Lassi ........Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Cheese Sandwitch .......Rs.100">Veg Cheese Sandwitch .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Tawa .......Rs.180">Mushroom Tawa .......Rs.180</td>
<td> ....Rs.</td>
<td><input type="checkbox" name="brands[]" value="Hot Milk .......Rs.40">Hot Milk .......Rs.40</td>
<td><input type="checkbox" name="brands[]" value="Strawberry Lassi ......Rs.70<">Strawberry Lassi ......Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Plain Cheese Sandwitch .....Rs.70">Plain Cheese Sandwitch .....Rs.70</td>
<td><input type="checkbox" name="brands[]" value="Mushroom Paneer Tawa .....Rs.190">Mushroom Paneer Tawa .....Rs.190</td>
<td> ....Rs.</td>
<td> ....Rs.</td>
<td><input type="checkbox" name="brands[]" value="Rose Lassi ........Rs.70">Rose Lassi ........Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chatani Sandwitch .......Rs.40">Chatani Sandwitch .......Rs.40</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Veg Grill Cheese Sandwitch .....Rs.120">Veg Grill Cheese Sandwitch .....Rs.120</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Toast Butter .......Rs.80">Toast Butter .......Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bread Butter .......Rs.50">Bread Butter .......Rs.50</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Bread Butter Jam .......Rs.60">Bread Butter Jam .......Rs.60</td>
</tr>


<tr>
<th> Milkshake </th>
<th> Juice </th>
</tr>

<tr>
<td><input type="checkbox" name="brands[]" value="Cold Coffee ........Rs.60">Cold Coffee ........Rs.60</td>
<td><input type="checkbox" name="brands[]" value="Mosambi Juice .........Rs.80">Mosambi Juice .........Rs.80</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Chocolate MilkShake .......Rs.80">Chocolate MilkShake .......Rs.80</td>
<td><input type="checkbox" name="brands[]" value="Pineapple Juice ........Rs.90">Pineapple Juice ........Rs.90</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Rose MilkShake .......Rs.90">Rose MilkShake .......Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Watermelon Juice ......Rs.70">Watermelon Juice ......Rs.70</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Pineapple Milkshake .......Rs.100">Pineapple Milkshake .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Apple Juice .........Rs.100">Apple Juice .........Rs.100</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Butter Scotch .......Rs.100">Butter Scotch .......Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Mix Juice ........Rs.120">Mix Juice ........Rs.120</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Strawberry .........Rs.90">Strawberry .........Rs.90</td>
<td><input type="checkbox" name="brands[]" value="Lemon Soda .........Rs.60">Lemon Soda .........Rs.60</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Mango ..........Rs.100">Mango ..........Rs.100</td>
<td><input type="checkbox" name="brands[]" value="Lemon Juice .......Rs.40">Lemon Juice .......Rs.40</td>
</tr>
<tr>
<td><input type="checkbox" name="brands[]" value="Banana .......Rs.80">Banana .......Rs.80</td>
</tr>
<tr>
<div class="form-group">
                                    <button type="submit" name="save_multipal_checkbox" class=" btn btn-primary">Order The Menu</button> 
  
                                 </div>
</tr>



                                 

</tr>
</table>

</div>
   <div class="form-group">
 <button type="submit" name="save_multipal_checkbox" class=" btn btn-primary">Order The Menu</button>
    </div>




                             </form>
                       </div>
                </div>
          </div>
     </div>
</div>

</body>
</html>
