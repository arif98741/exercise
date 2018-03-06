<?php include "header.php"; ?>
		<div class="content">
			<div class="box">
				<ul>
					<li><a href="">Add User</a></li>
					<li><a href="">User List</a></li>
				</ul>
			</div>
			<div class="box">
				<h2>Add User</h2>
				<table>
					<tbody>
						<tr>
							<td><input type="text"  placeholder="Enter Name"></td>
							<td><input type="text" placeholder="Enter Email"></td>
							<td><input type="text" placeholder="Enter Address"></td>
							<td><input type="text" placeholder="Enter Contact"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="box">
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="?action=logout">Logout</a></li>
				</ul>
			</div>
		</div>
<?php include "footer.php"; ?>