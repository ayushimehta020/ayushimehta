<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
<?php
	$con = mysqli_connect("localhost","root","","college1");
	$sql = "select * from `student`";
	$res = mysqli_query($con,$sql);
	?>
	<script>
		$(document).ready(function() 
		{
			$('#senr').change(function() 
			{
				var enr = $(this).val()
				$.ajax ({
					url : "getresult.php",
					method : "POST",
					data :
					{
						enr : enr
					},
					cache : false,
					success : function(response)
					{
						$('#result').html(response)
					}
				});
			});
		});
	</script>
	<div class="container">
	<select name="senr" id="senr" class="form-select mt-2">
	<option value="">SELECT ENR</option>
	<?php
	while($row = mysqli_fetch_assoc($res))
	{
		?>
			<option value="<?php echo $row['enr']; ?>"><?php echo $row['enr']; ?></option>
		<?php
	}
?>
</select>
</div>

<div class="container">
	<table class="table table-sm table-bordered mt-2" id="result">
		
	</table>
</div>