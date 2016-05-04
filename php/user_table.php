<table class="projects">
	<tr>
		<th></th>
		<th>uid</th>
		<th>email</th>
		<th>admin</th>
		<th>cas</th>
	</tr>
	<?php
		require_once "common/dbConnect.php";
		require_once "common/class.map.php";

		$map = new Map();

		$users = $map -> load_users();

		for ($i = 0; $i < count($users); $i++) {
			echo "<tr>";
			echo "<td><input type='checkbox' class='delete' id='" . $users[$i]['uid'] . "'></td>";			
			echo "<td class='clickable' onclick=editUser(" . $users[$i]['uid'] . ")> " . $users[$i]['uid'] . " </td>";
			echo "<td class='clickable' onclick=editUser(" . $users[$i]['uid'] . ")> " . $users[$i]['email'] . " </td>";
			echo "<td class='clickable' onclick=editUser(" . $users[$i]['uid'] . ")> " . $users[$i]['admin'] . " </td>";
			echo "<td class='clickable' onclick=editUser(" . $users[$i]['uid'] . ")> " . $users[$i]['cas'] . " </td>";
			echo "</tr>";
		}
	?>
</table>
<a href="#" onclick="editUser(-1)">Add a user</a><br>
<a href="#" onclick="deleteUsers()">Delete selected users</a>