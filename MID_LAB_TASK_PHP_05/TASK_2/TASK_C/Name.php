<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname'];} ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>