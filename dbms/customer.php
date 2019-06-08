<!DOCTYPE html>
<html>
<head>
  <title>Book your trip</title>
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


  <div class="list-group" id="try">
  
</div>
<div id='city' style="text-align: center;">
    <p style="width:30%;height:40px;font-size:18px;text-align: center;background-color:#DDA0DD;position:relative;left:35%">SELECT CITY YOU WANT TO VISIT</p><br>
    <select id="myselect" name="city" onchange="myfunc(this)" style="height:40px">
      <option value="lala">city</option>

    </select>
          <?php
        $db=mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
        $query="SELECT DISTINCT CITY FROM PACKAGE;";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_assoc($result))
          //echo "<option value=".$row['CITY'].">".$row['CITY']."</option>";
          echo "<script> var x = document.getElementById('myselect');
var option = document.createElement('option');
option.text = '".$row['CITY']."';
x.add(option);</script>";
      ?> 
</div>
  <p style="background-color: #DDA0DD;font-style:bold;font-size:24px;text-align:center;margin-top: 10px;width: 30%;position: relative;left:35%">Places</p>
  <div class="list-group" id="try1">
  
  </div>  


 <p style="background-color: #DDA0DD;font-style:bold;font-size:24px;text-align:center;margin-top: 10px;width: 30%;position: relative;left:35%">Flights</p>
  <div class="list-group" id="try2">
  
  </div>

  <p style="background-color: #DDA0DD;font-size:24px;text-align:center;margin-top: 10px;width: 30%;position: relative;left:35%">Hotels</p>
  <div class="list-group" id="try3">
  
  </div>  
  <script type="text/javascript">
    function myfunc(){
      var x=document.getElementById("myselect").value;
      console.log(x);

      var y=document.getElementById("try1"); 
      while(y.firstChild)
                  y.removeChild(y.firstChild);
      //document.cookie = "city="+x+"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var arr = JSON.parse(this.responseText);
                var x=document.getElementById("try1");
                
                for (var i = arr.length - 1; i >= 0; i--) {
                  var a=document.createElement("a");
                  a.className="list-group-item";
                  a.innerHTML=arr[i];
                  x.appendChild(a);
                  console.log(arr[i]);
                }
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + x, true);
        xmlhttp.send();


      y=document.getElementById("try2"); 
      while(y.firstChild)
                  y.removeChild(y.firstChild);
      //document.cookie = "city="+x+"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
       var xmlhttp1 = new XMLHttpRequest();
        xmlhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var obj = JSON.parse(this.responseText);
                var x=document.getElementById("try2");
                
                for(var prop in obj) {
                  var a=document.createElement("a");
                  a.className="list-group-item";
                  a.innerHTML="<input type='checkbox' id='ch' value='"+prop+"'> "+prop+" , "+obj[prop];
                  x.appendChild(a);
                  //console.log(arr[i]);
                }
            }
        };
        xmlhttp1.open("GET", "gethint1.php?q=" + x, true);
        xmlhttp1.send();


      y=document.getElementById("try3"); 
      while(y.firstChild)
                  y.removeChild(y.firstChild);
      //document.cookie = "city="+x+"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
       var xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var obj = JSON.parse(this.responseText);
                var x=document.getElementById("try3");
                
                for(var prop in obj) {
                  var a=document.createElement("a");
                  a.className="list-group-item";
                  a.innerHTML="<input type='checkbox' id='ch' value='"+prop+"'> "+prop+" , "+obj[prop];

                  x.appendChild(a);

                }
            }
        };
        xmlhttp2.open("GET", "gethint2.php?q=" + x, true);
        xmlhttp2.send();

    }
  </script>
  <button type='button' class='btn btn-info' onclick="func()" style='position:relative;left:45%;'>Book Package</button>
  <script type="text/javascript">
    function func(){
      var chall=document.querySelectorAll("#ch");
      console.log(chall);
      var q=[];var j=0;
      for(var i=0;i<chall.length;i++)
       {
        if(chall[i].checked)
            q[j++]=(chall[i].value);
       }
       console.log(q);
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                alert("successfully booked");
            }
        };
        //x=document.getElementById("myselect").value;
        console.log("gethint4.php?flight="+q[0]+"&hotel="+q[1]+"&city="+x.value);
        //console.log("gethint4.php?flight="+q[0]+"&hotel="+q[1]+"&city="+x.value);
        xmlhttp.open("GET", "gethint4.php?flight="+q[0]+"&hotel="+q[1]+"&city="+x.value , true);
        xmlhttp.send();


    }


  </script>

  <p style="background-color: #DDA0DD;font-style:bold;font-size:24px;margin-top: 10px;width: 30%;text-align: center;position: relative;left:35%">Flight recommendations</p>
  <div class="list-group" id="try4">
  
  </div>
  <?php
      $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
      $query="CREATE VIEW count1
AS SELECT flight_id,COUNT(*) AS count
FROM RESERVATION 
GROUP BY flight_id;";
  mysqli_query($db,$query);
  $query2="SELECT airlines_name,flight_id
FROM flight
WHERE flight_id in( SELECT flight_id
      FROM count1
      WHERE count = ( SELECT max(count)
          FROM count1));";
          $result=mysqli_query($db,$query2);
          while($row=mysqli_fetch_assoc($result))
          {

            echo "<script>var x=document.getElementById('try4');
            var a=document.createElement('a');
            a.innerHTML='<strong>Most Booked Airlines is ".$row['airlines_name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
          }  
?>

  <p style="background-color: #DDA0DD;font-style:bold;font-size:24px;margin-top: 10px;width: 30%;text-align: center;position: relative;left:35%">Hotel recommendations</p>
  <div class="list-group" id="try5">
  
  </div>

  <?php
      $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
      $query="CREATE VIEW count2
AS SELECT hotel_id,COUNT(*) AS count
FROM RESERVATION 
GROUP BY hotel_id;";
  mysqli_query($db,$query);
  $query2="SELECT hotel_name
FROM hotel
WHERE hotel_id in( SELECT hotel_id
      FROM count2
      WHERE count = ( SELECT max(count)
          FROM count2));";
          $result=mysqli_query($db,$query2);
          while($row=mysqli_fetch_assoc($result))
          {

            echo "<script>var x=document.getElementById('try5');
            var a=document.createElement('a');
            a.innerHTML='<strong>Most Booked Hotel is ".$row['hotel_name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
          }  

  ?>

  <p style="background-color: #DDA0DD;font-style:bold;font-size:24px;margin-top: 10px;width: 30%;text-align: center;position: relative;left:35%">Previous Bookings made you</p>
  <div class="list-group" id="tryit">
  
  </div>
  <?php
    $name=$_COOKIE['customername'];
    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $query="SELECT hotel_name 
FROM hotel
WHERE hotel_id IN(
  SELECT hotel_id
  FROM Reservation AS r
  WHERE r.customer_id IN
    (SELECT customer_id
     FROM customer
     WHERE first_name = '$name'));";    
$result=mysqli_query($db,$query);
while($row=mysqli_fetch_assoc($result))
{
    echo "<script>var x=document.getElementById('tryit');
            var a=document.createElement('a');
            a.innerHTML='<strong>Hotel: ".$row['hotel_name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
}
$query="SELECT airlines_name
FROM flight
WHERE flight_id IN(
  SELECT flight_id
  FROM Reservation
  WHERE customer_id IN
    (SELECT customer_id
     FROM customer
     WHERE first_name = '$name'));
";
$result=mysqli_query($db,$query);
while($row=mysqli_fetch_assoc($result))
{
    echo "<script>var x=document.getElementById('tryit');
            var a=document.createElement('a');
            a.innerHTML='<strong>Airlines: ".$row['airlines_name']."</strong>';
            a.className='list-group-item';
            x.appendChild(a);</script>";
}

  ?>

</body>
</html>