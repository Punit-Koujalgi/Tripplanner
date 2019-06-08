<?php
 $city=$_GET['q'];

 $db=mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
 $query="SELECT airlines_name,arrival_city from flight where dept_city='$city';";
 $result=mysqli_query($db,$query);
 $arr=Array();
if(mysqli_num_rows($result)>0)
{	
 while($row=mysqli_fetch_assoc($result))
  	$arr[$row['airlines_name']]=$row['arrival_city'];
 //print_r($arr);
 //	$arr=mysqli_fetch_array($result);
 $myjson=json_encode($arr);

 echo $myjson;
}
else
 echo json_encode($arr);
?>
