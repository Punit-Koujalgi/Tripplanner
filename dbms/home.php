<!DOCTYPE html>
<html>
<head>
	<title>employee Details</title>
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
	 <div class="list-group" id="try">
  
</div>
	<?php 
			$name=$_COOKIE['user'];
			$db=mysqli_connect("localhost","root","","tripplanner");
			$query="select * from employee where name='$name'";
			$res=mysqli_query($db,$query);
			
								
			if(mysqli_num_rows($res))
			{
				$row=mysqli_fetch_assoc($res);
				//echo "<div><strong> Employee name is ".$row['Name']."</strong></div>";
				foreach($row as $key=>$value)
				{	//echo $key."</br>";
					echo "<script>var t=document.getElementById('try');
							var a=document.createElement('div');
							a.innerText=".$key."     =>      ".$value.";
							a.className='list-group-item';
							t.appendChild(a);</script>";
				}				
			}	

	 ?>



</body>
</html>