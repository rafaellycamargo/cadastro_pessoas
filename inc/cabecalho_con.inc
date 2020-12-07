<?php
	$con = mysqli_connect("localhost", "rafa", "");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "banco");
	if(!$db) {
		echo mysqli_error($con);
	}
?>