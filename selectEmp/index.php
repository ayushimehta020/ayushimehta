<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>

<?php
	$con = mysqli_connect("localhost", "root", "", "emp_data");
	$sql = "select * from `emp`";
	$res = mysqli_query($con,$sql);
	?>
	<script>
		$(document).ready(function() 
		{
			$('#scode').change(function() 
			{
				var code = $(this).val()
				$.ajax ({
					url : "getresult.php",
					method : "POST",
					data :
					{
						code : code
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
	<select name="scode" id="scode" class="form-select mt-2">
	<option value="">SELECT EMP CODE</option>
	<?php
	while($row = mysqli_fetch_assoc($res))
	{
		?>
			<option value="<?php echo $row['emp_code']; ?>"><?php echo $row['emp_code']; ?></option>
		<?php
	}
?>
</select>
</div>

<div class="container mt-2">
	<table class="table table-bordered" id="result">
	
	</table>
</div>