<!DOCTYPE html>
<html>
<head>
	<title>Trip-planner</title>
 <!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
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
					<h1 class = "text-center">Register here</h1>
					<form class = "form-group text-center" action = "reg1.php" method = "POST">
						<div class = "row">
							<div class = "col - md - 6">
								<label>First Name : </label>
								<input type="text" name="fname" class = "form-control" placeholder = "Enter your first name">
							</div>
							<div class = "col - md - 6">
								<label>Last Name : </label>
								<input type="text" name="lastname" class = "form-control" placeholder = "Enter your last name">
							</div>
						</div>
						<br>
                        <label>E-mail:</label>
                        <input type="email" name="email" placeholder = "email" class = "form-control"><br>
                        <div class = "row">
							<div class = "col - md - 6">
								<label>Password : </label>
								<input type="text" name="password" class = "form-control" placeholder = "Enter new password">
							</div>
							<div class = "col - md - 6">
								<label>Re-type password : </label>
								<input type="text" name="lname" class = "form-control" placeholder = "retype password">
							</div>
						</div>
						<br>
						<select class = "form-control">
							<option>Choose Gender</option>
							<option>Male</option>
							<option>female</option>
							<option>others</option>
						</select>
						<br>
						<input type="submit" name="submit" value = "submit" class = "btn btn-primary btn-block">
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

