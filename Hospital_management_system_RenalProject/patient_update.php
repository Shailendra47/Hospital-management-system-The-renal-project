<?php
	$con = mysqli_connect('localhost', 'root');
	mysqli_select_db($con, 'register_patient');

	if (isset($_POST["done"])) {

		$id = $_GET['id'];
		$name = $_POST["name"];
		$phone_number = $_POST["phone_number"];
		$age = $_POST["age"];
		$dob = $_POST["dob"];
		$q = "UPDATE `patient` SET id = $id, name ='$name', phone_number = '$phone_number', age = '$age', dob = '$dob' WHERE id = $id";
		$query = mysqli_query($con,$q);
		header('location: patient_graph.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Doctor Login </title>
	<style>
		*{	
			font-family: 'Josefin Sans', sans-serif;
			margin-right: 0!important;
		}
		html{
				scroll-behavior: smooth;
		}
		label{
			size: 18px;
		}
	</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://kit.fontawesome.com/5da368dd82.js"></script>

<meta charset="utf-8">

<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">-->

<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body style="background: #373B44;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4286f4, #373B44); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
	<div class="container-fluid" style="
			padding-left: 0!important;
			padding-right: 0!important;
			">
		<!--Navbar-->
		<header style="height: 100px !important;">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="index.php"><i class="fas fa-procedures"></i> TheRenalProject</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</ul>	
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
						</li>
						<&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="#" onclick="under();">About Us <i class="far fa-address-card"></i></a>
						</li>
						<script>
							function under() {
								alert("This page is under construction");
							}
						</script>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>	
			</nav>
		</header>
		<!-- Main Content Of This WebPage -->
		<div class="container-fluid pt-4 mt-4">
				<div class="row">
					<div class="col-lg-4 pt-4"></div>	
					<div class="col-lg-4 card">
						<h2 class="text-center card-header text-dark">Update Patient registry <i class="fas fa-user-injured"></i></h2>
						<form class="card-body" method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label>Phone_number</label>
								<input type="number" class="form-control" name="phone_number">
							</div>
							<div class="form-group">
								<label>Age</label>
								<input type="text" class="form-control" name="age">
							</div>
							<div class="form-group">
								<label>DOB</label>
								<input type="date" class="form-control" name="dob">
							</div>
							<button type="submit" class="btn btn-success" name="done">Update patient register <i class="fas fa-plus-circle"></i></button>
						</form>
					</div>
					<div class="col-lg-4 pt-6"></div>
				</div>
				<style>
					label{
						font-size: 18px;
					}
				</style>
			</div>	
		</div>
	</div>
</body>
</html>