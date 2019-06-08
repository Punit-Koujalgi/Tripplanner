<!DOCTYPE html>
<html>
<head>
	<title>Trip-planner</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
     body{
      background-image:url(193183.jpg);
      background-size:cover;
      background-position:center;
    }
    #ui{
      background-color:#DDA0DD;
      padding:30px;
      margin-top:40px;
      border-radius:10px;
      opacity:0.9;
    }
    #ui label,h1,h3,.list-group{
      color:black;
    }
    .list-group-item{
      background-color: #DDA0DD;
      border-color:;
    }
    
  </style>
</head>
<body>

	<nav class="navbar navbar-default" style="background-color:#DDA0DD;">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:black;">Tripplanner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#" style="color:black;">Page 1</a></li>
      <li><a href="#" style="color:black;">Page 2</a></li>
      <li><a href="login.php" style="color:black;">Logout</a></li>
    </ul>
  </div>
	</nav>

 <h2 style="background-color: #DDA0DD;font-style: bold;">Employees added by you</h2>
  <div class="list-group" id="try">
  
</div>

<div id="num" style="background-color: #DDA0DD;font-size:15px;font-style: bold;"></div><br>
<h2 style="background-color: #DDA0DD;font-style: bold;">Employee Stats</h2>
<div class="list-group" id="try1">
  
</div>


<!-- Modal -->
<div class = "container">
    <div class = "row">
      <div class = "col-lg-3"></div>
      <div class = "col-lg-6">
        <div id = "ui">
          <h1 class = "text-center">Add Employee</h1>
          <form class = "form-group text-center" action = "add_emp.php" method = "POST">
            <div class = "row">
              <div class = "col - md - 6">
                <label>Id-number: </label>
                <input type="text" name="id" class = "form-control" placeholder = "Enter Id">
              </div>
              <div class = "col - md - 6">
                <label>Name: </label>
                <input type="text" name="name" class = "form-control" placeholder = "Enter your name">
              </div>
            </div>
            <br>
                        <label>Username:</label>
                        <input type="text" name="uname" placeholder = "Enter your name" class = "form-control"><br>
                        <div class = "row">
              <div class = "col - md - 6">
                <label>Password : </label>
                <input type="text" name="password" class = "form-control" placeholder = "Enter new password">
              </div>
              <div class = "col - md - 6">
                <label>Salary: </label>
                <input type="text" name="sal" class = "form-control" placeholder = "Enter salary">
              </div>
            </div>
            <br>
            <select class = "form-control" name = "gender">
              <option>Choose Gender</option>
              <option value = "Male">Male</option>
              <option value = "female">female</option>
              <option value = "others">others</option>
            </select>
            <br>
            <Label>Adress :</Label>
            <input type="text" name="adress" class = "form-control" placeholder = "Enter your address">
            <br>
            <Label>Phone No:</Label>
            <input type="number" name="Pno" class = "form-control" placeholder = "Phone no">
            <br>
            <Label>Admin Id:</Label>
            <input type="text" name="ad_id" class = "form-control" placeholder = "Admin Id">
            <br>
            <input type="submit" name="submit" value = "submit" class = "btn btn-primary btn-block" >
          </form>
        </div>
      </div>
      <div class = "col-lg-3"></div>
    </div>
  



<?php

    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $name=$_COOKIE['adminname'];
    $name=explode("+",$name);
    $name=$name[0];//." ".$name[1];
 //   echo $name;
    $res=mysqli_query($db,"select E.Name from administrator as A,employee as E where A.Id_number=E.admin_id and A.name='".$name."';");
    if($rows=mysqli_num_rows($res))
    {

      //print_r(mysqli_fetch_assoc($res)['Name']);
      $row=mysqli_fetch_assoc($res);
      //print_r($row);
      $i=0;
      while($row)
      {
        //print_r(mysqli_fetch_assoc($res)['Name']);
        //print_r($row);
        echo "<script type='text/javascript'> 
                       var t=document.getElementById('try');
                       
                       
                       var a=document.createElement('a');
                       a.innerText='".$row['Name']."';
                       a.className='list-group-item';
                       a.style='font-size:18px;color:black;';
                       
                       
                       t.appendChild(a);
                       var b=document.createElement('button');
                       b.innerText='view more';
                       a.appendChild(b);
                       b.className='btn btn-info openBtn';
                       b.style='position:absolute;bottom:2px;left:90%;font-style:bold;';</script>";

        $row=mysqli_fetch_assoc($res);  

      }
      mysqli_close($db);  
    } 

    echo "<script type=text/JavaScript> var d=document.getElementById('num');

          d.innerText='There are ".$rows." employees added by ".$name."';</script>";


?>

  <script type="text/javascript">
   function goModal(e){
        var str=e.target.parentNode.textContent;
        
        str=str.slice(0,str.length-9);
        console.log(str);
      document.cookie='user='+str+';';      
      window.open('home.php','_self');

    } 
 var btns=document.querySelectorAll('button');   
 for(i=0;i<btns.length;i++)
      btns[i].addEventListener("click",goModal);



  </script>
    
  

    <?php
        $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
        $query="CREATE VIEW emp1
                AS SELECT emp_id,name,COUNT(*) AS count
                FROM package,employee,adminintrator A
                WHERE emp_id = id_number and admin_id=id_number
                GROUP BY emp_id, name;";
        mysqli_query($db,$query);
        $query1="SELECT emp_id,name
                FROM emp1
                WHERE count = ( SELECT max(count)
                FROM emp1 );";        

                
    $result=mysqli_query($db,$query1);
    //print_r($result);
    $row=mysqli_fetch_assoc($result);
    echo "<script>var x=document.getElementById('try1');
            var a=document.createElement('a');
            a.innerHTML='<strong>Employee who added most Packages is ".$row['name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";

        $query2="SELECT emp_id,name
                FROM emp1
                WHERE count = ( SELECT min(count)
                FROM emp1 );";
                $result=mysqli_query($db,$query2);     
                    $row=mysqli_fetch_assoc($result);
    echo "<script>var x=document.getElementById('try1');
            var a=document.createElement('a');
            a.innerHTML='<strong>Employee who added minimum Packages is ".$row['name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";

        $query3="CREATE VIEW count3
AS  SELECT package_id, COUNT(*) as count
  FROM RESERVATION
  GROUP BY package_id;";

  mysqli_query($db,$query3);

  $query4="SELECT name,salary
FROM EMPLOYEE
WHERE id_number IN(
  SELECT emp_id
  FROM PACKAGE
  WHERE package_id IN(
    SELECT package_id
    FROM count3
    WHERE count = ( SELECT max(count)
        FROM count3)));";

      $result=mysqli_query($db,$query4);
      while($row=mysqli_fetch_assoc($result))
      {
        echo "<script>var x=document.getElementById('try1');
            var a=document.createElement('a');
            a.innerHTML='<strong>Employee who sold Maximum Packages is ".$row['name']." whose salary is".$row['salary']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
      }            

    ?>





</body>
</html>