<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin control panel </title>
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

<body style="background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
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
						<<li class="nav-item active">
							<a class="nav-link" href="branch_detail.php">Branch details <i class="fas fa-code-branch"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="" onclick="under();">Doctor detail <i class="fas fa-user-md"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="" onclick="under();">Staff detail <i class="fas fa-user"></i></a>
						</li>
					</ul>	
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="create_branch.php">create_branch <i class="fas fa-code-branch"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="create_doctor.php">create_doctor <i class="fas fa-user-md"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="create_staff.php">create_staff <i class="fas fa-user"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="#" onclick="under();">About Us <i class="far fa-address-card"></i></a>
						</li>
						<script>
							function under() {
								alert("This page is under construction");
							}
						</script>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</div>	
			</nav>
		</header>
		<!-- Main Content Of This WebPage -->
		<div class="container-fluid pb-5" style="height: 577px !important;width: 100%;">
			<div class="col-lg-12 mb-5">
				<br/>
				<h2 class="text-dark text-center mt-2"> Logged Users <i class="fas fa-users"></i></h2>
				<hr class="w-25 mx-auto">
				<br/>
				<table class="table table-striped table-hover table-bordered text-center" id="myTable">
					<tr class="bg-dark text-white">
						<td> Id </td>
						<td> Username </td>
						<td> Email </td>
						<td> Password </td>
						<td> Contact_Number </td>
						<td> Delete </td>
						<td> Update</td>
					</tr>
					<?php
						$q = "select * from login";
						$query = mysqli_query($con,$q);
							
						while ($res = mysqli_fetch_array($query)) {	
					?>
					<tr class="text-center">
						<td> <?php echo $res['id']; ?> </td>
						<td> <?php echo $res['user']; ?> </td>
						<td> <?php echo $res['email']; ?> </td>
						<td> <?php echo $res['password']; ?> </td>
						<td> <?php echo $res['contact_number']; ?> </td>
						<td><button class="btn btn-danger"> <a href="delete.php?id= <?php echo $res['id']; ?>" class="text-white" >Delete</a></button></td>
						<td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"  >Update</a></button></td>
					</tr>
					<?php
						}
					?>	
					</table>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>