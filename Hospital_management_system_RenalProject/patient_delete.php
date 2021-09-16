<?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'register_patient');

	$Id = $_GET['id'];

	$q = " DELETE FROM `patient` WHERE id = $Id ";

	mysqli_query($con, $q);

	header('location: patient_graph.php');

?>