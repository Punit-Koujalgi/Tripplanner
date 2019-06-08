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
     $name = $_POST["username"];
	//setcookie("user-name", $name, time() + (86400 * 30), "/");
     $password = $_POST["password"];
     $position = $_POST["choice"];
     //echo $position;
     if($position=="Administrator")
     {
          $query="SELECT * FROM Administrator Where name='$name' and Pwd='$password';";
          $result=mysqli_query($conn,$query);
          $resultcheck=mysqli_num_rows($result);
          if($resultcheck>0){
               setCookie("adminname",$name, time() + (86400 * 30), "/");
               header("Location:admin.php");
          }

     }  
     if($position=="Employee")
     {
          $query="SELECT * FROM Employee Where name='$name' and Pwd='$password';";
          $result=mysqli_query($conn,$query);
          $resultcheck=mysqli_num_rows($result);
          if($resultcheck>0)
          {
               setCookie("employeename",$name,time()+(86400*30),"/");
               header("Location:employee.php");
          
          }


     }     
     if($position=="Customer")
      {
          $query="SELECT * FROM Customer Where First_name='$name' and Pwd='$password';";
          $result=mysqli_query($conn,$query);
          $resultcheck=mysqli_num_rows($result);
          if($resultcheck>0)
          {
               setCookie("customername",$name,time()+(86400*30),"/");
               header("Location:customer.php");
               echo "punit";          
          }
//          echo "punit";
//          echo "<script>alert('Invalid credentials')</script>";
//          header("Location:login.php");
      }    

     }   
  ?>