<?php
$dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "tripplanner";
  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  if($conn -> connect_error){
	die("Connection failed :".$conn -> connect_error);
  }
  $id_no = $_POST['id'];
  $gender = $_POST['gender'];
  $Name = $_POST['name'];
  $Username = $_POST['uname'];
  $password = $_POST['password'];
  $Salary = $_POST['sal'];
  $Address = $_POST['adress'];
  $Phoneno = $_POST['Pno'];
  $admin_id = $_POST['ad_id'];
  $sql = "INSERT INTO EMPLOYEE values('$id_no','$Name','$Username','$password','$Salary','$gender','$Address','$Phoneno','$admin_id');";
  mysqli_query($conn,$sql);
  header("Location:admin.php");
?>