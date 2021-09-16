<?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');

	$Id = $_GET['id'];

	$q = " DELETE FROM `branch` WHERE id = $Id ";

	mysqli_query($con, $q);

	header('location: branch_detail.php');

?>