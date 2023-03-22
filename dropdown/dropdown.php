<?php
	$con = mysqli_connect("localhost","root","","college");
	$sql = "select * from `countries` where `id`='id'";
	$res = mysqli_query($con,$sql);
	?>
		<script>
			$(document).ready(function() 
			{
				$('#scountry').change(function() 
				{
					var cid = this.value
					$.ajax ({
						url : "getstate.php",
						type : "POST",
						data :
						{
							cid : cid
						},
						cache : false,
						success : function(result)
						{
							console.log(result)
							$('s#state').html(result)
						}
					});
				});
				$('#sstate').change(function() {
					var sid = this.value
					$.ajax ({
						url : "getcity.php",
						type : "POST",
						data : 
						{
							sid : sid
						},
						cache : false,
						success : function(result)
						{
							console.log(result)
							$('#scity').html(result)
						}
					});
				});
			});
		</script>
		<select name="scountry" id="scountry">
		<?php
		while($row = mysqli_fetch_assoc($res))
		{
			?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
			<?php
		}
?>

<select name="sstate" id="sstate">
	<option value="">SELECT COUNTRY</option>
</select>

<select>
	<option value="">SELECT STATE</option>
</select>