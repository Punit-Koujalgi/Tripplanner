<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>

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
   		margin-top:60px;
   		border-radius:10px;
   		opacity:0.9;
   	}
   	#ui label,h1{
   		color:black;
   	}
   	li a{
   		color:black;
   	}
   </style>
</head>
<body>
		<nav class="navbar navbar-default" style="background-color:#DDA0DD;">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:black;"><b>Trip Planner</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" style="color:black;">Home</a></li>
      <li><a href="#" style="color:black;">Page 1</a></li>
      <li><a href="#" style="color:black;">Page 2</a></li>
      <li><a href="#" style="color:black;">Page 3</a></li>
    </ul>
  </div>
	</nav>
	
	 <div class="list-group" id="try">

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6">
				<div id = "ui">
					<h1 class = "text-center">Login</h1>
					<form class = "form-group text-center" action = "log1.php" method = "POST">
						<div class = "row">
							<label>Username:</label>
							<input type="text" name="username" placeholder = "Enter your name" class = "form-control">
						</div>
                        <div class = "row">
							<label>Password:</label>
							<input type="password" name="password" placeholder = "Enter your password" class = "form-control">
						</div>
						
						<label>user-type</label>
						<select class = "form-control" name = "choice">
							<option value = "val1">Position</option>
							<option value = "Administrator">Administrator</option>
							<option value = "Employee">Employee</option>
							<option value = "Customer">Customer</option>
						</select>
						<br>
						<input type="submit" name="submit" value = "submit" class = "btn btn-primary btn-block">
						<label>Not Registerd ? <a href="registration.php">Sign up</a></label>
					</form>
				</div>
			</div>
			<div class = "col-lg-3"></div>
		</div>
	</div>
	<footer style="position:relative;top:50px;background-color:#DDA0DD;color:black;">
			<b>Contact us:</br></b>
				Punit Koujalgi&nbsp;&nbsp;&nbsp;        email:punit.koujalgi@gmail.com</br>
				Atul Anand    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  email:reachme.atul@gmail.com</br>
				Sahazeer K S  &nbsp;&nbsp;&nbsp;        email:sahazeerks@gmail.com
			<b style="position:relative;bottom:50px;right:20px;float:right;font-size:15px;">@PES university<br>100ft ring road<br>Banashakari 3rd stage,Bangalore-85</b>	
	</footer>
</body>
</html>
</html>
