<?php
$db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
$city=$_GET['city'];
$hotel=$_GET['hotel'];
$flight=$_GET['flight'];
$name=$_COOKIE['customername'];
//echo $city.$hotel.$flight;
$query="SELECT customer_id from customer where First_name='$name';";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$customer_id=$row['customer_id'];

//echo "<script>console.log(".$customer_id.");</script>"
$query="SELECT Package_id from package where City='$city';";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$package_id='028-561-923-279';//$row['package_id'];
//echo $package_id;'028-561-923-279'

$query="SELECT hotel_id from hotel where hotel_name='$hotel';";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$hotel_id=$row['hotel_id'];
//echo $hotel_id;
$query="SELECT flight_id from flight where airlines_name='$flight';";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$flight_id=$row['flight_id'];
$i=94567+rand(10,100);
$query="INSERT INTO RESERVATION VALUES('$i','$customer_id','$package_id','$hotel_id','$flight_id');";
echo $query;
$result=mysqli_query($db,$query);
//echo mysqli_num_rows($result);


?>