<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> create doctor panel </title>
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
							<a class="nav-link" href="admin_panel.php">Home <i class="fas fa-home"></i></a>
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
						<h2 class="text-center card-header text-dark">Create doctor <i class="fas fa-user-md"></i></h2>
						<form class="card-body" action="doc_valid.php" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="user">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label>Contact_Number</label>
								<input type="number" class="form-control" name="contact_number">
							</div>
							<button type="submit" class="btn btn-success">Create <i class="fas fa-plus"></i></button>
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