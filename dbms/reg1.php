<?php
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "tripplanner";
  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  if($conn -> connect_error){
	die("Connection failed :".$conn -> connect_error);
  }
  $first = $_POST['fname'];
  $last = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  echo $first." ".$last;
  //setcookie("user-name", $first.$last, time() + (86400 * 30), "/"); 
  $sql = "INSERT INTO user (First_name,last_name,email,pass) VALUES('$first','$last','$email','$password');";
  mysqli_query($conn,$sql);
  header("Location:login.php"); 
?>