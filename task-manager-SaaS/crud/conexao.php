<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	$host = "sql310.byetcluster.com";
	$user = "if0_38682005";
	$pass = "Hrgg7SIc9jYk2N";
	$database = "if0_38682005_tasks";
	$conn = mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conn, $database) or die(mysqli_error());

	mysqli_set_charset($conn, "utf8");

?>