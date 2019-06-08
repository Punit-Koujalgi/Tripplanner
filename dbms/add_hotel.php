<?php
	  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	 $dbServername = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbName = "tripplanner";
     $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
     if($conn -> connect_error){
	    die("Connection failed :".$conn -> connect_error);
     }
     $id=$_POST["Id"];$hname=$_POST["hname"];
     $rating=$_POST["rate"];$price=$_POST["price"];
     $rooms=$_POST["rooms"];$desc=$_POST["des"];
     $city=$_POST["city"];$empid=$_POST["emp-id"];

     $name=$_COOKIE["employeename"];
     $result=mysqli_query($conn,"SELECT Id_number FROM EMPLOYEE WHERE Name='$name';");
     $result1=mysqli_fetch_assoc($result);
     if($result!=$result1)
     	header("Location:employee.php");
     
     $query="INSERT INTO HOTEL VALUES('$id','$hname','$rating','$desc','$price','$rooms','$city','$empid');";
     
     $result=mysqli_query($conn,$query);
     header("Location:employee.php");
}
?>