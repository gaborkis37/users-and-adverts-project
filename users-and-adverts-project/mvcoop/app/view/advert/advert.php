<?php include VIEW. 'header.php'; ?>
<h1>ADVERTS PAGE</h1>
<?php
		echo "<table id=\"adverts\">";
			echo "<thead>";
				echo "<tr>";
					echo"<th> Title </th>";
					echo"<th> Username </th>";
				echo "</tr>";
			echo "</thead>";
			foreach($this->view_data['adverts'] as $advert) {
			echo "<tbody>";
				echo "<tr>";
					echo "<td>";
						echo $advert['title'];
					echo "</td>";
					echo "<td>";
						$usersList = $this->view_data['users'];
						$username = $usersList[$advert['user_id']-1]['name'];
						echo $username;
					echo "</td>";
				echo "</tr>";
			echo "</tbody>";
			}
		echo "</table>";
 ?>
<?php include VIEW. 'footer.php'; ?>