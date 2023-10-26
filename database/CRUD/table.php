<table border="1">
	<thead>User Profile</thead>
	<tbody>
		<tr>
            <th>User ID</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
		
		<?php
            $result = require_once('./R.php');
            echo 'result: ', var_dump($result).'<br>';
        ?>
		<?php
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_array($result)) {
				echo var_dump($row).'<br>';
			?>
				<tr>
					<td>user_id: <?php echo $row["user_id"] ?></td>
					<td>age: <?php echo $row["age"] ?></td>
					<td>email: <?php echo $row["email"] ?></td>
					<td>phone: <?php echo $row["phone"] ?></td>
				</tr>
			<?php
			}
		}
		else{
			echo "<tr><td>No Data</td></td>";
		}
		?>
	</tbody>
</table>