<?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'userdata');

	$Id = $_GET['id'];

	$q = " DELETE FROM `login` WHERE id = $Id ";

	mysqli_query($con, $q);

	header('location: admin_panel.php');

?>