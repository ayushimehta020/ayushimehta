<div class="table-responsive">
	<ul class="nav nav-tabs justify-content-center">
		<li class="nav-item">
			<a class="nav-link" href="employees.php">All</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="employees.php?department=Sales">Sales</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="employees.php?department=IT">IT</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="employees.php?leaves=12">More than 12 leaves</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="employees.php?leaves=12&department=IT">More than 12 leaves and IT</a>
		</li>
	</ul>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Department</th>
				<th>Salary</th>
				<th>Leave</th>
				<th>Joining Date</th>
				<th>Resign Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "connection.php";
			$dep = isset($_GET["department"]) ? $_GET["department"] : '%';
			$leaves = -1;
			$salary = 0;
			if (isset($_GET["leaves"]) && ctype_digit($_GET["leaves"])) {
				$leaves = intval($_GET["leaves"]);
			}
			$leaves++;

			$stmt = $mysqli->prepare("SELECT * FROM employee WHERE department LIKE ? AND emp_leave >= ?");
			$stmt->bind_param("si", $dep, $leaves);
			$stmt->execute();
			$result = $stmt->get_result();

			$i = 0;
			while ($row = $result->fetch_assoc()) {
				$i++;
				echo "<tr>
						<td>" . $i . "</td>
						<td>" . $row['employee_name'] . "</td>
						<td>" . $row['department'] . "</td>
						<td>" . $row['salary'] . "</td>
						<td>" . $row['emp_leave'] . "</td>
						<td>" . $row['joining_date'] . "</td>
						<td>" . $row['resign_data'] . "</td>
					</tr>";
			}
			mysqli_close($mysqli);
			?>
		</tbody>
	</table>
</div>