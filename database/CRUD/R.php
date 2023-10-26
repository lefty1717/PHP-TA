<?php 
	$connect = require_once('../db_setting.php');

	$sql="SELECT * FROM test_table";
	$result = mysqli_query($connect,$sql);
	return $result;
?>