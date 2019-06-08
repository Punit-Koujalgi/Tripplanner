<?php
 $city=$_GET['q'];

 $db=mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
 $query="SELECT hotel_name,description from hotel where city='$city';";
 $result=mysqli_query($db,$query);
 $arr=Array();
if(mysqli_num_rows($result)>0)
{	
 while($row=mysqli_fetch_assoc($result))
  	$arr[$row['hotel_name']]=$row['description'];
 //print_r($arr);
 //	$arr=mysqli_fetch_array($result);
 $myjson=json_encode($arr);

 echo $myjson;
}
else
 echo json_encode($arr);
?>
