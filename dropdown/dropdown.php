<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
	$con = mysqli_connect("localhost","root","","college");
	$sql = "select * from `countries`";
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
						$('#sstate').html(result)
					}
				});
			});
			$('#sstate').change(function() 
			{
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
</select>

<select name="sstate" id="sstate">
	<option value="">SELECT COUNTRY</option>
</select>

<select name="scity" id="scity">
	<option value="">SELECT STATE</option>
</select>