<?php include VIEW. 'header.php'; ?>
<h1>SHOW USERS</h1>
<?php
		echo "<table id=\"users\">";
			echo "<thead>";
				echo "<tr>";
					echo"<th> Name </th>";
				echo "</tr>";
			echo "</thead>";
			foreach($this->view_data['users'] as $user) {
			echo "<tbody>";
				echo "<tr>";
					echo "<td>";
						echo $user['name'];
					echo "</td>";
				echo "</tr>";
			echo "</tbody>";
			}
		echo "</table>";
 ?>

<?php include VIEW. 'footer.php'; ?>