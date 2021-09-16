<?php
	//Registration Validation
	session_start();
	header('location: admin_panel.php');

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');

	$name = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$contact_number = $_POST['contact_number'];

	$q = " select * from login where user = '$name'  && email = '$email' && password = '$pass' && contact_number = '$contact_number'";
	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "duplicate data";
	}else{
		$qy = "insert into login (user, email, password, contact_number) values ('$name', '$email', '$pass', '$contact_number')";
		mysqli_query($con, $qy); 
	}
?>