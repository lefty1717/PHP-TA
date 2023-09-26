<table border="1">
	<thead>User Profile</thead>
	<tbody>
		<?php 
		$connect = require_once('../db_setting.php');

		$sql="SELECT * FROM test_table";
		$result = mysqli_query($connect,$sql)
		?>
		<?php
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td>user_id: <?php echo $row["user_id"] ?></td>
					<td>age: <?php echo $row["age"] ?></td>
					<td>email: <?php echo $row["email"] ?></td>
					<td>phone: <?php echo $row["phone"] ?></td>
				</tr>
			<?php
			}
			mysqli_close($connect);
		}
		else{
			echo "<tr><td>No Data</td></td>";
		}
		?>
	</tbody>
</table>