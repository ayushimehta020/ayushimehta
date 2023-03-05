<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container">
	<form action="index.php" method="POST">
		<div class="input-group mx-auto w-50 mb-3" style="margin-top: 300px;">
		  <input type="text" name="txtsearch" class="form-control" placeholder="Search for..." onkeyup="searchFunction()">
		  <button class="btn btn-outline-secondary" type="submit" name="submit">Button</button>
		</div>
	</form>
</div>
<div id="search_results">
  <!-- search results will be displayed here -->
</div>

<h4 class="text-center">Results</h4>
<?php
	include "config.php";
	if(isset($_POST['txtsearch'])) {
		$search = $_POST['txtsearch'];
		$btn = $_POST['submit'];
		$sql = "select * from `search` where `search_name` LIKE '%$search%'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) > 0) {	
			while($row = mysqli_fetch_assoc($result)) {
				// echo "<p>" . $row['search_name'] . "</p>";
				?>
					<div class="container">
						<div class="card">
							<div class="card-body">
								<a href="error.html" style="text-decoration: none"><p class="text-center"><?php echo $row['search_name']; ?></p></a>
							</div>
						</div>
					</div>
				<?php
			}
		} else {
			echo "<p>No results found.</p>";
		}
	}
?>