<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
     body{
      background-image:url(193183.jpg);
      background-size:cover;
      background-position:;
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
      <a class="navbar-brand" href="#" style="color:black;">Trip-Planner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#" style="color:black;">Page 1</a></li>
      <li><a href="#" style="color:black;">Page 2</a></li>
      <li><a href="login.php" style="color:black;">Logout</a></li>
    </ul>
    </div>
    </nav>
    <div style="background-color: #DDA0DD;">
    <h2 style="background-color: #DDA0DD;font-style: bold;"><b>Hotels by You</b></h2>
    <div class="list-group h" id="hotels">

    </div>	
    <div id='num1' style="background-color: #DDA0DD;font-size:15px;font-style: bold;"></div>
	</div>
    <?php
    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $name=$_COOKIE['employeename'];
    $name=explode("+",$name);
    //print_r($name);
    $name=$name[0];
    //echo $name;
    $res=mysqli_query($db,"select H.Hotel_Name from Hotel as H,employee as E where H.emp_id=E.Id_number and E.name='".$name."';");
    if($rows=mysqli_num_rows($res)?:0)
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
                       var t=document.getElementById('hotels');
                       
                       
                       var a=document.createElement('a');
                       a.innerText='".$row['Hotel_Name']."';
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
    echo "<script type=text/JavaScript> var d=document.getElementById('num1');
	d.innerText='There are ".$rows." hotels added by ".$name."';</script>"; ?>
	<div style="background-color: #DDA0DD">
    <h2 style="background-color: #DDA0DD;font-style: bold;"><b>Flights by You</b></h2>
    <div class="list-group h" id="flights">

    </div>
    <div id='num2' style="background-color: #DDA0DD;font-size:15px;font-style: bold;"></div>
	</div>
    <?php
    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $name=$_COOKIE['employeename'];
    $name=explode("+",$name);
    //print_r($name);
    $name=$name[0];
//    echo $name;
    $res=mysqli_query($db,"select F.Airlines_name from Flight as F,employee as E where F.emp_id=E.Id_number and E.name='".$name."';");
    if($rows=mysqli_num_rows($res)?:0)
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
                       var t=document.getElementById('flights');
                       
                       
                       var a=document.createElement('a');
                       a.innerText='".$row['Airlines_name']."';
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
        echo "<script type=text/JavaScript> var d=document.getElementById('num2');

          d.innerText='There are ".$rows." flights added by ".$name."';</script>"; ?>
    <div style="background-color: #DDA0DD">
    <h2 style="background-color: #DDA0DD;font-style: bold;"><b>Packages by You</b></h2>
	<div class="list-group h" id="packages">

    </div>
    <div id='num3' style="background-color: #DDA0DD;font-size:15px;font-style: bold;"></div>
	</div>
    <?php
    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $name=$_COOKIE['employeename'];
    $name=explode("+",$name);
    //print_r($name);
    $name=$name[0];
//    echo $name;
    $res=mysqli_query($db,"select P.city from package as P,employee as E where P.emp_id=E.Id_number and E.name='".$name."';");
    if($rows=mysqli_num_rows($res)?:0)
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
                       var t=document.getElementById('packages');
                       
                       
                       var a=document.createElement('a');
                       a.innerText='".$row['city']."';
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
        echo "<script type=text/JavaScript> var d=document.getElementById('num3');

          d.innerText='There are ".$rows." packages added by ".$name."';</script>"; ?>   
    <br>      
    <div>
      <h2 style="background-color: #DDA0DD;font-style: bold;"><b>Customers in highest rated hotels</b></h2>
    <div class="list-group h" id="tryit">

    </div>
    <?php
        $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
        $query="SELECT first_name, last_name
FROM CUSTOMER
WHERE customer_id IN(
  SELECT customer_id
  FROM RESERVATION
  WHERE hotel_id IN ( SELECT hotel_id
        FROM hotel
        WHERE rating = (SELECT MAX(rating) FROM hotel)));";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_assoc($result))
        {
          echo "<script>var x=document.getElementById('tryit');
            var a=document.createElement('a');
            a.innerHTML='<strong>".$row['first_name']." ".$row['last_name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
        }  
    ?>


    	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1" style="position:relative;left:30%">Add Hotel</button>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" style="position:relative;left:40%;">Add Flight</button>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="position:relative;left:50%;">Add Package</button>
    </div>    



  <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Hotel</h4>
      </div>
      <div class="modal-body">
        <form action="add_hotel.php" method="POST">
        	Hotel-Id<input type="text" name="Id">&nbsp;&nbsp;&nbsp;&nbsp;Hotel-name<input type="text" name="hname"><br>
        	  &nbsp;Rating  <input type="number" name="rate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price<input type="number" name="price"><br>
        	&nbsp;Rooms<input type="number" name="rooms"><br><br>
        	Description<br><input type="text" name="des" style="width:100%"><br><br>
        	&nbsp;&nbsp;City<input type="text" name="city">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee-Id<input type="text" name="emp-id"><br>
        	&nbsp;&nbsp;&nbsp;<input type="submit" name="sub">
        </form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add flight</h4>
      </div>
      <div class="modal-body">
        <form action="add_flight.php" method="POST">
        	<label>Flight-id </label><input type="text" name="Id" style="width:30%">&nbsp;&nbsp;&nbsp;&nbsp;
        	<label>Name </label><input type="text" name="name" style="width:30%"><br><br>
        	<label>Departure City  </label><input type="text" name="dept" style="width: 100%"><br><br>
        	<label>Arrivalcity </label><input type="text" name="arr" style="width: 100%"><br><br>
        	&nbsp;&nbsp;&nbsp;&nbsp;<label>Price  </label><input type="text" name="price" style="width: 30%">
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Emp-Id  </label><input type="text" name="emp-id" style="width: 30%">
          <input type="submit" name="sub">
        </form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Package</h4>
      </div>
      <div class="modal-body">
        <form action="add_package.php" method="POST">
        	Package-Id :<input type="text" name="Id" style="width: 30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	City : <input type="text" name="Id" style="width: 30%"><br>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rating :<input type="text" name="Id" style="width: 30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	Price :<input type="text" name="Id" style="width: 30%"><br>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emp-Id :<input type="text" name="Id" style="width: 30%">
          <input type="submit" name="sub">
        </form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>

