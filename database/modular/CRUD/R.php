<?php 
	$connect = require_once('../db_setting.php');

	$sql="SELECT * FROM test_table";
	$result = mysqli_query($connect,$sql);
	mysqli_close($connect);
	return $result;
?>


<!-- json -->
<?php 
	// $connect = require_once('../db_setting.php');

	// $sql="SELECT * FROM test_table";
	// $result = mysqli_query($connect,$sql);
	// while ($row = $result->fetch_assoc()) {
	// 	$data[] = $row;
	// }

	// $json = json_encode($data);
	// echo $json;

	// return $json;
?>