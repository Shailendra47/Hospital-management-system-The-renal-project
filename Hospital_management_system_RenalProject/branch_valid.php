<?php
	//Registration Validation
	session_start();
	header('location: admin_panel.php');

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');

	$id = $_POST['id'];
	$name = $_POST["branch_name"];
	$amount_per_patient = $_POST['amount_per_patient'];

	$q = " select * from branch where branch_name = '$name' && amount_per_patient = '$amount_per_patient'";
	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "duplicate data";
	}else{
		$qy = "insert into branch (branch_name, amount_per_patient) values ('$name', '$amount_per_patient')";
		mysqli_query($con, $qy); 
	}
?>