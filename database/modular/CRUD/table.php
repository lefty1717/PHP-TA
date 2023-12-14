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
			$_SESSION['user_id'] = 'asdf';
            $result = require_once('./R.php');
            // echo 'result: ', var_dump($result).'<br>';
			$data = mysqli_fetch_all($result, MYSQLI_BOTH);
        ?>
		<?php
			if (mysqli_num_rows($result) > 0) {
				foreach ($data as $row) {
			?>
					<tr>
						<td><?php echo $row["user_id"] ?></td>
						<td><?php echo $row["age"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><?php echo $row["phone"] ?></td>
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