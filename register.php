<?php


?>


<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="RegistrationCheck.php">
	<fieldset>
			<legend>REGISTRATION</legend>
			<table border="0">
				<tr>
					<td>Id: </td>
					<td><input type="text" name="id"  /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="confirmpassword" /></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="uname"  /></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<input type="radio" name="type" value="User"/> User
						<input type="radio" name="type" value="Admin"/> Admin 
					</td>
				</tr>
				<td>
				<hr>
						<input type="submit" name="submit" value="Sign Up">
						<a href = "login.html"> Sign In</a>
					</td>
	</fieldset>

</body>
</html>