<style>
	body
	{
		margin: 250px 0;
	}
	
	hr
	{
		margin-bottom: 20px;
	}

	.container
	{
		max-width: 30%;
		border: 1px solid black;
		padding: 30px;
		margin: 0 auto;
		background-color: #331654;
		color: floralwhite;
		border-radius: 10px;
		/* text-align: center; */
	}
	
	.btn
	{
		padding: 10px 50px;
		
		border-radius: 8px;
		background-color: blue;
		color: floralwhite;
		border: 0px;
	}
	
	.btn2
	{
		padding: 10px 50px;
		
		margin: 0 100px;
		border-radius: 8px;
		background-color: red;
		color: floralwhite;
		border: 0px;
	}
	
	input
	{
		border-radius: 5px;
		border: 0px;
		padding: 8px;
	}
	
	textarea 
	{
		border-radius: 5px;
		border: 0px;
		padding: 15px;
	}
	
</style>

<div class="container">
	<h3>Please spare a few minutes for giving your valuable feedback.</h3><hr>
	<form action="php2.php" method="POST">
		<label for="nm">Your name: &nbsp; &nbsp;</label>
		<input type="text" name="name" id="nm" required><br><br>
		<label for="gen">Gender: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<select name="gender" id="gen" required>
			<option value="">-- SELECT GENDER --</option>
			<option>Male</option>
			<option>Female</option>
		</select><br><br>
		<label for="business" name="occup">Occupation: &nbsp;</label>
		<input type="radio" name="occu" id="occ">
		<label for="occ">Service</label>
		<input type="radio" name="occu" id="occ1">
		<label for="occ1">Self-employed</label>
		<input type="radio" name="occu" id="occ2">
		<label for="occ2">Other</label><br><br>
		<label for="mail">Email Address: </label>
		<input type="email" name="email" id="mail"><br><br>
		<label for="com">Comments: &nbsp; &nbsp;</label>
		<textarea id="com" name="comm"></textarea><br><br>
		<input type="submit" value="Submit" class="btn">
		<input type="reset" value="Reset" class="btn2">
	</form>
</div>
