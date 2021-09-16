<?php
	//Patient Validation
	session_start();
	header('location: register_patient.php');

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'register_patient');

	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];

	$q = " select * from patient where name = '$name' && phone_number = '$phone_number' && age = '$age' && dob = '$dob'";
	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "duplicate data";
	}else{
		$qy = "insert into patient (name, phone_number, age, dob) values ('$name', '$phone_number', '$age', '$dob')";
		mysqli_query($con, $qy); 
	}
?>