<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>User ID</th>
				<th>Age</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$connect = require_once('../db_setting.php');
			$sql = "SELECT * FROM test_table";
			$result = mysqli_query($connect, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)) {
					echo var_dump($row);
					?>
					<tr>
						<td><?php echo $row["user_id"] ?></td>
						<td><?php echo $row["age"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><?php echo $row["phone"] ?></td>
					</tr>
					<?php
				}
			} else
				echo "<tr><td colspan='4'>No Data</td></tr>";
			?>
		</tbody>
	</table>
</body>
</html>
